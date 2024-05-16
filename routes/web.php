<?php

use App\Http\Controllers\ComicsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('comics', ComicsController::class);
