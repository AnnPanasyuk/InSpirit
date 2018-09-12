<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '265839284234836',
        'client_secret' => '3841cee6a4646c4bb1b6d563519b5092',
        'redirect' => 'https://webartg.com/auth/facebook/callback'
    ],

    'twitter' => [
        'client_id' => 'your-github-app-id',
        'client_secret' => 'your-github-app-secret',
        'redirect' => 'http://your-callback-url',
    ],

    'google' => [
        'client_id' => '851006282310-vjga4ltamm76qt4ppc1thbdqmk7803fk.apps.googleusercontent.com',
        'client_secret' => 'lPs4vbIzMMyBf9604qwApISL',
        'redirect' => 'https://webartg.com/auth/google/callback',
    ],
];
