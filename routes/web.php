<?php

use App\Actions\Ads\EditFormAds;
use App\Actions\Ads\EditPostAds;
use App\Actions\Ads\ListAds;
use App\Actions\Ads\WelcomeAction;
use App\Actions\Advertiser\HomeAdvertiser;
use App\Actions\Advertiser\SignInFormAdvertiser;
use App\Actions\Advertiser\SignInPostAdvertiser;
use App\Actions\Advertiser\SignoutAdvertiser;
use App\Actions\Advertiser\SignUpFormAdvertiser;
use App\Actions\Advertiser\SignUpPostAdvertiser;
use App\Actions\Advertiser\UpdateAdvertiser;
use App\Actions\Bill\CreatePostBill;
use App\Actions\Bill\ListBill;
use App\Actions\Brand\EditFormBrand;
use App\Actions\Brand\EditPostBrand;
use App\Actions\Brand\HomeBrand;
use App\Actions\Brand\ListBrand;
use App\Actions\Consumer\AssetConsumer;
use App\Actions\Consumer\HomeConsumer;
use App\Actions\Consumer\SignInFormConsumer;
use App\Actions\Consumer\SignInPostConsumer;
use App\Actions\Consumer\SignoutConsumer;
use App\Actions\Consumer\SignUpFormConsumer;
use App\Actions\Consumer\SignUpPostConsumer;
use App\Actions\Consumer\UpdateConsumer;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeAction::class);

Route::get('/brands/{brand}', HomeBrand::class);
Route::get('/brands/{brand}/edit', EditFormBrand::class)->middleware('auth:advertiser');
Route::put('/brands/{brand}', EditPostBrand::class)->middleware('auth:advertiser');
Route::get('/brands', ListBrand::class)->middleware('auth:advertiser');

Route::get('/adss', ListAds::class)->middleware('auth:advertiser');
Route::get('/adss/{ads}/edit', EditFormAds::class)->middleware('auth:advertiser');
Route::put('/adss/{ads}', EditPostAds::class)->middleware('auth:advertiser');

Route::get('/bills', ListBill::class)->middleware('auth:advertiser');
Route::post('/bills', CreatePostBill::class)->middleware('auth:advertiser');

Route::get('/consumers/sign-in', SignInFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-in', SignInPostConsumer::class);
Route::get('/consumers/sign-up', SignUpFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-up', SignUpPostConsumer::class);
Route::put('/consumers/update', UpdateConsumer::class);
Route::get('/consumers/home', HomeConsumer::class)->middleware('auth:consumer');
Route::get('/consumers/assets', AssetConsumer::class)->middleware('auth:consumer');
Route::post('/consumers/sign-out', SignoutConsumer::class);

Route::get('/advertisers/sign-in', SignInFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-in', SignInPostAdvertiser::class);
Route::get('/advertisers/sign-up', SignUpFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-up', SignUpPostAdvertiser::class);
Route::put('/advertisers/update', UpdateAdvertiser::class);
Route::get('/advertisers/home', HomeAdvertiser::class)->middleware('auth:advertiser');
Route::post('/advertisers/sign-out', SignoutAdvertiser::class);
