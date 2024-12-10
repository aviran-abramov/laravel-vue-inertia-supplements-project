<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SessionController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/Login');
    }

    public function store(LoginRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return back()->withInput($request->only('email'))->withErrors(['email' => "One of the fields is incorrect. Please try again."]);
        }

        $request->session()->regenerate();

        return to_route('supplements.index');
    }
}
