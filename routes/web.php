<?php

use App\Http\Controllers\Dashboard\DashboardCotroller;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LandingPageController;
use App\Http\Controllers\Socil\FacebookController;
use App\Http\Controllers\Socil\GoogleController;
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
        Route::get('/welcome', function () {
            return view('welcome');
        });
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        // Auth by Google to users
        Route::get('auth/google', [GoogleController::class, 'google']);
        Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);

        // Auth by Facebook to users
        Route::get('auth/facebook', [FacebookController::class, 'facebook']);
        Route::get('auth/facebook/callback', [FacebookController::class, 'facebookcallback']);

        // Landing Page Users
        Route::get('/ai', [LandingPageController::class, 'index'])->name('ai');
        Route::post('/mido', [HomeController::class, 'mido']);
        Route::prefix('ai')->name('ai.')->middleware(['auth'])->group(function () {
            // Route::get('/home', [HomeController::class, 'index'])->name('home');
            Route::resource('/home', HomeController::class);
            Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
        });







        // Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
        //     // Dahsbboard
        //     Route::get('/index', [DashboardCotroller::class, 'index'])->name('index');
        // });
    }
);
