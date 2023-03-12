<?php

use App\Models\Admin;
use App\Models\Advertiser;
use App\Models\Consumer;

return [

    'defaults' => [
        'guard' => 'consumer',
        'passwords' => 'consumers',
    ],

    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'consumer' => [
            'driver' => 'session',
            'provider' => 'consumers',
        ],
        'advertiser' => [
            'driver' => 'session',
            'provider' => 'advertisers',
        ],
    ],

    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => Admin::class,
        ],
        'consumers' => [
            'driver' => 'eloquent',
            'model' => Consumer::class,
        ],
        'advertisers' => [
            'driver' => 'eloquent',
            'model' => Advertiser::class,
        ],
    ],

    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'consumers' => [
            'provider' => 'consumers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'advertisers' => [
            'provider' => 'advertisers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
