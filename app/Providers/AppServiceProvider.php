<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    public function boot(Request $request): void
    {
        $geoMap = [
            'IN' => ['country'=>'India',          'flag'=>'in', 'phone'=>'+91-80-4737-0000', 'tel'=>'tel:+918047370000',  'email'=>'info@milestoneplm.com'],
            'GB' => ['country'=>'United Kingdom', 'flag'=>'gb', 'phone'=>'+44-20-3290-3900', 'tel'=>'tel:+442032903900',  'email'=>'info@milestoneplm.com'],
            'US' => ['country'=>'USA',            'flag'=>'us', 'phone'=>'+1-919-238-8044',  'tel'=>'tel:+19192388044',   'email'=>'info@milestoneplm.com'],
            'AE' => ['country'=>'UAE',            'flag'=>'ae', 'phone'=>'+971-4-876-0000',  'tel'=>'tel:+97148760000',   'email'=>'info@milestoneplm.com'],
            'AU' => ['country'=>'Australia',      'flag'=>'au', 'phone'=>'+61-2-8091-0000',  'tel'=>'tel:+61280910000',   'email'=>'info@milestoneplm.com'],
            'CA' => ['country'=>'Canada',         'flag'=>'ca', 'phone'=>'+1-647-478-0000',  'tel'=>'tel:+16474780000',   'email'=>'info@milestoneplm.com'],
            'SG' => ['country'=>'Singapore',      'flag'=>'sg', 'phone'=>'+65-6100-0000',    'tel'=>'tel:+6561000000',    'email'=>'info@milestoneplm.com'],
        ];

        $default = $geoMap['IN'];

        try {
            $ip       = $request->ip();
            $location = \Location::get($ip);
            $code     = $location ? strtoupper($location->countryCode) : 'IN';
            $geo      = $geoMap[$code] ?? $default;
        } catch (\Exception $e) {
            $geo = $default;
        }

        View::share('geoData', $geo);
    }
}