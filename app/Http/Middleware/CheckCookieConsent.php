<?php
// app/Http/Middleware/CheckCookieConsent.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCookieConsent
{
    public function handle(Request $request, Closure $next)
    {
        $raw     = $request->cookie('plm_cookie_consent');
        $consent = $raw ? json_decode($raw, true) : null;

        view()->share('cookieConsent',      !empty($consent));
        view()->share('consentPerformance', (bool)($consent['performance'] ?? false));
        view()->share('consentFunctional',  (bool)($consent['functional']  ?? false));
        view()->share('consentAdvertising', (bool)($consent['advertising'] ?? false));
        view()->share('consentSocial',      (bool)($consent['social']      ?? false));

        return $next($request);
    }
}