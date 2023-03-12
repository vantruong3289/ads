<?php

use App\Actions\Advertiser\Ads\AdvertiserAdsEdit;
use App\Actions\Advertiser\Ads\AdvertiserAdsIndex;
use App\Actions\Advertiser\Ads\AdvertiserAdsStore;
use App\Actions\Advertiser\Ads\AdvertiserAdsUpdate;
use App\Actions\Advertiser\Bill\AdvertiserBillIndex;
use App\Actions\Advertiser\Bill\AdvertiserBillStore;
use App\Actions\Advertiser\Brand\AdvertiserBrandEdit;
use App\Actions\Advertiser\Brand\AdvertiserBrandIndex;
use App\Actions\Advertiser\Brand\AdvertiserBrandStore;
use App\Actions\Advertiser\Brand\AdvertiserBrandUpdate;
use App\Actions\Advertiser\HomeAdvertiser;
use App\Actions\Advertiser\SignInFormAdvertiser;
use App\Actions\Advertiser\SignInPostAdvertiser;
use App\Actions\Advertiser\SignoutAdvertiser;
use App\Actions\Advertiser\SignUpFormAdvertiser;
use App\Actions\Advertiser\SignUpPostAdvertiser;
use App\Actions\Advertiser\UpdateAdvertiser;
use App\Actions\Advertiser\UpdatePasswordAdvertiser;
use Illuminate\Support\Facades\Route;

Route::get('/advertisers/sign-in', SignInFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-in', SignInPostAdvertiser::class);
Route::get('/advertisers/sign-up', SignUpFormAdvertiser::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-up', SignUpPostAdvertiser::class);
Route::put('/advertisers/update', UpdateAdvertiser::class);
Route::get('/advertisers/home', HomeAdvertiser::class)->middleware('auth:advertiser');
Route::put('/advertisers/password', UpdatePasswordAdvertiser::class);
Route::post('/advertisers/sign-out', SignoutAdvertiser::class);

Route::get('/advertisers/brands/{brand}/edit', AdvertiserBrandEdit::class)->middleware('auth:advertiser');
Route::put('/advertisers/brands/{brand}', AdvertiserBrandUpdate::class)->middleware('auth:advertiser');
Route::get('/advertisers/brands', AdvertiserBrandIndex::class)->middleware('auth:advertiser');
Route::post('/advertisers/brands', AdvertiserBrandStore::class)->middleware('auth:advertiser');

Route::get('/advertisers/ads', AdvertiserAdsIndex::class)->middleware('auth:advertiser');
Route::get('/advertisers/ads/{ads}/edit', AdvertiserAdsEdit::class)->middleware('auth:advertiser');
Route::put('/advertisers/ads/{ads}', AdvertiserAdsUpdate::class)->middleware('auth:advertiser');
Route::post('/advertisers/ads', AdvertiserAdsStore::class)->middleware('auth:advertiser');

Route::get('/advertisers/bills', AdvertiserBillIndex::class)->middleware('auth:advertiser');
Route::post('/advertisers/bills', AdvertiserBillStore::class)->middleware('auth:advertiser');
