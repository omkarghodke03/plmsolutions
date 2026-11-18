<?php

namespace App\Services;

use App\Models\JobPost;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LinkedInService
{
    /**
     * LinkedIn API version.
     */
    private const LINKEDIN_VERSION = '202607';

    /**
     * LinkedIn Posts API.
     */
    private const POSTS_ENDPOINT =
        'https://api.linkedin.com/rest/posts';


    /**
     * Publish JobPost to LinkedIn.
     *
     * IMPORTANT:
     *
     * This creates a LinkedIn Feed Post.
     *
     * It does NOT create a native LinkedIn Jobs listing.
     */
    public function postJob(JobPost $job): array
    {
        /*
        |--------------------------------------------------------------------------
        | Get Existing LinkedIn Session
        |--------------------------------------------------------------------------
        |
        | We use the SAME session created by:
        |
        | /linkedin/connect
        |
        */

        $token = session('linkedin_token');

        $personId = session('linkedin_sub');


        /*
        |--------------------------------------------------------------------------
        | Session Check
        |--------------------------------------------------------------------------
        */

        if (!$token || !$personId) {

            Log::warning(
                'LinkedIn session missing during Job Post.',
                [
                    'job_id' => $job->id,
                    'has_token' => !empty($token),
                    'has_person_id' => !empty($personId),
                ]
            );

            return [
                'success' => false,
                'message' => 'LinkedIn account is not connected.',
            ];
        }


        /*
        |--------------------------------------------------------------------------
        | Build Post Content
        |--------------------------------------------------------------------------
        */

        $text = $this->buildJobPostContent($job);


        /*
        |--------------------------------------------------------------------------
        | Send LinkedIn API Request
        |--------------------------------------------------------------------------
        */

        try {

            $response = Http::timeout(30)
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $token,

                    'LinkedIn-Version' =>
                        self::LINKEDIN_VERSION,

                    'X-Restli-Protocol-Version' =>
                        '2.0.0',

                    'Content-Type' =>
                        'application/json',

                    'Accept' =>
                        'application/json',
                ])
                ->post(
                    self::POSTS_ENDPOINT,
                    [
                        /*
                        |--------------------------------------------------------------------------
                        | Authenticated LinkedIn Person
                        |--------------------------------------------------------------------------
                        */

                        'author' =>
                            'urn:li:person:' . $personId,


                        /*
                        |--------------------------------------------------------------------------
                        | Post Text
                        |--------------------------------------------------------------------------
                        */

                        'commentary' => $text,


                        /*
                        |--------------------------------------------------------------------------
                        | Visibility
                        |--------------------------------------------------------------------------
                        */

                        'visibility' => 'PUBLIC',


                        /*
                        |--------------------------------------------------------------------------
                        | Distribution
                        |--------------------------------------------------------------------------
                        */

                        'distribution' => [
                            'feedDistribution' => 'MAIN_FEED',

                            'targetEntities' => [],

                            'thirdPartyDistributionChannels' => [],
                        ],


                        /*
                        |--------------------------------------------------------------------------
                        | Publish Immediately
                        |--------------------------------------------------------------------------
                        */

                        'lifecycleState' => 'PUBLISHED',


                        'isReshareDisabledByAuthor' => false,
                    ]
                );


            /*
            |--------------------------------------------------------------------------
            | SUCCESS
            |--------------------------------------------------------------------------
            */

        if ($response->status() === 201) {

    $linkedinPostId =
        $response->header('x-restli-id');

    Log::info(
        'LinkedIn Job Post published successfully.',
        [
            'job_id' => $job->id,
            'linkedin_post_id' => $linkedinPostId,
            'status' => $response->status(),
        ]
    );

    return [
        'success' => true,
        'message' => 'LinkedIn post published successfully.',
        'linkedin_post_id' => $linkedinPostId,
    ];
}


            $errorBody = $response->body();


            Log::error(
                'LinkedIn Job Post API Error.',
                [
                    'job_id' => $job->id,

                    'status' =>
                        $response->status(),

                    'response' =>
                        $errorBody,
                ]
            );


            /*
            |--------------------------------------------------------------------------
            | Try to extract readable LinkedIn message
            |--------------------------------------------------------------------------
            */

            $message = $this->extractErrorMessage(
                $response
            );


            return [
                'success' => false,

                'message' =>
                    "LinkedIn API Error ({$response->status()}): {$message}",
            ];


        } catch (\Throwable $e) {

            Log::error(
                'LinkedIn Job Post Exception.',
                [
                    'job_id' => $job->id,

                    'message' =>
                        $e->getMessage(),
                ]
            );


            return [
                'success' => false,

                'message' =>
                    'LinkedIn connection error: ' .
                    $e->getMessage(),
            ];
        }
    }


    /**
     * Build LinkedIn Job Post content.
     */
    private function buildJobPostContent(
        JobPost $job
    ): string {

        $text =
            "🚀 New Job Opportunity\n\n" .

            "Position: {$job->title}\n\n" .

            $job->description;


        /*
        |--------------------------------------------------------------------------
        | Add Website URL ONLY when Website is selected
        |--------------------------------------------------------------------------
        */

        $platforms = $job->platforms ?? [];


        if (in_array('website', $platforms)) {

            $jobUrl =
                route('jobs.show', $job->slug);


            $text .=
                "\n\nApply / Job Details:\n" .
                $jobUrl;
        }


        return $text;
    }


    /**
     * Extract readable LinkedIn API error.
     */
    private function extractErrorMessage($response): string
    {
        $json = $response->json();


        /*
        |--------------------------------------------------------------------------
        | LinkedIn error field
        |--------------------------------------------------------------------------
        */

        if (is_array($json)) {

            if (!empty($json['message'])) {
                return $json['message'];
            }


            if (!empty($json['error_description'])) {
                return $json['error_description'];
            }


            if (!empty($json['serviceErrorCode'])) {

                return
                    'LinkedIn service error code: ' .
                    $json['serviceErrorCode'];
            }
        }


        /*
        |--------------------------------------------------------------------------
        | Fallback
        |--------------------------------------------------------------------------
        */

        $body = trim($response->body());


        if ($body !== '') {
            return $body;
        }


        return 'Unknown LinkedIn API error.';
    }
}