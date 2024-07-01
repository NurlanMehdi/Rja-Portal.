<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RjaController;
use App\Http\Controllers\LoginController;
use App\Livewire\NewRja;

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
    Route::post('/new-rja', [NewRja::class]);
    //Submitted RJA
    Route::get('/rja/submitted', [RjaController::class, 'submittedRja'])->name('rja.submitted');
    //approved RJA
    Route::get('/approved-rja', ApprovedRja::class)->name('approved-rja');
    //denied RJA
    Route::get('/denied-rja', DeniedRja::class)->name('denied-rja');
});