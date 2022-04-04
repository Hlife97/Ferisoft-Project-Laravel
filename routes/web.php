<?php

use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\home\ContactController;
use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store')->name('contact-store');
});


// admin
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::view('/login', 'admin.auth.login')->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login-check');
    });

    Route::middleware(['auth'])->group(function () {
        Route::view('/', 'admin.home')->name('home');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::controller(MessageController::class)->group(function () {
        Route::get('/messages', 'show')->name('messages');
        Route::get('/message/{contact}', 'destroy')->name('message-destroy');
    });
});