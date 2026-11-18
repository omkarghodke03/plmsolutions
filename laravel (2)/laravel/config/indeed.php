<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable / Disable Indeed XML Feed
    |--------------------------------------------------------------------------
    */

    'enabled' => env('INDEED_FEED_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Company
    |--------------------------------------------------------------------------
    */

    'company_name' => env(
        'INDEED_COMPANY_NAME',
        'milestone tech'
    ),

    'company_url' => env(
        'INDEED_COMPANY_URL',
        'https://demo.milestonetech.net'
    ),

    /*
    |--------------------------------------------------------------------------
    | Feed URL
    |--------------------------------------------------------------------------
    */

    'feed_url' => env(
        'INDEED_FEED_URL',
        'https://demo.milestonetech.net/indeed/jobs.xml'
    ),

    /*
    |--------------------------------------------------------------------------
    | Public Job Detail URL
    |--------------------------------------------------------------------------
    |
    | IMPORTANT:
    | This must match your actual Laravel career/job-detail URL.
    |
    */

    'job_url_prefix' => env(
        'INDEED_JOB_URL_PREFIX',
        '/careers/'
    ),

    'default_city' => env(
        'INDEED_DEFAULT_CITY',
        'Pune'
    ),

    'default_state' => env(
        'INDEED_DEFAULT_STATE',
        'Maharashtra'
    ),

    'default_country' => env(
        'INDEED_DEFAULT_COUNTRY',
        'IN'
    ),

    'default_postal_code' => env(
        'INDEED_DEFAULT_POSTAL_CODE',
        ''
    ),

    'contact_email' => env(
        'INDEED_CONTACT_EMAIL',
        'info@milestonetech.net'
    ),
];