<?php

use App\Actions\Ads\WelcomeAction;
use App\Actions\Advertiser\CreateAdvertiser;
use App\Actions\Advertiser\UpdateAdvertiser;
use App\Actions\Advertiser\UpdatePasswordAdvertiser;
use App\Actions\Brand\Profile;
use App\Actions\Consumer\AssetConsumer;
use App\Actions\Consumer\HomeConsumer;
use App\Actions\Consumer\SignInFormConsumer;
use App\Actions\Consumer\SignInPostConsumer;
use App\Actions\Consumer\SignoutConsumer;
use App\Actions\Consumer\SignUpFormConsumer;
use App\Actions\Consumer\SignUpPostConsumer;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeAction::class);

Route::get('/consumers/sign-in', SignInFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-in', SignInPostConsumer::class);
Route::post('/consumers/sign-out', SignoutConsumer::class);
Route::get('/consumers/home', HomeConsumer::class);
Route::get('/consumers/sign-up', SignUpFormConsumer::class);
Route::post('/consumers/sign-up', SignUpPostConsumer::class);
Route::get('/consumers/assets', AssetConsumer::class);

Route::post('/advertiser-create', CreateAdvertiser::class);
Route::put('/advertiser-update', UpdateAdvertiser::class);
Route::put('/advertiser-update-password', UpdatePasswordAdvertiser::class);

Route::get('brands/{brand}', Profile::class)->name('profile');
