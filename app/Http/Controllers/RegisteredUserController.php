<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RegisteredUserController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Register');
    }

    public function store()
    {
        dd(request()->all());
    }
}
