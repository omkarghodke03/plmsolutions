<?php

namespace App\Http\Controllers;

use App\Services\Indeed\IndeedFeedService;
use Illuminate\Http\Response;
use Throwable;

class IndeedFeedController extends Controller
{
    /**
     * Public Indeed XML feed.
     */
    public function jobs(
        IndeedFeedService $feedService
    ): Response {
        if (! config('indeed.enabled')) {
            abort(404);
        }

        try {
            $xml = $feedService->generate();

            return response(
                $xml,
                200,
                [
                    'Content-Type' =>
                        'application/xml; charset=UTF-8',

                    'Cache-Control' =>
                        'no-cache, no-store, must-revalidate',

                    'Pragma' =>
                        'no-cache',

                    'Expires' =>
                        '0',
                ]
            );
        } catch (Throwable $exception) {

            report($exception);

            return response(
                '<?xml version="1.0" encoding="UTF-8"?>'
                . '<source>'
                . '<error>'
                . 'Unable to generate Indeed feed.'
                . '</error>'
                . '</source>',
                500,
                [
                    'Content-Type' =>
                        'application/xml; charset=UTF-8',
                ]
            );
        }
    }
}