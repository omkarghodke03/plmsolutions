<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupportTicket; // Import the model

class SupportTicketController extends Controller
{
    // This method shows the form
    public function create()
    {
        return view('support');
    }

    // This method stores the form submission
    public function store(Request $request)
    {
        // Validate the user's input
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create the record in the database
        SupportTicket::create($validated);

        // Redirect the user back with a success message
        return redirect()->route('support.create')->with('success', 'Your ticket has been submitted successfully!');
    }
}