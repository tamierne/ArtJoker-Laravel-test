<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
        'client_id' => '0f156d1cbee6cdc8773b',
        'client_secret' => '30f45622348a0221b2dc6a42eba910bb408ed63e',
        'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],

    'google' => [

        'client_id' => '72521092406-h2phstcr1n0anfuuet1jraq8vpn68sl7.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

];
