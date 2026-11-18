<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;

class CookieConsentController extends Controller
{
    private const COOKIE_NAME = 'milestone_cookie_consent';

    /**
     * Cookie lifetime: 365 days.
     */
    private const COOKIE_LIFETIME = 525600;

    /**
     * Save cookie preferences.
     */
    public function save(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'preference' => [
                'required',
                'string',
                'in:accepted,rejected,custom',
            ],
            'analytics' => [
                'required',
                'boolean',
            ],
            'marketing' => [
                'required',
                'boolean',
            ],
        ]);

        $consent = [
            'version' => '1.0',
            'preference' => $validated['preference'],
            'analytics' => (bool) $validated['analytics'],
            'marketing' => (bool) $validated['marketing'],
            'updated_at' => now()->toIso8601String(),
        ];

        /*
         * JSON is only stored as the cookie value.
         * Laravel EncryptCookies middleware encrypts/signs
         * the cookie automatically.
         */
        $cookieValue = json_encode(
            $consent,
            JSON_UNESCAPED_SLASHES
        );

        if ($cookieValue === false) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to save cookie preferences.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Cookie preferences saved successfully.',
        ])->withCookie(
            new Cookie(
                self::COOKIE_NAME,
                $cookieValue,
                now()->addMinutes(self::COOKIE_LIFETIME),
                '/',
                null,

                // Secure on HTTPS.
                $request->isSecure(),

                // JavaScript cannot access this cookie.
                true,

                // Not a raw cookie.
                false,

                // Protect against most cross-site requests.
                Cookie::SAMESITE_LAX
            )
        );
    }
}