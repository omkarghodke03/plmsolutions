<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\AdminJobApplicationMail;
use App\Mail\UserJobApplicationMail;

class JobApplicationController extends Controller
{
    public function apply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'contact_number' => 'required|string|max:20',
            'experience'     => 'required|string|max:100',
            'notice_period'  => 'required|string|max:100',
            'ctc'            => 'required|string|max:100',
            'linkedin_link'  => 'nullable|url|max:255',
            'resume'         => 'required|file|mimes:pdf,doc,docx|max:5120',
            'message'        => 'nullable|string|max:2000',
            'job_title'      => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        $resumeFile     = $request->file('resume');
        $resumeContent  = file_get_contents($resumeFile->getRealPath()); 
        $resumeName     = $resumeFile->getClientOriginalName();
        $resumeMimeType = $resumeFile->getClientMimeType();

        $mailData = [
            'name'           => $data['name'],
            'email'          => $data['email'],
            'contact_number' => $data['contact_number'],
            'experience'     => $data['experience'],
            'notice_period'  => $data['notice_period'],
            'ctc'            => $data['ctc'],
            'linkedin_link'  => $data['linkedin_link'] ?? '-',
            'message'        => $data['message'] ?? '-',
            'job_title'      => $data['job_title'] ?? 'General Application',
        ];

        try {
            
            Mail::to(env('ADMIN_EMAIL'))->send(
                new AdminJobApplicationMail($mailData, $resumeContent, $resumeName, $resumeMimeType)
            );

           
            Mail::to($data['email'])->send(
                new UserJobApplicationMail($mailData)
            );
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage(), 
            ], 500);
        }

        return response()->json([
            'status'  => true,
            'message' => 'Application submitted successfully!',
        ]);
    }
}