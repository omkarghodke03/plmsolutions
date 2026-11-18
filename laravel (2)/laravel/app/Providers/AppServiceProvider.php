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
            'IN' => ['country'=>'India',          'flag'=>'in', 'phone'=>'+91-88-2842-7555', 'tel'=>'tel:+918828427555',  'email'=>'info@milestoneplm.com'],
            'GB' => ['country'=>'United Kingdom', 'flag'=>'gb', 'phone'=>'+44-746-216-0012', 'tel'=>'tel:+447462160012',  'email'=>'info@milestoneplm.com'],
            'US' => ['country'=>'USA',            'flag'=>'us', 'phone'=>'+1-302-587-8418',  'tel'=>'tel:+13025878418',   'email'=>'info@milestoneplm.com'],
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