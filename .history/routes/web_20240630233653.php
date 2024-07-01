<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RjaController;
use App\Http\Controllers\LoginController;

// Public Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    //New RJA
    Route::get('/rja/new', [RjaController::class, 'newRja'])->name('rja.new');
    //Submitted RJA
    Route::get('/rja/submitted', [RjaController::class, 'submittedRja'])->name('rja.submitted');
});