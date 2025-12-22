@extends('portfolio.layout')

@section('title', 'My Portfolio')

@section('content')
    <section class="hero">
        <div class="container">
            <h1>My Portfolio</h1>
            <p>My collection of 3D designs. Each model is made from scratch using Shapr3D.</p>
        </div>
    </section>

    <section class="category-filters" id="portfolio">
        <a href="{{ route('portfolio.index') }}" class="filter-btn active">All</a>
        @foreach ($categories as $cat)
            <a href="{{ route('portfolio.category', $cat) }}" class="filter-btn">{{ $cat }}</a>
        @endforeach
    </section>

    <div class="portfolio-grid">
        @forelse ($designs as $design)
            <div class="portfolio-card">
                @if ($design->model_file)
                    <div class="model-viewer" data-model-viewer data-model-path="{{ Storage::url($design->model_file) }}"
                        data-design-id="{{ $design->id }}" data-rotation-x="{{ $design->rotation_x }}"
                        data-rotation-y="{{ $design->rotation_y }}" data-rotation-z="{{ $design->rotation_z }}">
                        <div class="model-viewer-label">Move mouse to rotate</div>
                    </div>

                @else
                    <img src="{{ $design->thumbnail }}" alt="{{ $design->title }}" loading="lazy">
                @endif
                <div class="portfolio-card-content">
                    <div class="portfolio-card-category">{{ $design->category }}</div>
                    <h3 class="portfolio-card-title">{{ $design->title }}</h3>
                    <p class="portfolio-card-description">{{ Str::limit($design->description, 100) }}</p>
                    <a href="{{ route('portfolio.show', $design) }}" class="btn-view">View Project →</a>
                </div>
            </div>
        @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 3rem;">
                <p style="color: #999; font-size: 1.1rem;">No designs found in this category.</p>
            </div>
        @endforelse
    </div>
@endsection