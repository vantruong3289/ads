<?php

use App\Actions\Admin\Bill\EditFormBillAdmin;
use App\Actions\Admin\Bill\EditPostBillAdmin;
use App\Actions\Admin\Bill\ListBillAdmin;
use App\Actions\Admin\HomeAdmin;
use App\Actions\Admin\SignInFormAdmin;
use App\Actions\Admin\SignInPostAdmin;
use App\Actions\Admin\SignoutAdmin;
use App\Actions\Admin\UpdateAdmin;
use App\Actions\Admin\UpdatePasswordAdmin;
use App\Actions\Ads\CreatePostAds;
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
use App\Actions\Advertiser\UpdatePasswordAdvertiser;
use App\Actions\Bill\CreatePostBill;
use App\Actions\Bill\ListBill;
use App\Actions\Brand\CreatePostBrand;
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
use App\Actions\Consumer\UpdatePasswordConsumer;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeAction::class);

Route::get('/brands/{brand}', HomeBrand::class);
Route::get('/brands/{brand}/edit', EditFormBrand::class)->middleware('auth:advertiser');
Route::put('/brands/{brand}', EditPostBrand::class)->middleware('auth:advertiser');
Route::get('/brands', ListBrand::class)->middleware('auth:advertiser');
Route::post('/brands', CreatePostBrand::class)->middleware('auth:advertiser');

Route::get('/adss', ListAds::class)->middleware('auth:advertiser');
Route::get('/adss/{ads}/edit', EditFormAds::class)->middleware('auth:advertiser');
Route::put('/adss/{ads}', EditPostAds::class)->middleware('auth:advertiser');
Route::post('/adss', CreatePostAds::class)->middleware('auth:advertiser');

Route::get('/bills', ListBill::class)->middleware('auth:advertiser');
Route::post('/bills', CreatePostBill::class)->middleware('auth:advertiser');

Route::get('/consumers/sign-in', SignInFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-in', SignInPostConsumer::class);
Route::get('/consumers/sign-up', SignUpFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-up', SignUpPostConsumer::class);
Route::put('/consumers/update', UpdateConsumer::class);
Route::get('/consumers/home', HomeConsumer::class)->middleware('auth:consumer');
Route::get('/consumers/assets', AssetConsumer::class)->middleware('auth:consumer');
Route::put('/consumers/password', UpdatePasswordConsumer::class);
Route::post('/consumers/sign-out', SignoutConsumer::class);

Route::get('/advertisers/sign-in', SignInFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-in', SignInPostAdvertiser::class);
Route::get('/advertisers/sign-up', SignUpFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-up', SignUpPostAdvertiser::class);
Route::put('/advertisers/update', UpdateAdvertiser::class);
Route::get('/advertisers/home', HomeAdvertiser::class)->middleware('auth:advertiser');
Route::put('/advertisers/password', UpdatePasswordAdvertiser::class);
Route::post('/advertisers/sign-out', SignoutAdvertiser::class);

Route::get('/admins/sign-in', SignInFormAdmin::class)->middleware('guest:admin');
Route::post('/admins/sign-in', SignInPostAdmin::class);
Route::put('/admins/update', UpdateAdmin::class);
Route::get('/admins/home', HomeAdmin::class)->middleware('auth:admin');
Route::put('/admins/password', UpdatePasswordAdmin::class);
Route::post('/admins/sign-out', SignoutAdmin::class);
Route::get('/admins/bills', ListBillAdmin::class);
Route::get('/admins/bills/{bill}/edit', EditFormBillAdmin::class);
Route::put('/admins/bills/{bill}', EditPostBillAdmin::class);
