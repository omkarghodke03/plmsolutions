<?php

namespace App\Services;

use App\Models\JobPost;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LinkedInService
{
    private const LINKEDIN_VERSION = '202607';

    private const POSTS_ENDPOINT =
        'https://api.linkedin.com/rest/posts';

    /**
     * Publish JobPost to LinkedIn Company Page.
     */
    public function postJob(JobPost $job): array
    {
        $token = session('linkedin_token');

        $organizationId = config(
            'services.linkedin.organization_id'
        );

        if (!$token || !$organizationId) {

            Log::warning('LinkedIn connection missing.', [
                'job_id' => $job->id,
            ]);

            return [
                'success' => false,
                'message' => 'LinkedIn Company Page is not connected.',
            ];
        }

        $text = $this->buildJobPostContent($job);

        try {

            $response = Http::timeout(30)
                ->withToken($token)
                ->withHeaders([
                    'LinkedIn-Version' => self::LINKEDIN_VERSION,
                    'X-Restli-Protocol-Version' => '2.0.0',
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ])
                ->post(self::POSTS_ENDPOINT, [

                    // Company Page Author
                    'author' =>
                        'urn:li:organization:' . $organizationId,

                    // Post Content
                    'commentary' => $text,

                    // Visibility
                    'visibility' => 'PUBLIC',

                    // Distribution
                    'distribution' => [
                        'feedDistribution' => 'MAIN_FEED',
                        'targetEntities' => [],
                        'thirdPartyDistributionChannels' => [],
                    ],

                    // Publish Immediately
                    'lifecycleState' => 'PUBLISHED',

                    'isReshareDisabledByAuthor' => false,
                ]);

            if ($response->status() === 201) {

                $linkedinPostId =
                    $response->header('x-restli-id');

                Log::info(
                    'LinkedIn Company Post Published',
                    [
                        'job_id' => $job->id,
                        'organization_id' => $organizationId,
                        'linkedin_post_id' => $linkedinPostId,
                    ]
                );

                return [
                    'success' => true,
                    'message' =>
                        'LinkedIn Company Post published successfully.',
                    'linkedin_post_id' => $linkedinPostId,
                ];
            }

            Log::error('LinkedIn Company Post API Error', [
                'job_id' => $job->id,
                'status' => $response->status(),
                'response' => $response->body(),
            ]);

            $error = $response->json();

            return [
                'success' => false,
                'message' =>
                    'LinkedIn API Error (' .
                    $response->status() .
                    '): ' .
                    ($error['message'] ??
                        $error['error_description'] ??
                        $response->body()),
            ];

        } catch (\Throwable $e) {

            Log::error('LinkedIn Publishing Exception', [
                'job_id' => $job->id,
                'message' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => 'LinkedIn connection error: ' .
                    $e->getMessage(),
            ];
        }
    }

    /**
     * Build Job Post Content.
     */
    private function buildJobPostContent(JobPost $job): string
    {
        $text =
            "🚀 New Job Opportunity\n\n" .
            "Position: {$job->title}\n\n" .
            $job->description;

        $platforms = $job->platforms ?? [];

        if (in_array('website', $platforms, true)) {

            $jobUrl = route('jobs.show', $job->slug);

            $text .=
                "\n\nApply / Job Details:\n" .
                $jobUrl;
        }

        return $text;
    }
}
