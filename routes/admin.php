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

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/register', 'back.pages.admin.auth.registration')->name('registration');
        Route::view('/login', 'back.pages.admin.auth.login')->name('login');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
    });

    Route::get('/', function () {
        return redirect()->route('admin.login');
    });
});
