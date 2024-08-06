<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RjaController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Settings\CompanyController;
use App\Livewire\NewRja;

// Public Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/send-otp', [OtpController::class, 'sendOtp'])->name('send-otp');
Route::post('/verify-otp', [OtpController::class, 'verifyOtp'])->name('verify-otp');
Route::get('/otp-form', [OtpController::class, 'showOtpForm'])->name('otp-form');
// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('dashboard');
    //New RJA
    Route::get('/rja/new', [RjaController::class, 'newRja'])->name('rja.new');
    Route::post('/new-rja', [NewRja::class]);
    // RJA
    Route::get('/rja/list/{key?}', [RjaController::class, 'listRja'])->name('rja.list');
    //Rja detail
    Route::get('/rja/{id}', [RjaController::class, 'RjaDetail'])->name('rja-detail');

    Route::resource('company', CompanyController::class);

    Route::post('rja/{id}/send-email', [RjaController::class, 'sendEmail'])->name('rja.send-email');
});
Route::post('/rja/{id}/approve', [RjaController::class, 'approve'])->name('rja.approve');
Route::post('/rja/{id}/reject', [RjaController::class, 'reject'])->name('rja.reject');
Route::get('/rja/{id}/approve', [RjaController::class, 'approve'])->name('rja.approve.for.mail');
Route::get('/rja/{id}/reject', [RjaController::class, 'reject'])->name('rja.reject.for.mail');
