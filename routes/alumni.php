<?php

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

Route::prefix('alumni')->name('alumni.')->group(function () {

    Route::middleware(['guest:alumni', 'PreventBackHistory'])->group(function () {
        Route::view('/register', 'back.pages.alumni.auth.registration')->name('registration');
        Route::view('/login', 'back.pages.alumni.auth.login')->name('login');
    });

    Route::middleware(['auth:alumni', 'PreventBackHistory'])->group(function () {

    });

    Route::get('/', function () {
        return redirect()->route('alumni.login');
    });
});
