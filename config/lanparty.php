<?php


use Carbon\Carbon;

return [

    /*
    |--------------------------------------------------------------------------
    | DEFAULT ADMIN DATA
    |--------------------------------------------------------------------------
    | Data for default admin user created when seeding initial database
    */
    'admin_username' => env('ADMIN_USER_NAME', 'Superadmin'),
    'admin_email'     => env('ADMIN_USER_EMAIL', 'jordivega@iesebre.com'),
    'admin_password'  => env('ADMIN_USER_PASSWORD'),
    'admin_givenName' => env('ADMIN_USER_GIVEN_NAME', 'Superadmin'),
    'admin_sn1'  => env('ADMIN_USER_SN1', 'Super'),
    'admin_sn2'  => env('ADMIN_USER_SN2', 'Admin'),

    /*
    |--------------------------------------------------------------------------
    | PARTICIPANTS REGISTRATION START DATE
    |--------------------------------------------------------------------------
    | Start date participants could register to app.
    |
    */
    'registration_start_date' => env('REGISTRATION_START_DATE', '2025-03-15 12:00:00'),

    /*
    |--------------------------------------------------------------------------
    | SESSIONS
    |--------------------------------------------------------------------------
    | Anys/sessions de la lanparty
    |
    */
    'sessions' => env('LANPARTY_SESSIONS', [
        [
            'name' => '2018',
            'deleted_at' => Carbon::createFromDate(2018, 6, 1)
        ],
        [
            'name' => '2019',
            'deleted_at' => Carbon::createFromDate(2019, 5, 15)
        ],
        [
            'name' => '2020',
            'deleted_at' => null
        ],
        [
          'name' => '2025',
          'deleted_at' => null
        ]
    ]),

    /*
    |--------------------------------------------------------------------------
    | SESSIONS
    |--------------------------------------------------------------------------
    | Anys/sessions de la lanparty
    |
    */
    'session' => env('LANPARTY_SESSION_CURRENT_SESSION', '2025'),

    /*
    |--------------------------------------------------------------------------
    | PRICES
    |--------------------------------------------------------------------------
    | Preus (en centims d'euro)
    |
    */
    'inscription_price' => env('LANPARTY_INSCRIPTION_PRICE', 500),
    'event_inscription_price' => env('LANPARTY_EVENT_INSCRIPTION_PRICE', 100)
];
