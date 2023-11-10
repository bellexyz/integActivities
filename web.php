<?php

// routes/web.php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Login routes
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Registration routes
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Main Dashboard
Route::get('/main_dashboard', function () {
    return view('main_dashboard');
})->name('main_dashboard');

