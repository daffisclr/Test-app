<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\TracerresultController;
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

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:user', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'back.pages.user.auth.login')->name('login');
        Route::view('/register', 'back.pages.user.auth.register')->name('register');
        Route::post('/login_handler', [UserController::class, 'loginHandler'])->name('login_handler');
        Route::view('/forgot-password', 'back.pages.user.auth.forgot-password')->name('forgot-password');
        Route::post('/send-password-reset-link', [UserController::class, 'sendPasswordResetLink'])->name('send-password-reset-link');
        Route::get('/password/reset/{token}', [UserController::class, 'resetPassword'])->name('reset-password');
        Route::post('/reset-password-handler', [UserController::class, 'resetPasswordHandler'])->name('reset-password-handler');
    });

    Route::middleware(['auth:user', 'PreventBackHistory'])->group(function () {
        Route::view('/home', 'back.pages.user.home')->name('home');
        Route::post('/logout_handler', [UserController::class, 'logoutHandler'])->name('logout_handler');
        Route::get('/profile', [UserController::class, 'profileView'])->name('profile');
        Route::get('/kuesioner', [QuestionnaireController::class, 'index'])->name('kuesioner');
        Route::post('/kuesioner-form', [QuestionnaireController::class, 'kuesioner_form'])->name("kuesioner-form");
        Route::get('/broadcast', [BroadcastController::class, 'index'])->name('broadcast');
        Route::post('/broadcast-action', [BroadcastController::class, 'broadcast_email'])->name('broadcast-action');
        Route::get('/ts-overview', [TracerresultController::class, 'index'])->name('result');
    });

    Route::get('/', function () {
        return redirect()->route('user.login');
    });
});
