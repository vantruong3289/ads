<?php
use App\Actions\Consumer\ConsumerAsset;
use App\Actions\Consumer\ConsumerHome;
use App\Actions\Consumer\ConsumerSignInForm;
use App\Actions\Consumer\ConsumerSignInPost;
use App\Actions\Consumer\ConsumerSignout;
use App\Actions\Consumer\ConsumerSignUpForm;
use App\Actions\Consumer\ConsumerSignUpPost;
use App\Actions\Consumer\ConsumerUpdate;
use App\Actions\Consumer\ConsumerUpdatePassword;
use App\Actions\Consumer\Password\ConsumerPasswordEmailReset;
use App\Actions\Consumer\Password\ConsumerPasswordForgot;
use App\Actions\Consumer\Password\ConsumerPasswordReset;
use App\Actions\Consumer\Password\ConsumerPasswordResetForm;
use Illuminate\Support\Facades\Route;

Route::get('/consumers/sign-in', ConsumerSignInForm::class)->middleware('guest:consumer');
Route::post('/consumers/sign-in', ConsumerSignInPost::class);
Route::get('/consumers/sign-up', ConsumerSignUpForm::class)->middleware('guest:consumer');
Route::post('/consumers/sign-up', ConsumerSignUpPost::class);
Route::put('/consumers/update', ConsumerUpdate::class);
Route::get('/consumers/home', ConsumerHome::class)->middleware('auth:consumer');
Route::get('/consumers/assets', ConsumerAsset::class)->middleware('auth:consumer');
Route::put('/consumers/password', ConsumerUpdatePassword::class);
Route::post('/consumers/sign-out', ConsumerSignout::class);

Route::get('/consumers/password/forgot', ConsumerPasswordForgot::class)->middleware('guest:consumer');
Route::get('/consumers/password/reset', ConsumerPasswordResetForm::class)->middleware('guest:consumer')->name('consumer.password.reset');
Route::post('/consumers/password/reset', ConsumerPasswordReset::class);
Route::post('/consumers/password/email-reset', ConsumerPasswordEmailReset::class);
