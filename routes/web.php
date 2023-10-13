<?php

use App\Http\Controllers\Dashboard\DashboardCotroller;
use App\Http\Controllers\GoogleCotroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...
        Auth::routes();
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('auth/google', [GoogleCotroller::class, 'google']);
        Route::get('auth/google/callback', [GoogleCotroller::class, 'googlecallback']);

        // Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
        //     // Dahsbboard
        //     Route::get('/index', [DashboardCotroller::class, 'index'])->name('index');
        // });
    }
);
