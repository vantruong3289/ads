<?php

use App\Actions\ConsumerAdsShow;
use App\Actions\Consumer\Brand\ConsumerBrandShow;
use Illuminate\Support\Facades\Route;

Route::get('/', ConsumerAdsShow::class);
Route::get('/brands/{brand}', ConsumerBrandShow::class);

include 'admin.php';
include 'consumer.php';
include 'advertiser.php';
