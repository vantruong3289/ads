<?php

use App\Actions\Consumer\Account\ConsumerAccountHome;
use App\Actions\Consumer\Account\ConsumerAccountSignout;
use App\Actions\Consumer\Account\ConsumerAccountUpdate;
use App\Actions\Consumer\Asset\ConsumerAssetList;
use App\Actions\Consumer\Invite\ConsumerInviteList;
use App\Actions\Consumer\Invite\ConsumerInviteStore;
use App\Actions\Consumer\Password\ConsumerPasswordEmailReset;
use App\Actions\Consumer\Password\ConsumerPasswordForgot;
use App\Actions\Consumer\Password\ConsumerPasswordReset;
use App\Actions\Consumer\Password\ConsumerPasswordResetForm;
use App\Actions\Consumer\Password\ConsumerPasswordUpdate;
use App\Actions\Consumer\SignIn\ConsumerSignInForm;
use App\Actions\Consumer\SignIn\ConsumerSignInPost;
use App\Actions\Consumer\SignUp\ConsumerSignUpForm;
use App\Actions\Consumer\SignUp\ConsumerSignUpPost;
use Illuminate\Support\Facades\Route;

Route::get('/consumers/sign-in', ConsumerSignInForm::class)->middleware('guest:consumer')->name('consumer.sign-up');
Route::post('/consumers/sign-in', ConsumerSignInPost::class);
Route::get('/consumers/sign-up', ConsumerSignUpForm::class)->middleware('guest:consumer');
Route::post('/consumers/sign-up', ConsumerSignUpPost::class);
Route::put('/consumers/update', ConsumerAccountUpdate::class);
Route::get('/consumers/home', ConsumerAccountHome::class)->middleware('auth:consumer');
Route::get('/consumers/assets', ConsumerAssetList::class)->middleware('auth:consumer');
Route::put('/consumers/password', ConsumerPasswordUpdate::class);
Route::post('/consumers/sign-out', ConsumerAccountSignout::class);

Route::get('/consumers/password/forgot', ConsumerPasswordForgot::class)->middleware('guest:consumer');
Route::get('/consumers/password/reset', ConsumerPasswordResetForm::class)->middleware('guest:consumer')->name('consumer.password.reset');
Route::post('/consumers/password/reset', ConsumerPasswordReset::class);
Route::post('/consumers/password/email-reset', ConsumerPasswordEmailReset::class);

Route::get('/consumers/invites', ConsumerInviteList::class)->middleware('auth:consumer');
Route::post('/consumers/invites', ConsumerInviteStore::class);
