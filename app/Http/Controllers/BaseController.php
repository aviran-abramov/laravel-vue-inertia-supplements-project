<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected function successResponse(string $message, string $routeName)
    {
        return to_route($routeName)->with('message', $message);
    }
}
