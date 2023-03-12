<?php
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

Route::get('/consumers/sign-in', SignInFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-in', SignInPostConsumer::class);
Route::get('/consumers/sign-up', SignUpFormConsumer::class)->middleware('guest:consumer');
Route::post('/consumers/sign-up', SignUpPostConsumer::class);
Route::put('/consumers/update', UpdateConsumer::class);
Route::get('/consumers/home', HomeConsumer::class)->middleware('auth:consumer');
Route::get('/consumers/assets', AssetConsumer::class)->middleware('auth:consumer');
Route::put('/consumers/password', UpdatePasswordConsumer::class);
Route::post('/consumers/sign-out', SignoutConsumer::class);
