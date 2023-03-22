<?php

use App\Actions\Advertiser\Account\AdvertiserAccountHome;
use App\Actions\Advertiser\Account\AdvertiserAccountSignout;
use App\Actions\Advertiser\Account\AdvertiserAccountUpdate;
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
use App\Actions\Advertiser\Design\AdvertiserDesignChoice;
use App\Actions\Advertiser\Design\AdvertiserDesignForm;
use App\Actions\Advertiser\Design\AdvertiserDesignIndex;
use App\Actions\Advertiser\Design\AdvertiserDesignUpdate;
use App\Actions\Advertiser\Password\AdvertiserPasswordEmailReset;
use App\Actions\Advertiser\Password\AdvertiserPasswordForgot;
use App\Actions\Advertiser\Password\AdvertiserPasswordReset;
use App\Actions\Advertiser\Password\AdvertiserPasswordResetForm;
use App\Actions\Advertiser\Password\AdvertiserPasswordUpdate;
use App\Actions\Advertiser\SignIn\AdvertiserSignInForm;
use App\Actions\Advertiser\SignIn\AdvertiserSignInPost;
use App\Actions\Advertiser\SignUp\AdvertiserSignUpForm;
use App\Actions\Advertiser\SignUp\AdvertiserSignUpPost;
use Illuminate\Support\Facades\Route;

Route::get('/advertisers/sign-in', AdvertiserSignInForm::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-in', AdvertiserSignInPost::class);
Route::get('/advertisers/sign-up', AdvertiserSignUpForm::class)->middleware('guest:advertiser');
Route::post('/advertisers/sign-up', AdvertiserSignUpPost::class);
Route::put('/advertisers/update', AdvertiserAccountUpdate::class);
Route::get('/advertisers/home', AdvertiserAccountHome::class)->middleware('auth:advertiser');
Route::put('/advertisers/password', AdvertiserPasswordUpdate::class);
Route::post('/advertisers/sign-out', AdvertiserAccountSignout::class);

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
Route::get('/advertisers/password/reset', AdvertiserPasswordResetForm::class)->middleware('guest:advertiser')->name('advertiser.password.reset');
Route::post('/advertisers/password/reset', AdvertiserPasswordReset::class);
Route::post('/advertisers/password/email-reset', AdvertiserPasswordEmailReset::class);
