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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'contact' => [ 
        'name'  => env('NAME_COMPANY', 'FlexPhone'),
        'mail'  => env('MAIL_FROM_ADDRESS'),
        'phone' => env('PHONE_NUMBER', '+33 74 25 36 22 23'), 
        'fax'   => env('FAXE_NUMBER', '+33 12 14 15 16'),

    ], 

    'Adresse' => [
        'rue' => env('ADRESSE_RUE', '3 rue des Champs Elysées'),
        'postacode' => env('POSTAL_CODE','75008'),
        'city'      => env('ADRESSE_CITY', 'PARIS' ),
        'country'   => env('ADRESSE_COUNTRY', 'France'),
    ],
];
