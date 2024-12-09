<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/supplements', function () {
    return Inertia::render('Supplements/Index');
})->name('supplements.index');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register.index');
