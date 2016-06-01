<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Transaction API Configuration
    |--------------------------------------------------------------------------
    |
    | 'log' boolean control for use of transaction log.
    |
    | 'valid_params' are the allowed url?params
    | 'valid_actions' are the allows ?action=actions
    |
    | Defaults are the configurable value if a params in not provided.
    | 'since' is the number of hours for the action query.
    | 'take' is used for pagination.
    |
    */
    'log' => true,

    'export_url' => env('TRANSACTION_EXPORT_URL'),

    'token' => env('TRANSACTION_TOKEN'),

    'valid_params' => ['action', 'since', 'take', 'page'],

    'valid_actions' => ['created', 'updated', 'modified', 'deleted'],

    'defaults' => [
        'since' => '24',
        'take'  => '15'
    ]
];
