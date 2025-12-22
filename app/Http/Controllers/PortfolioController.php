<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $designs = Design::orderBy('order')->get();

        $allCategories = Design::pluck('category')->flatMap(function ($item) {
            return array_map('trim', explode(',', $item));
        })->unique()->sort()->values();

        return view('portfolio.index', [
            'designs' => $designs,
            'category' => null,
            'categories' => $allCategories,
        ]);
    }

    public function show(Design $design): View
    {
        return view('portfolio.show', compact('design'));
    }

    public function category(string $category): View
    {
        $designs = Design::where('category', 'LIKE', '%'.$category.'%')
            ->orderBy('order')
            ->get();

        $categories = Design::pluck('category')->flatMap(function ($item) {
            return array_map('trim', explode(',', $item));
        })->unique()->sort()->values();

        return view('portfolio.index', [
            'designs' => $designs,
            'category' => $category,
            'categories' => $categories,
        ]);
    }

    public function updateRotation(Design $design, \Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'rotation_x' => 'required|numeric',
            'rotation_y' => 'required|numeric',
            'rotation_z' => 'required|numeric',
        ]);

        $design->update($validated);

        return response()->json(['success' => true]);
    }
}
