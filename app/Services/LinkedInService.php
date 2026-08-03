<?php

namespace App\Services;

use App\Models\JobPost;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LinkedInService
{
    public function postJob(JobPost $job): bool
    {
        $token = session('linkedin_token');
        $personId = session('linkedin_sub');

        if (!$token || !$personId) {
            Log::error('LinkedIn posting failed: User is not authenticated via LinkedIn.');
            return false;
        }

        $jobUrl = route('jobs.show', $job->slug);
        $text = "🚀 New Opportunity: {$job->title}\n\n{$job->description}\n\nApply here: {$jobUrl}";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'LinkedIn-Version' => '202507',
            'X-Restli-Protocol-Version' => '2.0.0',
            'Content-Type' => 'application/json'
        ])->post('https://api.linkedin.com/rest/posts', [
            "author" => "urn:li:person:" . $personId,
            "commentary" => $text,
            "visibility" => "PUBLIC",
            "distribution" => [
                "feedDistribution" => "MAIN_FEED",
                "targetEntities" => [],
                "thirdPartyDistributionChannels" => []
            ],
            "lifecycleState" => "PUBLISHED",
            "isReshareDisabledByAuthor" => false
        ]);

        if ($response->successful()) {
            return true;
        }

        Log::error('LinkedIn API Error: ' . $response->body());
        return false;
    }
}