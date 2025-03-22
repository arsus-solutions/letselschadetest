<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you can add your email sending logic
        // For example:
        // Mail::to('info@letselschade-begeleiding.nl')->send(new ContactFormMail($validated));

        return back()->with('success', 'Bedankt voor uw bericht. We nemen zo spoedig mogelijk contact met u op.');
    }
} 