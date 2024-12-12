<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Auth/Register');
    }

    public function store(RegisterUserRequest $request): RedirectResponse
    {
        Auth::login(User::create($request->validated()));

        return to_route('supplements.index');
    }
}
