<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class SessionController extends BaseController
{
    public function create(): Response
    {
        return Inertia::render('Auth/Login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        if (!Auth::attempt($request->validated())) {
            return back()->withInput($request->only('email'))->withErrors(['email' => "One of the fields is incorrect. Please try again."]);
        }

        $request->session()->regenerate();

        return $this->successResponse('You have successfully logged in!', 'supplements.index');
    }

    public function destroy()
    {
        Auth::logout();

        return $this->successResponse('You have successfully logged out!', 'supplements.index');
    }
}
