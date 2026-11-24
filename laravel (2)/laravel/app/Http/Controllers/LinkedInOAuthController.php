<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class LinkedInOAuthController extends Controller
{
    /**
     * Redirect to LinkedIn OAuth.
     */
    public function connect()
    {
        $clientId = config('services.linkedin.client_id');
        $redirect = config('services.linkedin.redirect');

        if (!$clientId || !$redirect) {
            return redirect('/admin')
                ->with('error', 'LinkedIn configuration is missing.');
        }

        $state = Str::random(64);

        session(['linkedin_state' => $state]);
        session()->save();

        $query = http_build_query([
            'response_type' => 'code',
            'client_id' => $clientId,
            'redirect_uri' => $redirect,
            'scope' => 'w_organization_social',
            'state' => $state,
        ]);

        return redirect(
            'https://www.linkedin.com/oauth/v2/authorization?' . $query
        );
    }

    /**
     * LinkedIn OAuth Callback.
     */
    public function callback(Request $request)
    {
        if ($request->filled('error')) {
            session()->forget('linkedin_state');

            return redirect('/admin')
                ->with('error', 'LinkedIn authorization was cancelled.');
        }

        $code = $request->query('code');
        $state = $request->query('state');

        $sessionState = session('linkedin_state');

        if (!$code) {
            return redirect('/admin')
                ->with('error', 'LinkedIn authorization code not received.');
        }

        if (
            !$sessionState ||
            !$state ||
            !hash_equals($sessionState, $state)
        ) {
            return redirect('/admin')
                ->with('error', 'Invalid LinkedIn OAuth state.');
        }

        try {

            $tokenResponse = Http::asForm()
                ->timeout(30)
                ->post(
                    'https://www.linkedin.com/oauth/v2/accessToken',
                    [
                        'grant_type' => 'authorization_code',
                        'code' => $code,
                        'redirect_uri' => config('services.linkedin.redirect'),
                        'client_id' => config('services.linkedin.client_id'),
                        'client_secret' => config('services.linkedin.client_secret'),
                    ]
                );

            if (!$tokenResponse->successful()) {

                Log::error('LinkedIn Token Exchange Failed', [
                    'status' => $tokenResponse->status(),
                    'response' => $tokenResponse->json(),
                ]);

                return redirect('/admin')
                    ->with('error', 'Unable to connect LinkedIn account.');
            }

            $tokenData = $tokenResponse->json();

            $token = $tokenData['access_token'] ?? null;

            if (!$token) {
                return redirect('/admin')
                    ->with('error', 'LinkedIn access token not received.');
            }

            $organizationId = config(
                'services.linkedin.organization_id'
            );

            if (!$organizationId) {
                return redirect('/admin')
                    ->with('error', 'LinkedIn Organization ID is missing.');
            }

            // Regenerate session ID after successful authorization.
            $request->session()->regenerate();

            session([
                'linkedin_token' => $token,

                'linkedin_organization_id' => $organizationId,

                'linkedin_token_expires_in' =>
                    $tokenData['expires_in'] ?? null,
            ]);

            session()->forget('linkedin_state');
            session()->save();

            return redirect('/admin')
                ->with(
                    'success',
                    'LinkedIn Company Page connected successfully.'
                );

        } catch (\Throwable $e) {

            Log::error('LinkedIn OAuth Exception', [
                'message' => $e->getMessage(),
            ]);

            return redirect('/admin')
                ->with('error', 'LinkedIn connection failed.');
        }
    }
}
