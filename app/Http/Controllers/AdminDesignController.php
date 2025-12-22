<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminDesignController extends Controller
{
    /**
     * Display a listing of designs.
     */
    public function index(): View
    {
        $designs = Design::orderBy('order')->paginate(10);
        return view('admin.designs.index', compact('designs'));
    }

    /**
     * Show the form for creating a new design.
     */
    public function create(): View
    {
        return view('admin.designs.create');
    }

    /**
     * Store a newly created design.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
            'thumbnail' => 'nullable|url',
            'image' => 'nullable|url',
            'model_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        Design::create($validated);

        return redirect()->route('admin.designs.index')
            ->with('success', 'Design created successfully!');
    }

    /**
     * Show the form for editing the design.
     */
    public function edit(Design $design): View
    {
        return view('admin.designs.edit', compact('design'));
    }

    /**
     * Update the design.
     */
    public function update(Request $request, Design $design): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
            'thumbnail' => 'nullable|url',
            'image' => 'nullable|url',
            'model_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        $design->update($validated);

        return redirect()->route('admin.designs.index')
            ->with('success', 'Design updated successfully!');
    }

    /**
     * Delete the design.
     */
    public function destroy(Design $design): RedirectResponse
    {
        $design->delete();

        return redirect()->route('admin.designs.index')
            ->with('success', 'Design deleted successfully!');
    }
}
