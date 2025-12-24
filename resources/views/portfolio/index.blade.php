@extends('portfolio.layout')

@section('title', 'My Portfolio')

@section('content')
    <section
        class="bg-neutral-50 dark:bg-neutral-900 text-neutral-800 dark:text-neutral-200 py-20 px-8 text-center border-b border-neutral-200 dark:border-neutral-800">
        <div class="max-w-[1400px] mx-auto">
            <h1 class="text-4xl mb-4 font-bold -tracking-wide text-neutral-950 dark:text-white">Models</h1>
            <p class="text-[1.05rem] opacity-80 max-w-[600px] mx-auto tracking-wide text-neutral-600 dark:text-neutral-400">
                My collection of 3D designs. <br>Each model
                is made from scratch using <a href="https://www.shapr3d.com/"
                    class="hover:text-black dark:hover:text-white transition-colors">Shapr3D</a>.</p>
        </div>
    </section>

    <section
        class="flex  gap-3 p-8 justify-center flex-wrap max-w-[1400px] mx-auto border-b border-neutral-200 dark:border-neutral-800"
        id="portfolio">
        <a href="{{ route('portfolio.index') }}"
            @if ($category === null) class="bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 border border-neutral-950 dark:border-white py-2 px-5 rounded-sm cursor-pointer font-medium transition-all duration-200 text-sm tracking-wide capitalize"
            @else class="bg-transparent border border-neutral-200 dark:border-neutral-800 py-2 px-5 rounded-sm cursor-pointer font-medium transition-all duration-200 text-neutral-500 dark:text-neutral-400 text-sm tracking-wide capitalize hover:border-neutral-400 dark:hover:border-neutral-600 hover:text-neutral-900 dark:hover:text-neutral-200" @endif>All</a>
        @foreach ($categories as $cat)
            <a href="{{ route('portfolio.category', $cat) }}"
                @if ($category === $cat) class="bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 border border-neutral-950 dark:border-white py-2 px-5 rounded-sm cursor-pointer font-medium transition-all duration-200 text-sm tracking-wide capitalize"
                @else class="bg-transparent border border-neutral-200 dark:border-neutral-800 py-2 px-5 rounded-sm cursor-pointer font-medium transition-all duration-200 text-neutral-500 dark:text-neutral-400 text-sm tracking-wide capitalize hover:border-neutral-400 dark:hover:border-neutral-600 hover:text-neutral-900 dark:hover:text-neutral-200" @endif>{{ $cat }}</a>
        @endforeach
    </section>

    <div class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-6 p-12 max-w-[1400px] mx-auto">
        @forelse ($designs as $design)
            <div
                class="bg-white dark:bg-neutral-900 rounded-sm overflow-hidden shadow-sm transition-all duration-200 cursor-pointer border border-neutral-200 dark:border-neutral-800 hover:shadow-lg hover:border-neutral-400 dark:hover:border-neutral-700 group">
                @if ($design->model_file)
                    <a href="{{ route('portfolio.show', $design) }}" class="cursor-pointer">
                        <div class="w-full h-[250px] bg-neutral-50 dark:bg-neutral-900 rounded-sm relative overflow-hidden border-b border-neutral-200 dark:border-neutral-800 group"
                            data-model-viewer data-model-path="{{ Storage::url($design->model_file) }}"
                            data-design-id="{{ $design->id }}" data-rotation-x="{{ $design->rotation_x }}"
                            data-rotation-y="{{ $design->rotation_y }}" data-rotation-z="{{ $design->rotation_z }}">
                            <div
                                class="absolute bottom-2.5 left-2.5 bg-black/60 dark:bg-black/60 text-white dark:text-neutral-400 py-1.5 px-3 rounded-sm text-xs pointer-events-none uppercase tracking-wider opacity-0 transition-opacity duration-200 group-hover:opacity-100 model-viewer-label">
                                Move mouse to rotate</div>
                        </div>
                    </a>
                @else
                    <img src="{{ $design->thumbnail }}" alt="{{ $design->title }}" loading="lazy"
                        class="w-full h-[250px] object-cover block border-b border-neutral-200 dark:border-neutral-800">
                @endif
                <div class="p-6">
                    <div
                        class="inline-block bg-neutral-100 dark:bg-neutral-800 text-neutral-600 dark:text-neutral-400 py-1.5 px-3 rounded-sm text-xs mb-3 uppercase tracking-wider font-medium">
                        {{ $design->category }}</div>
                    <h3 class="text-base font-semibold mb-2 text-neutral-900 dark:text-white tracking-wide">
                        {{ $design->title }}</h3>
                    <p class="text-neutral-600 dark:text-neutral-400 text-sm leading-relaxed mb-4">
                        {{ Str::limit($design->description, 100) }}
                    </p>
                    <a href="{{ route('portfolio.show', $design) }}"
                        class="inline-block bg-transparent text-neutral-700 dark:text-neutral-200 py-2 px-4 border border-neutral-300 dark:border-neutral-800 rounded-sm no-underline text-sm font-medium transition-all duration-200 tracking-wide hover:bg-neutral-50 dark:hover:bg-neutral-800 hover:border-neutral-400 dark:hover:border-neutral-600 hover:text-neutral-900 dark:hover:text-white">View
                        Project →</a>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center p-12">
                <p class="text-neutral-400 text-lg">No designs found in this category.</p>
            </div>
        @endforelse
    </div>
@endsection
