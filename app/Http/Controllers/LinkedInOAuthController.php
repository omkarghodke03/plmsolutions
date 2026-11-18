<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class LinkedInOAuthController extends Controller
{
    /**
     * Redirect admin to LinkedIn OAuth authorization page.
     */
    public function connect()
    {
        $state = Str::random(40);

        session(['linkedin_state' => $state]);
        session()->save(); // Force save session before redirect

        $query = http_build_query([
            'response_type' => 'code',
            'client_id'     => config('services.linkedin.client_id'),
            'redirect_uri'  => config('services.linkedin.redirect'),
            'scope'         => 'openid profile email w_member_social',
            'state'         => $state,
        ]);

        return redirect('https://www.linkedin.com/oauth/v2/authorization?' . $query);
    }

    /**
     * LinkedIn OAuth callback.
     */
    public function callback(Request $request)
    {
        if (! $request->has('code')) {
            return response()->json([
                'error'   => 'Authorization code not received.',
                'details' => $request->all(),
            ], 400);
        }

        $sessionState = session('linkedin_state');

        if (! $sessionState || $request->state !== $sessionState) {
            return response()->json([
                'error' => 'Invalid OAuth state.',
            ], 403);
        }

        // Token Exchange
        $tokenResponse = Http::asForm()->post('https://www.linkedin.com/oauth/v2/accessToken', [
            'grant_type'    => 'authorization_code',
            'code'          => $request->code,
            'redirect_uri'  => config('services.linkedin.redirect'),
            'client_id'     => config('services.linkedin.client_id'),
            'client_secret' => config('services.linkedin.client_secret'),
        ]);

        if (! $tokenResponse->successful()) {
            return response()->json([
                'error'   => 'LinkedIn access token request failed.',
                'details' => $tokenResponse->json(),
            ], 400);
        }

        $tokenData = $tokenResponse->json();
        $token     = $tokenData['access_token'] ?? null;

        if (! $token) {
            return response()->json([
                'error' => 'LinkedIn access token was not received.',
            ], 400);
        }

        // Get User Profile
        $profileResponse = Http::withToken($token)
            ->get('https://api.linkedin.com/v2/userinfo');

        if (! $profileResponse->successful()) {
            return response()->json([
                'error'   => 'Unable to retrieve LinkedIn profile.',
                'details' => $profileResponse->json(),
            ], 400);
        }

        $profileData = $profileResponse->json();
        $personId    = $profileData['sub'] ?? null;

        if (! $personId) {
            return response()->json([
                'error' => 'LinkedIn person ID was not received.',
            ], 400);
        }

        // Store Session Data
        session([
            'linkedin_token'   => $token,
            'linkedin_profile' => $profileData,
            'linkedin_sub'     => $personId,
        ]);

        session()->forget('linkedin_state');
        session()->save(); // Ensure data is saved to session file

        return redirect('/admin')
            ->with('success', 'LinkedIn account connected successfully.');
    }
}