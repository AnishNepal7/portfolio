<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmission;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    
    public function messages()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.messages', compact('messages'));
    }
    
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        // Send email
        // Uncomment this when you're ready to send emails
        // Mail::to('anishnepal1905@gmail.com')->send(new ContactFormSubmission($validated));
        Message::create($validated);
        // Return with success message
        return back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
