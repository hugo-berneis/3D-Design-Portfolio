@extends('portfolio.layout')

@section('title', $design->title)

@section('content')
    <div style="max-width: 1000px; margin: 0 auto; padding: 3rem 2rem;">
        <a href="{{ route('portfolio.index') }}"
            style="text-decoration: none; color: #999; margin-bottom: 2rem; display: inline-block; font-size: 0.9rem;">←
            Back to Portfolio</a>

        <article>
            @if ($design->model_file)
                <div
                    style="background-color: #1a1a1a; border-radius: 2px; overflow: hidden; margin-bottom: 2rem; border: 1px solid #2a2a2a; height: 500px;">
                    <div class="model-viewer" data-model-viewer data-model-path="{{ Storage::url($design->model_file) }}"
                        data-design-id="{{ $design->id }}" data-rotation-x="{{ $design->rotation_x }}"
                        data-rotation-y="{{ $design->rotation_y }}" data-rotation-z="{{ $design->rotation_z }}"
                        style="height: 100%;">
                        <div class="model-viewer-label">Move mouse to rotate</div>
                    </div>

                </div>
            @else
                <div style="background-color: #1a1a1a; border-radius: 2px; overflow: hidden; margin-bottom: 2rem;">
                    <img src="{{ $design->image }}" alt="{{ $design->title }}"
                        style="width: 100%; height: auto; display: block;">
                </div>
            @endif

            <div style="background-color: #1a1a1a; padding: 2rem; border-radius: 2px; border: 1px solid #2a2a2a;">
                <div style="margin-bottom: 1.5rem;">
                    <span class="portfolio-card-category">{{ $design->category }}</span>
                </div>

                <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: #ffffff;">{{ $design->title }}</h1>

                <p style="font-size: 1.1rem; color: #e5e5e5; line-height: 1.8; margin-bottom: 2rem;">
                    {{ $design->description }}
                </p>

                @if ($design->model_url)
                    <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #2a2a2a;">
                        <h2 style="font-size: 1.3rem; margin-bottom: 1rem; color: #ffffff;">View on Sketchfab</h2>
                        <p style="color: #999; margin-bottom: 1rem;">Open the interactive model on Sketchfab for additional
                            options</p>
                        <a href="{{ $design->model_url }}" target="_blank" class="btn-view">Open on Sketchfab →</a>
                    </div>
                @endif

                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #2a2a2a; display: flex; gap: 1rem;">
                    <div style="flex: 1;">
                        <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Created</p>
                        <p style="font-weight: 500; color: #e5e5e5;">{{ $design->created_at->format('M d, Y') }}</p>
                    </div>
                    <div style="flex: 1;">
                        <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Category</p>
                        <a href="{{ route('portfolio.category', $design->category) }}"
                            style="font-weight: 500; color: #e5e5e5; text-decoration: none; transition: color 0.2s ease;"
                            onmouseover="this.style.color='#fff'"
                            onmouseout="this.style.color='#e5e5e5'">{{ $design->category }}</a>
                    </div>
                </div>
            </div>

            @if ($design->model_file)
                <div
                    style="margin-top: 3rem; padding: 2.5rem; background-color: #1a1a1a; border-radius: 8px; text-align: center; border: 1px solid #2a2a2a; background: linear-gradient(145deg, #1a1a1a 0%, #222 100%);">
                    <h3 style="margin-bottom: 1rem; color: #ffffff; font-size: 1.5rem;">Download Model</h3>
                    <p style="color: #999; margin-bottom: 2rem; font-size: 1rem;">Get the STL file for your own use or 3D
                        printing.</p>
                    <a href="{{ Storage::url($design->model_file) }}" download class="btn-view"
                        style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; font-size: 1.1rem; background: #2563eb; border: none; border-radius: 4px; color: white; text-decoration: none; font-weight: 600; transition: all 0.2s ease;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v4" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" y1="15" x2="12" y2="3" />
                        </svg>
                        Download STL File
                    </a>
                </div>
            @endif

            <div style="margin-top: 4rem; text-align: center;">
                <a href="{{ route('portfolio.index') }}"
                    style="text-decoration: none; color: #999; font-size: 1rem; transition: color 0.2s ease; display: inline-flex; align-items: center; gap: 0.5rem;"
                    onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#999'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Return Home
                </a>
            </div>
        </article>
    </div>
@endsection