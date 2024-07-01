<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RjaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/rja/new', [App\Http\Controllers\RjaController::class, 'newRja'])->name('rja.new');
