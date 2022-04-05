<?php

/*
 * Configurations for MTN Momo Account.
 */

return [
  

    // Momo API transaction currency code.
    'currency'          => env('MTN_MOMO_CURRENCY', 'EUR'),
  

    'environment'       => env('MTN_MOMO_ENVIRONMENT', 'sandbox'),
 

    'base_url'          => env('MTN_MOMO_API_BASE_URI', 'https://sandbox.momodeveloper.mtn.com/'),
      

    'collection' => [

        'api_secret'    => env('MTN_MOMO_COLLECTION_API_SECRET', '32bfa2c1ad084d1c9fabf29da9dfa806'),
        
        'primary_key'   => env('MTN_MOMO_COLLECTION_PRIMARY_KEY', '64aaacbf2dbe4de98ae2839ea6e89243'),

        'user_id'       => env('MTN_MOMO_COLLECTION_USER_ID', 'c5617f01-9970-4afb-b290-a1d930b6c118'),

        'callback_url'  => env('MTN_MOMO_COLLECTION_CALLBACK_URL', 'localhost:shibat-students/')
    ],
 

    // 'disbursement' => [

    //     'primary_key'   => env('MTN_MOMO_DISBURSEMENT_PRIMARY_KEY'),

    //     'api_secret'    => env('MTN_MOMO_DISBURSEMENT_API_SECRET'),

    //     'user_id'       => env('MTN_MOMO_DISBURSEMENT_USER_ID'),

    //     'callback_url'  => env('MTN_MOMO_DISBURSEMENT_CALLBACK_URL')
    // ],
 

    // 'remittance' => [

    //     'primary_key'   => env('MTN_MOMO_REMITTANCE_PRIMARY_KEY'),

    //     'api_secret'    => env('MTN_MOMO_REMITTANCE_API_SECRET'),

    //     'user_id'       => env('MTN_MOMO_REMITTANCE_USER_ID'),

    //     'callback_url'  => env('MTN_MOMO_REMITTANCE_CALLBACK_URL')
    // ],
];
