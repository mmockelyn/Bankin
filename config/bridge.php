<?php
return [
    'username' => env("BRIDGE_CLIENT_ID"),
    'password' => env("BRIDGE_CLIENT_SECRET"),
    'env' => env('app_env') == 'local' ? 'sandbox' : 'live',
    'api_endpoint' => [
        'sandbox' => 'https://sandbox.openpayd.com/api/',
        'live' => 'https://openpayd.com/api/',
        'holder' => env("BRIDGE_HOLDER_ID")
    ]
];
