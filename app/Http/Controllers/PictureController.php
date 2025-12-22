<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    public function index()
    {
        $pictures = Picture::orderBy('order', 'asc')->orderBy('created_at', 'desc')->get();

        return view('portfolio.pictures', compact('pictures'));
    }

    public function store(Request $request)
    {
        if (! $request->has('admin')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:10240',
            'description' => 'nullable|string',
        ]);

        $path = $request->file('image')->store('pictures', 'public');

        Picture::create([
            'title' => $request->title,
            'image_path' => $path,
            'description' => $request->description,
        ]);

        return redirect()->route('pictures.index', ['admin' => $request->admin])->with('success', 'Picture uploaded successfully.');
    }

    public function destroy(Request $request, Picture $picture)
    {
        if (! $request->has('admin')) {
            abort(403, 'Unauthorized action.');
        }

        Storage::disk('public')->delete($picture->image_path);
        $picture->delete();

        return redirect()->route('pictures.index', ['admin' => $request->admin])->with('success', 'Picture deleted successfully.');
    }

    public function update(Request $request, Picture $picture)
    {
        if (! $request->has('admin')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:10240',
            'description' => 'nullable|string',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($picture->image_path);
            $data['image_path'] = $request->file('image')->store('pictures', 'public');
        }

        $picture->update($data);

        return redirect()->route('pictures.index', ['admin' => $request->admin])->with('success', 'Picture updated successfully.');
    }

    public function reorder(Request $request)
    {
        if (! $request->has('admin')) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $order = $request->input('order');
        foreach ($order as $index => $id) {
            Picture::where('id', $id)->update(['order' => $index]);
        }

        return response()->json(['success' => true]);
    }
}
