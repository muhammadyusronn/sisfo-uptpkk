<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.app')->name('home');

Route::get('/dash', [HomeController::class, 'index']);
// Route::get('/dash', [AdminController::class, 'index']);
