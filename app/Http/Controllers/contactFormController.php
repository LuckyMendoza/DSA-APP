<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;
use App\Models\Inquiry;

class ContactFormController extends Controller
{
    public function inquirySend(Request $request)
    { 
        $request->validate([
            'subject' => 'required|string|max:255',
            'fullName' => 'required|string|max:255',
            'email' => 'required|email:dns',
            'contactNumber' => 'required|regex:/^[0-9+\-\s()]+$/',
            'message' => 'required|string|max:1000',
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
            // Save to database
            Inquiry::create([
                'subject' => $inquiryData['subject'],
                'full_name' => $inquiryData['fullName'],
                'email' => $inquiryData['email'],
                'contact_number' => $inquiryData['contactNumber'],
                'message' => $inquiryData['message'],
                'status' => 'pending'
            ]);

            // Send email to your email address
            Mail::to('worklink.solution.site@gmail.com')
                ->send(new InquiryMail($inquiryData));

            // Redirect back with success message
            return redirect()->back()->with('success', 'Your inquiry has been sent successfully! We will get back to you soon.');
            
        } catch (\Exception $e) {
            // Handle email sending failure
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Sorry, there was an error sending your inquiry. Please try again later.');
        }
    }

    // Optional: Admin function to view all inquiries
    // public function viewInquiries()
    // {
    //     $inquiries = Inquiry::orderBy('created_at', 'desc')->paginate(10);
    //     return view('admin.inquiries', compact('inquiries'));
    // }
}