<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/supplements', function () {
    return Inertia::render('Supplements/Index');
})->name('supplements.index');

// Register
Route::get('/register', [RegisteredUserController::class, 'index'])->name('register.index');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [SessionController::class, 'create'])->name('session.create');
Route::post('/login', [SessionController::class, 'store'])->name('session.store');
