<?php

use App\Models\Advertiser;
use App\Models\Consumer;
use App\Models\User;

return [

    'defaults' => [
        'guard' => 'consumer',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
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
        'users' => [
            'driver' => 'eloquent',
            'model' => User::class,
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
        'consumers' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'advertisers' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
