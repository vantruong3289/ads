<?php

use App\Actions\Ads\WelcomeAction;
use App\Actions\Advertiser\CreateAdvertiser;
use App\Actions\Advertiser\UpdateAdvertiser;
use App\Actions\Advertiser\UpdatePasswordAdvertiser;
use App\Actions\Brand\Profile;
use App\Actions\Consumer\HomeConsumer;
use App\Actions\Consumer\SignInFormConsumer;
use App\Actions\Consumer\SignInPostConsumer;
use App\Actions\Consumer\SignoutConsumer;
use App\Actions\Consumer\UpdateConsumer;
use App\Actions\Consumer\UpdatePasswordConsumer;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeAction::class);

Route::get('/consumers/signin', SignInFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/signin', SignInPostConsumer::class);
Route::post('/consumers/signout', SignoutConsumer::class);
Route::get('/consumers/home', HomeConsumer::class);
Route::put('/consumer-update', UpdateConsumer::class);
Route::put('/consumer-update-password', UpdatePasswordConsumer::class);

Route::post('/advertiser-create', CreateAdvertiser::class);
Route::put('/advertiser-update', UpdateAdvertiser::class);
Route::put('/advertiser-update-password', UpdatePasswordAdvertiser::class);

Route::get('brands/{brand}', Profile::class)->name('profile');
