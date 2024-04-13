<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Index\HomeController;
use App\Livewire\Auth\LoginPg;
use App\Livewire\Auth\SignupPg;
use App\Livewire\Test;
use App\Livewire\User\CategoriesPG;
use App\Livewire\User\ClientPg;
use App\Livewire\User\DashBoard;
use App\Livewire\User\InvoiceUser;
use App\Livewire\User\PaymentPg;
use App\Livewire\User\ProductIndex;
use App\Livewire\User\UserSettings;
use App\Livewire\User\WP\WhatIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*==================Guest Routes==================*/
Route::group(['/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('dashboard', LoginPg::class)->name('dashboard');
    Route::get('test', Test::class);
});

/*==================Auth Routes==================*/
Route::group(['/'],  function () {
    Route::get('login', LoginPg::class)->name('login');
    Route::get('signup', SignupPg::class)->name('signup');
    Route::get('forger', LoginPg::class)->name('forget');
    Route::get('logout', [LoginPg::class, 'logout'])->name('logout');
});

/*==================User Routes==================*/
Route::group(['middleware' => ['IsUser'], 'prefix' => 'user'], function () {
    Route::get('dashboard', DashBoard::class)->name('user.dash');
    Route::get('product', ProductIndex::class)->name('user.prod');
    Route::get('categorie', CategoriesPG::class)->name('user.cate');
    Route::get('inoice', InvoiceUser::class)->name('user.invo');
    Route::get('client', ClientPg::class)->name('user.clnt');
    Route::get('payment', PaymentPg::class)->name('user.pay');
    Route::get('setting', UserSettings::class)->name('user.set');
    Route::get('whatsapp', WhatIndex::class)->name('user.wat');
    Route::get('logout', [LoginPg::class, 'logout'])->name('user.out');
});

/*==================Admin Routes==================*/
Route::group(['middleware' => ['IsAdmin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', Dashboard::class)->name('admin.dash');
});

/*==================Super Admin Routes==================*/
Route::group(['middleware' => ['IsSuperAdmin'], 'prefix' => 'suadmin'], function () {
    Route::get('/dashboard', Dashboard::class)->name('suadmin.dash');
});