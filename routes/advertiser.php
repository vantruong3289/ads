<?php

use App\Actions\Advertiser\Ads\AdvertiserAdsEdit;
use App\Actions\Advertiser\Ads\AdvertiserAdsIndex;
use App\Actions\Advertiser\Ads\AdvertiserAdsStore;
use App\Actions\Advertiser\Ads\AdvertiserAdsUpdate;
use App\Actions\Advertiser\AdvertiserHome;
use App\Actions\Advertiser\AdvertiserSignInForm;
use App\Actions\Advertiser\AdvertiserSignInPost;
use App\Actions\Advertiser\AdvertiserSignout;
use App\Actions\Advertiser\AdvertiserSignUpForm;
use App\Actions\Advertiser\AdvertiserSignUpPost;
use App\Actions\Advertiser\AdvertiserUpdate;
use App\Actions\Advertiser\AdvertiserUpdatePassword;
use App\Actions\Advertiser\Bill\AdvertiserBillIndex;
use App\Actions\Advertiser\Bill\AdvertiserBillStore;
use App\Actions\Advertiser\Brand\AdvertiserBrandEdit;
use App\Actions\Advertiser\Brand\AdvertiserBrandIndex;
use App\Actions\Advertiser\Brand\AdvertiserBrandStore;
use App\Actions\Advertiser\Brand\AdvertiserBrandUpdate;
use App\Actions\Advertiser\Design\AdvertiserDesignChoice;
use App\Actions\Advertiser\Design\AdvertiserDesignForm;
use App\Actions\Advertiser\Design\AdvertiserDesignIndex;
use App\Actions\Advertiser\Design\AdvertiserDesignUpdate;
use App\Actions\Advertiser\Password\AdvertiserPasswordEmailReset;
use App\Actions\Advertiser\Password\AdvertiserPasswordForgot;
use Illuminate\Support\Facades\Route;

Route::get('/advertisers/sign-in', AdvertiserSignInForm::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-in', AdvertiserSignInPost::class);
Route::get('/advertisers/sign-up', AdvertiserSignUpForm::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-up', AdvertiserSignUpPost::class);
Route::put('/advertisers/update', AdvertiserUpdate::class);
Route::get('/advertisers/home', AdvertiserHome::class)->middleware('auth:advertiser');
Route::put('/advertisers/password', AdvertiserUpdatePassword::class);
Route::post('/advertisers/sign-out', AdvertiserSignout::class);

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

Route::get('/advertisers/ads/{ads}/designs', AdvertiserDesignIndex::class)->middleware('auth:advertiser');
Route::get('/advertisers/ads/{ads}/designs/{design}/form', AdvertiserDesignForm::class)->middleware('auth:advertiser');
Route::put('/advertisers/ads/{ads}/designs/{design}', AdvertiserDesignUpdate::class)->middleware('auth:advertiser');
Route::put('/advertisers/ads/{ads}/designs/{design}/choice', AdvertiserDesignChoice::class)->middleware('auth:advertiser');

Route::get('/advertisers/password/forgot', AdvertiserPasswordForgot::class)->middleware('guest:advertiser');
Route::get('/advertisers/password/reset', AdvertiserPasswordForgot::class)->middleware('guest:advertiser');
Route::post('/advertisers/password/email-reset', AdvertiserPasswordEmailReset::class);
