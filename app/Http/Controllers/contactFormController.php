<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;
use App\Mail\AutoReplyMail;
use App\Models\Inquiry;

class ContactFormController extends Controller
{
    public function inquirySend(Request $request)
    { 
        $request->validate([
            'subject' => 'required|string|max:255',
            'fullName' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns,spoof',
            'contactNumber' => 'required|regex:/^[0-9+\-\s()]+$/',
            'message' => 'required|string|max:1000',
        ], [
            'email.email' => 'Please enter a valid email address.',
            'email.dns' => 'The email domain does not exist.',
            'email.spoof' => 'This email address appears to be invalid.',
        ]);

        // Get all validated data
        $inquiryData = $request->only([
            'subject',
            'fullName', 
            'email',
            'contactNumber',
            'message'
        ]);

        try {
            // Verify if email exists using a simple connection test
            $emailParts = explode('@', $inquiryData['email']);
            $domain = $emailParts[1];
            
            if (!checkdnsrr($domain, 'MX')) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['email' => 'This email address appears to be invalid.']);
            }

            // Save to database
            Inquiry::create([
                'subject' => $inquiryData['subject'],
                'full_name' => $inquiryData['fullName'],
                'email' => $inquiryData['email'],
                'contact_number' => $inquiryData['contactNumber'],
                'message' => $inquiryData['message'],
                'status' => 'pending'
            ]);

            // Send notification email to admin
            Mail::to('worklink.solution.site@gmail.com')
                ->send(new InquiryMail($inquiryData));

            // Send auto-reply email to user
            Mail::to($inquiryData['email'])
                ->send(new AutoReplyMail($inquiryData));

            // Redirect back with success message
            return redirect()->back()->with('success', 'Your inquiry has been sent successfully! Please check your email for confirmation.');
            
        } catch (\Exception $e) {
            // Handle email sending failure
            return redirect()->back()
                ->withInput()
                ->with('error', 'Sorry, there was an error sending your inquiry. Please try again later.');
        }
    }

   
}