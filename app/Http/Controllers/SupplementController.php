<?php

namespace App\Http\Controllers;

use App\Models\Supplement;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SupplementController extends Controller
{
    public function index()
    {
        return Inertia::render('Supplements/Index', [
            'supplements' => Supplement::orderBy('name')->get(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Supplements/Create');
    }

    public function store()
    {
        dd('submitted');
    }
}
