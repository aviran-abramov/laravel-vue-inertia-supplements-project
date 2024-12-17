<?php

namespace App\Http\Controllers;

use App\Http\Requests\Supplements\StoreSupplementRequest;
use App\Http\Requests\Supplements\UpdateSupplementRequest;
use App\Models\Supplement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SupplementController extends BaseController
{
    public function index(): Response
    {
        return Inertia::render('Supplements/Index', [
            'supplements' => Supplement::orderBy('name')->get(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Supplements/Create');
    }

    public function store(StoreSupplementRequest $request): RedirectResponse
    {
        Supplement::create($request->validated());

        return $this->successResponse('Supplement created successfully!', 'supplements.index');
    }

    public function destroy(Supplement $supplement)
    {
        $supplement->delete();

        return $this->successResponse('Supplement deleted successfully!', 'supplements.index');
    }

    public function edit(Supplement $supplement)
    {
        return Inertia::render('Supplements/Edit', [
            'supplement' => $supplement
        ]);
    }

    public function patch(UpdateSupplementRequest $request, int $id): RedirectResponse
    {
        $supplement = Supplement::findOrFail($id);

        $supplement->update($request->validated());

        return $this->successResponse('Supplement updated successfully!', 'supplements.index');
    }
}
