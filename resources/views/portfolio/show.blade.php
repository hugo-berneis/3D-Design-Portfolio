@extends('portfolio.layout')

@section('title', $design->title)

@section('content')
    <div class="max-w-[1000px] mx-auto py-12 px-8">
        <a href="{{ route('portfolio.index') }}"
            class="no-underline text-neutral-400 mb-8 inline-block text-sm transition-colors duration-200 hover:text-white">←
            Back to Portfolio</a>

        <article>
            @if ($design->model_file)
                <div class="bg-neutral-900 rounded-sm overflow-hidden mb-8 border border-neutral-800 h-[500px] relative">
                    <div class="w-full h-full relative" data-model-viewer
                        data-model-path="{{ Storage::url($design->model_file) }}" data-design-id="{{ $design->id }}"
                        data-rotation-x="{{ $design->rotation_x }}" data-rotation-y="{{ $design->rotation_y }}"
                        data-rotation-z="{{ $design->rotation_z }}">
                        <div
                            class="absolute bottom-2.5 left-2.5 bg-black/60 text-neutral-400 py-1.5 px-3 rounded-sm text-xs pointer-events-none uppercase tracking-wider opacity-0 transition-opacity duration-200 hover:opacity-100 model-viewer-label">
                            Move mouse to rotate</div>
                    </div>

                </div>
            @else
                <div class="bg-neutral-900 rounded-sm overflow-hidden mb-8 border border-neutral-800">
                    <img src="{{ $design->image }}" alt="{{ $design->title }}" class="w-full h-auto block">
                </div>
            @endif

            <div class="bg-neutral-900 p-8 rounded-sm border border-neutral-800">
                <div class="mb-6">
                    <span
                        class="inline-block bg-neutral-800 text-neutral-400 py-1.5 px-3 rounded-sm text-xs mb-3 uppercase tracking-wider font-medium">{{ $design->category }}</span>
                </div>

                <h1 class="text-4xl mb-4 text-white font-bold tracking-tight">{{ $design->title }}</h1>

                <p class="text-lg text-neutral-200 leading-relaxed mb-8">
                    {{ $design->description }}
                </p>

                @if ($design->model_url)
                    <div class="mt-8 pt-8 border-t border-neutral-800">
                        <h2 class="text-xl mb-4 text-white font-semibold">View on Sketchfab</h2>
                        <p class="text-neutral-400 mb-4">Open the interactive model on Sketchfab for additional options</p>
                        <a href="{{ $design->model_url }}" target="_blank"
                            class="inline-block bg-transparent text-neutral-200 py-2 px-4 border border-neutral-800 rounded-sm no-underline text-sm font-medium transition-all duration-200 tracking-wide hover:bg-neutral-900 hover:border-neutral-600 hover:text-white">Open
                            on Sketchfab →</a>
                    </div>
                @endif

                <div class="mt-8 pt-8 border-t border-neutral-800 flex gap-4 sm:gap-8 flex-wrap">
                    <div class="flex-1 min-w-[150px]">
                        <p class="text-neutral-500 text-sm mb-2 uppercase tracking-wide font-medium">Created</p>
                        <p class="font-medium text-neutral-200">{{ $design->created_at->format('M d, Y') }}</p>
                    </div>
                    <div class="flex-1 min-w-[150px]">
                        <p class="text-neutral-500 text-sm mb-2 uppercase tracking-wide font-medium">Category</p>
                        <a href="{{ route('portfolio.category', $design->category) }}"
                            class="no-underline text-neutral-200 font-medium transition-colors duration-200 hover:text-white">{{ $design->category }}</a>
                    </div>
                </div>
            </div>

            @if ($design->model_file)
                <div
                    class="mt-12 p-10 bg-neutral-900 rounded-lg text-center border border-neutral-800 bg-gradient-to-br from-neutral-900 to-neutral-800">
                    <h3 class="mb-4 text-white text-2xl font-bold">Download Model</h3>
                    <p class="text-neutral-400 mb-8 text-base">Get the STL file for your own use or 3D printing.</p>
                    <a href="{{ Storage::url($design->model_file) }}" download
                        class="inline-flex items-center gap-2 py-4 px-8 text-lg bg-blue-600 border-none rounded-sm text-white no-underline font-semibold transition-all duration-200 hover:bg-blue-700 shadow-lg shadow-blue-900/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v4" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" y1="15" x2="12" y2="3" />
                        </svg>
                        Download STL File
                    </a>
                </div>
            @endif

            <div class="mt-16 text-center">
                <a href="{{ route('portfolio.index') }}"
                    class="inline-flex items-center gap-2 no-underline text-neutral-400 text-base transition-colors duration-200 hover:text-white">
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
