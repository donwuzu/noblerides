<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;

class ContactController extends Controller
{
     public function show() {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create($validated);

            // Send to support email
    Mail::to('info@noblerides.co.ke')->send(new ContactMessageMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
