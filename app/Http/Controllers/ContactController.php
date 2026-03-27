<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Mail\ContactAdminMail;
use App\Mail\ContactUserMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Honeypot spam check
        if ($request->filled('_honey')) {
            return redirect()->back();
        }

        $validated = $request->validate([
            'name'    => ['required', 'string', 'min:2', 'max:100'],
            'email'   => ['required', 'email:rfc,dns', 'max:150'],
            'service' => ['nullable', 'string', 'max:100'],
        ]);

        $contact = Contact::create($validated);

        // Email to admin
        Mail::to(config('mail.admin_email', env('ADMIN_EMAIL')))
            ->send(new ContactAdminMail($contact));

        // Confirmation to user
        Mail::to($contact->email)
            ->send(new ContactUserMail($contact));

        return redirect()->back()->with(
            'success',
            'Thank you! We\'ll be in touch within 1 business day.'
        );
    }
}