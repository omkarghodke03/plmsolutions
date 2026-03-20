<?php
// ============================================================
// app/Http/Middleware/CheckCookieConsent.php
//
// Reads consent cookie and shares flags to ALL Blade views.
//
// REGISTER IN: app/Http/Kernel.php
// Add to $middlewareGroups['web']:
//   \App\Http\Middleware\CheckCookieConsent::class,
// ============================================================

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class CheckCookieConsent
{
    /*
    |----------------------------------------------------------
    | Cookie name must match CookieConsentController.php
    |----------------------------------------------------------
    */
    private const COOKIE_NAME = 'plm_cookie_consent';

    public function handle(Request $request, Closure $next): Response
    {
        // Read raw cookie value
        $raw     = $request->cookie(self::COOKIE_NAME);
        $consent = $raw ? json_decode($raw, true) : null;

        /*
        |----------------------------------------------------------
        | Share with ALL Blade views — use these variables anywhere:
        |
        |   $cookieConsent      → full array or null (not yet set)
        |   $cookieStatus       → 'accepted' | 'declined' | 'custom' | null
        |   $consentNecessary   → always true if consented
        |   $consentPerformance → true/false
        |   $consentFunctional  → true/false
        |   $consentAdvertising → true/false
        |   $consentSocial      → true/false
        |
        | Usage in Blade:
        |   @if($consentPerformance)
        |       load Google Analytics here
        |   @endif
        |----------------------------------------------------------
        */
        View::share('cookieConsent', $consent ?? null);
        View::share('cookieStatus',       $consent['status']      ?? null);
        View::share('consentNecessary',   $consent['necessary']   ?? false);
        View::share('consentPerformance', $consent['performance'] ?? false);
        View::share('consentFunctional',  $consent['functional']  ?? false);
        View::share('consentAdvertising', $consent['advertising'] ?? false);
        View::share('consentSocial',      $consent['social']      ?? false);

        return $next($request);
    }
}