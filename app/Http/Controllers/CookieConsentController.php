<?php
// ============================================================
// app/Http/Controllers/CookieConsentController.php
//
// Run to generate: php artisan make:controller CookieConsentController
// Then replace content with this file.
//
// Handles:
//   POST /cookie/accept      → accept all cookies
//   POST /cookie/decline     → decline non-essential
//   GET  /cookie/status      → return current consent status
// ============================================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cookie;

class CookieConsentController extends Controller
{
    /*
    |----------------------------------------------------------
    | COOKIE CONFIG
    | COOKIE_NAME     → name stored in browser
    | COOKIE_LIFETIME → days before re-consent required
    |   30  = 1 month
    |   180 = 6 months
    |   365 = 1 year  (default — GDPR recommended max)
    |----------------------------------------------------------
    */
    private const COOKIE_NAME     = 'plm_cookie_consent';
    private const COOKIE_LIFETIME = 365;

    // ── POST /cookie/accept ──────────────────────────────────
    public function accept(Request $request): JsonResponse
    {
        $payload = [
            'necessary'   => true,
            'performance' => true,
            'functional'  => true,
            'advertising' => true,
            'social'      => true,
            'status'      => 'accepted',
            'timestamp'   => now()->toISOString(),
        ];

        $cookie = $this->buildCookie($payload);

        return response()
            ->json(['status' => 'accepted', 'message' => 'All cookies accepted.'])
            ->withCookie($cookie);
    }

    // ── POST /cookie/decline ─────────────────────────────────
    public function decline(Request $request): JsonResponse
    {
        $payload = [
            'necessary'   => true,   // always required — cannot decline
            'performance' => true,
            'functional'  => false,
            'advertising' => false,
            'social'      => false,
            'status'      => 'declined',
            'timestamp'   => now()->toISOString(),
        ];

        $cookie = $this->buildCookie($payload);

        return response()
            ->json(['status' => 'declined', 'message' => 'Non-essential cookies declined.'])
            ->withCookie($cookie);
    }

    // ── POST /cookie/save-preferences ───────────────────────
    public function savePreferences(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'performance' => 'boolean',
            'functional'  => 'boolean',
            'advertising' => 'boolean',
            'social'      => 'boolean',
        ]);

        $payload = [
            'necessary'   => true,
            'performance' => (bool)($validated['performance'] ?? false),
            'functional'  => (bool)($validated['functional']  ?? false),
            'advertising' => (bool)($validated['advertising'] ?? false),
            'social'      => (bool)($validated['social']      ?? false),
            'status'      => 'custom',
            'timestamp'   => now()->toISOString(),
        ];

        $cookie = $this->buildCookie($payload);

        return response()
            ->json(['status' => 'saved', 'consent' => $payload])
            ->withCookie($cookie);
    }

    // ── GET /cookie/status ───────────────────────────────────
    public function status(Request $request): JsonResponse
    {
        $raw     = $request->cookie(self::COOKIE_NAME);
        $consent = $raw ? json_decode($raw, true) : null;

        if (!$consent) {
            return response()->json([
                'status'    => 'pending',
                'consented' => false,
                'message'   => 'No consent recorded yet.',
            ]);
        }

        return response()->json([
            'status'    => $consent['status']    ?? 'unknown',
            'consented' => true,
            'timestamp' => $consent['timestamp'] ?? null,
            'consent'   => $consent,
        ]);
    }

    // ── Private: build secure cookie ────────────────────────
    private function buildCookie(array $payload)
    {
        return Cookie::make(
            self::COOKIE_NAME,                  // name
            json_encode($payload),              // value
            self::COOKIE_LIFETIME * 60 * 24,   // minutes (days→min)
            '/',                                // path
            null,                               // domain (current)
            config('app.env') === 'production', // secure: HTTPS only in prod
            false,                              // httpOnly: false (JS needs to read)
            false,                              // raw
            'Lax'                               // sameSite: CSRF protection
        );
    }
}

