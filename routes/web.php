<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/movies', [ProductController::class, 'index'])->name('movies');