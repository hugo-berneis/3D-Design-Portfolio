<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModelUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'design_id' => 'required|exists:designs,id',
            'model_file' => 'required|file|mimes:stl|max:102400', // 100MB max
        ]);

        $design = Design::findOrFail($request->design_id);

        if ($design->model_file) {
            Storage::delete($design->model_file);
        }

        $path = $request->file('model_file')->store('models', 'public');

        $design->update(['model_file' => $path]);

        return back()->with('success', '3D model uploaded successfully!');
    }

    public function destroy(Design $design)
    {
        if ($design->model_file) {
            Storage::delete($design->model_file);
            $design->update(['model_file' => null]);
        }

        return back()->with('success', '3D model removed successfully!');
    }
}
