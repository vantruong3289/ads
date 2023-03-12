<?php

use App\Actions\AdsShow;
use App\Actions\BrandShow;
use Illuminate\Support\Facades\Route;

Route::get('/', AdsShow::class);
Route::get('/brands/{brand}', BrandShow::class);

include 'admin.php';
include 'consumer.php';
include 'advertiser.php';
