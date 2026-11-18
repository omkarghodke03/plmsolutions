<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\AdminContactMail;
use App\Mail\UserContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact-us');
    }

    public function store(Request $request)
    {
       
        if (!empty($request->input('website'))) {
            return redirect()->back()->with('success', 'Thank you! We will get back to you soon.');
        }

        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:100'],
            'email'         => ['required', 'email', 'max:255'],
            'phone'         => ['required','string','max:15','regex:/^\+[1-9][0-9\s\-()]{7,28}$/',],
            'service'       => ['nullable', 'string', 'max:100'],
            'project_brief' => ['nullable', 'string', 'max:2000'],
        ]);

        $contact = (object) $validated;

        try {
            Mail::to(config('mail.admin_address', env('ADMIN_EMAIL')))
                ->send(new AdminContactMail($contact));

            Mail::to($contact->email)
                ->send(new UserContactMail($contact));

        } catch (\Throwable $e) {
            Log::error('Contact form mail failed: ' . $e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Something went wrong while sending your request. Please try again later.')
                ->withFragment('rsForm');
        }

        return redirect()->back()
            ->with('success', 'Thank you! Your request has been submitted. We will get back to you within 1 business day.')
            ->withFragment('rsForm');
    }
}