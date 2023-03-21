<?php

use App\Actions\Admin\AdminHome;
use App\Actions\Admin\AdminSignInForm;
use App\Actions\Admin\AdminSignInPost;
use App\Actions\Admin\AdminSignout;
use App\Actions\Admin\AdminUpdate;
use App\Actions\Admin\AdminUpdatePassword;
use App\Actions\Admin\Bill\AdminBillEdit;
use App\Actions\Admin\Bill\AdminBillIndex;
use App\Actions\Admin\Bill\AdminBillUpdate;
use App\Actions\Admin\Design\AdminDesignEditForm;
use App\Actions\Admin\Design\AdminDesignIndex;
use App\Actions\Admin\Design\AdminDesignStore;
use App\Actions\Admin\Design\AdminDesignUpdate;
use Illuminate\Support\Facades\Route;

Route::get('/admins/sign-in', AdminSignInForm::class)->middleware('guest:admin');
Route::post('/admins/sign-in', AdminSignInPost::class);
Route::put('/admins/update', AdminUpdate::class);
Route::get('/admins/home', AdminHome::class)->middleware('auth:admin');
Route::put('/admins/password', AdminUpdatePassword::class);
Route::post('/admins/sign-out', AdminSignout::class);

Route::get('/admins/bills', AdminBillIndex::class);
Route::get('/admins/bills/{bill}/edit', AdminBillEdit::class);
Route::put('/admins/bills/{bill}', AdminBillUpdate::class);

Route::get('/admins/designs', AdminDesignIndex::class);
Route::post('/admins/designs', AdminDesignStore::class);
Route::get('/admins/designs/{design}/edit', AdminDesignEditForm::class);
Route::put('/admins/designs/{design}', AdminDesignUpdate::class);
