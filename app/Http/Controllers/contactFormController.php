<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{
    public function inquirySend(Request $request)
    {
        // Validate first (outside try-catch)
        $request->validate([
            'subject' => 'required|string|max:255',
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email:rfc,dns|max:250',
            'contactNumber' => 'required|regex:/^[0-9+\-\s()]+$/',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Save to database
            $inquiry = Inquiry::create([
                'subject' => $request->subject,
                'full_name' => $request->fullName, // use fullName
                'email' => $request->email,
                'contact_number' => $request->contactNumber, // use contactNumber
                'message' => $request->message,
                'status' => 'pending'
            ]);

            // Send email
            Mail::to('worklink.solution.site@gmail.com')
                ->send(new InquiryMail($request->all()));

            return redirect()->back()->with('success', 'Your inquiry has been sent successfully! We will get back to you soon.');
        } catch (\Exception $e) {r
            // Log the error for debugging
            // dd($e->getMessage());
            return redirect()->back()->with('error', 'Sorry, there was an error sending your inquiry. Please try again later.');
        }
    }
}