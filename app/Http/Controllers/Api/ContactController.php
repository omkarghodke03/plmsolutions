<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission; // <-- Import the model
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:12',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Create the submission in the database
        $submission = ContactSubmission::create($validatedData);

        // 3. Send back a success response
        return response()->json([
            'message' => 'Contact submission received successfully!',
            'data' => $submission
        ], 201); // 201 means "Created"
    }
}