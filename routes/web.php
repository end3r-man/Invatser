<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dash\IndexPage;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ============= Guest Route ============= //
Route::group(['/'], function () {
    // Todo: add home page
});

// ============= Auth Route ============= //
Route::group(['/'], function () {
    Route::get('login', Login::class)->name('login');
});

// ============= Auth Route ============= //
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    
    Route::get('dashboard', IndexPage::class)->name('admin.dash');

});
