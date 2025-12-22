@extends('portfolio.layout')

@section('title', 'Upload 3D Model')

@section('content')
<div style="max-width: 600px; margin: 0 auto; padding: 3rem 2rem;">
    <h1 style="font-size: 2rem; margin-bottom: 2rem; color: #ffffff;">Upload 3D Model</h1>

    @if ($errors->any())
        <div style="background-color: #3a1a1a; border: 1px solid #8a4444; color: #ffcccc; padding: 1rem; border-radius: 2px; margin-bottom: 2rem;">
            <ul style="list-style: none; padding: 0; margin: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div style="background-color: #1a3a1a; border: 1px solid #44aa44; color: #ccffcc; padding: 1rem; border-radius: 2px; margin-bottom: 2rem;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('models.store') }}" method="POST" enctype="multipart/form-data" style="background-color: #1a1a1a; padding: 2rem; border-radius: 2px; border: 1px solid #2a2a2a;">
        @csrf

        <div style="margin-bottom: 1.5rem;">
            <label for="design_id" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #ffffff;">Select Design:</label>
            <select name="design_id" id="design_id" required style="width: 100%; padding: 0.75rem; background-color: #2a2a2a; color: #e5e5e5; border: 1px solid #3a3a3a; border-radius: 2px; font-size: 1rem;">
                <option value="">Choose a design...</option>
                @foreach ($designs as $design)
                    <option value="{{ $design->id }}">{{ $design->title }}</option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 2rem;">
            <label for="model_file" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #ffffff;">3D Model (.STL file):</label>
            <input type="file" name="model_file" id="model_file" accept=".stl" required style="width: 100%; padding: 0.75rem; background-color: #2a2a2a; color: #e5e5e5; border: 1px solid #3a3a3a; border-radius: 2px;">
            <p style="font-size: 0.85rem; color: #999; margin-top: 0.5rem;">Maximum file size: 100MB. Supported format: .STL</p>
        </div>

        <button type="submit" style="width: 100%; padding: 0.75rem; background-color: #ffffff; color: #0f0f0f; border: none; border-radius: 2px; font-weight: 600; cursor: pointer; font-size: 1rem; transition: background-color 0.2s ease;" onmouseover="this.style.backgroundColor='#e5e5e5'" onmouseout="this.style.backgroundColor='#ffffff'">
            Upload Model
        </button>
    </form>

    <div style="margin-top: 3rem; padding: 2rem; background-color: #1a1a1a; border-radius: 2px; border: 1px solid #2a2a2a;">
        <h3 style="margin-bottom: 1rem; color: #ffffff;">Recent Designs</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            @foreach ($designs as $design)
                <div style="padding: 1rem; background-color: #0f0f0f; border-radius: 2px; border: 1px solid #2a2a2a; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <p style="font-weight: 500; color: #ffffff; margin-bottom: 0.25rem;">{{ $design->title }}</p>
                        <p style="font-size: 0.85rem; color: #999;">{{ $design->category }}</p>
                        @if ($design->model_file)
                            <p style="font-size: 0.85rem; color: #4a4; margin-top: 0.25rem;">✓ Has 3D Model</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
