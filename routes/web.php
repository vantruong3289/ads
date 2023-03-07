<?php

use App\Actions\Ads\WelcomeAction;
use App\Actions\Advertiser\SignInFormAdvertiser;
use App\Actions\Advertiser\SignInPostAdvertiser;
use App\Actions\Advertiser\SignUpFormAdvertiser;
use App\Actions\Advertiser\SignUpPostAdvertiser;
use App\Actions\Brand\HomeBrand;
use App\Actions\Consumer\AssetConsumer;
use App\Actions\Consumer\HomeConsumer;
use App\Actions\Consumer\SignInFormConsumer;
use App\Actions\Consumer\SignInPostConsumer;
use App\Actions\Consumer\SignoutConsumer;
use App\Actions\Consumer\SignUpFormConsumer;
use App\Actions\Consumer\SignUpPostConsumer;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeAction::class);
Route::get('brands/{brand}', HomeBrand::class);

Route::get('/consumers/sign-in', SignInFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-in', SignInPostConsumer::class);
Route::post('/consumers/sign-out', SignoutConsumer::class);
Route::get('/consumers/home', HomeConsumer::class)->middleware('auth:consumer');
Route::get('/consumers/sign-up', SignUpFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-up', SignUpPostConsumer::class);
Route::get('/consumers/assets', AssetConsumer::class)->middleware('auth:consumer');

Route::get('/advertisers/sign-in', SignInFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-in', SignInPostAdvertiser::class);
Route::get('/advertisers/sign-up', SignUpFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-up', SignUpPostAdvertiser::class);
