<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;

// Authenticated and Admin middleware group
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('dashboard/users', [UserController::class, 'index'])->name('dashboard.users');
    Route::get('dashboard/blogs', [BlogController::class, 'index'])->name('dashboard.blogs');
});

// Default home route
Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Auth::routes();

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
