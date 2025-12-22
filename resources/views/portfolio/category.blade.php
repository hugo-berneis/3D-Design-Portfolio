@extends('portfolio.layout')

@section('title', $category . ' Designs')

@section('content')
<section class="hero">
    <div class="container">
        <h1>{{ $category }} Collection</h1>
        <p>Explore my {{ $category }} designs and projects</p>
    </div>
</section>

<section class="category-filters">
    <a href="{{ route('portfolio.index') }}" class="filter-btn">All</a>
    <a href="{{ route('portfolio.category', $category) }}" class="filter-btn active">{{ $category }}</a>
</section>

<div class="portfolio-grid">
    @forelse ($designs as $design)
        <div class="portfolio-card">
            @if ($design->model_file)
                <div class="model-viewer" data-model-viewer data-model-path="{{ Storage::url($design->model_file) }}">
                    <div class="model-viewer-label">Hover to rotate</div>
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
            <p style="color: #999; font-size: 1.1rem;">No designs found in the {{ $category }} category.</p>
            <a href="{{ route('portfolio.index') }}" class="btn-view" style="margin-top: 1rem; display: inline-block;">Back to Portfolio</a>
        </div>
    @endforelse
</div>
@endsection
