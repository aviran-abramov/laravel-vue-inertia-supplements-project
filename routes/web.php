<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SupplementController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', '/supplements');

Route::get('/supplements', [SupplementController::class, 'index'])->name('supplements.index');
Route::post('/supplements', [SupplementController::class, 'store'])->name('supplements.store');
Route::get('/supplements/create', [SupplementController::class, 'create'])->name('supplements.create');
Route::delete('/supplements/{supplement}', [SupplementController::class, 'destroy'])->name('supplements.destroy');
Route::get('/supplements/{supplement}', [SupplementController::class, 'edit'])->name('supplements.edit');
Route::patch('/supplements/{supplement}', [SupplementController::class, 'patch'])->name('supplements.patch');

// Register
Route::get('/register', [RegisteredUserController::class, 'index'])->name('register.create');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [SessionController::class, 'create'])->name('session.create');
Route::post('/login', [SessionController::class, 'store'])->name('session.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('session.destroy');
