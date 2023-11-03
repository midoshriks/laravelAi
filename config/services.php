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
    'google' => [
        'client_id' => '162465681347-6ak2qm4d9hb5tgvh128njn2tgsthsmqg.apps.googleusercontent.com',
        'client_secret' =>  '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',
        'redirect' => 'http://localhost:8000/auth/google/callback'
        // 'redirect' => 'http://127.0.0.1:8000/auth/google/callback'
    ],
    'facebook' => [
        'client_id' => '152928341234180',
        'client_secret' =>  'e02f406a3fe07cc98b0585549f945863',
        'redirect' => 'http://localhost:8000/auth/facebook/callback'
    ]

];
