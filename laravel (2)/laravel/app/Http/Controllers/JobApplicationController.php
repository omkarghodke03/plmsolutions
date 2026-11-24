<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Stevebauman\Location\Facades\Location;
use App\Mail\AdminJobApplicationMail;
use App\Mail\UserJobApplicationMail;

class JobApplicationController extends Controller
{
    public function apply(Request $request)
    {
        $validator = Validator::make($request->all(), [
    'name'           => 'required|string|max:255',
    'email'          => 'required|email:rfc,dns|max:255',
    'contact_number' => ['required', 'string', 'max:17', 'regex:/^\+?[0-9\s\-()]{7,17}$/'],
    'experience'     => 'required|string|max:100',
    'notice_period'  => 'required|digits_between:1,3',
    'ctc'            => 'required|digits_between:1,7',
    'linkedin_link'  => 'nullable|url|max:255',
    'resume'         => 'required|file|mimes:pdf,doc,docx|max:5120',
    'message'        => 'nullable|string|max:2000',
    'job_title'      => 'nullable|string|max:255',
    'page_url'       => 'nullable|string|max:500',
    ], [
    'email.email'                  => 'Please enter a valid email address.',
    'contact_number.max'           => 'Contact number cannot exceed 17 characters.',
    'contact_number.regex'         => 'Enter a valid contact number (digits, + - ( ) only).',
    'notice_period.digits_between' => 'Notice period must be a number up to 3 digits (days).',
    'ctc.digits_between'           => 'CTC must be a number up to 7 digits.',
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

       
        $ip = $request->ip();
        $adminData = array_merge($mailData, [
            'ip'       => $ip,
            'location' => $this->resolveLocation($ip),
            'page_url' => $data['page_url'] ?? $request->headers->get('referer') ?? '-',
        ]);

        try {
            $admin = Mail::to(config('mail.admin_address'));

            if ($cc = config('mail.admin_cc')) {
                $admin->cc($cc);
            }

            $admin->send(
                new AdminJobApplicationMail($adminData, $resumeContent, $resumeName, $resumeMimeType)
            );

            Mail::to($data['email'])->send(
                new UserJobApplicationMail($mailData)
            );
        } catch (\Throwable $e) {
            Log::error('Job application mail failed: ' . $e->getMessage());

            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong while submitting your application. Please try again later.',
            ], 500);
        }

        return response()->json([
            'status'  => true,
            'message' => 'Application submitted successfully!',
        ]);
    }

    private function resolveLocation(?string $ip): string
    {
        try {
            if (!$ip || in_array($ip, ['127.0.0.1', '::1'])) {
                return 'Local / Unknown';
            }

            $pos = Location::get($ip);

            if (!$pos) {
                return 'Unknown';
            }

            return collect([$pos->cityName, $pos->regionName, $pos->countryName])
                ->filter()
                ->implode(', ') ?: 'Unknown';
        } catch (\Throwable $e) {
            Log::warning('Location lookup failed: ' . $e->getMessage());
            return 'Unknown';
        }
    }
}