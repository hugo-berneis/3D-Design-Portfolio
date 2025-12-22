@extends('portfolio.layout')

@section('title', 'Upload 3D Model')

@section('content')
    <div class="max-w-[600px] mx-auto py-12 px-8 text-neutral-800 dark:text-neutral-200">
        <h1 class="text-3xl mb-8 text-neutral-900 dark:text-white">Upload 3D Model</h1>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500 text-red-600 dark:text-red-400 p-4 rounded-sm mb-8">
                <ul class="list-none p-0 m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-500/10 border border-green-500 text-green-600 dark:text-green-400 p-4 rounded-sm mb-8">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('models.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white dark:bg-neutral-900 p-8 rounded-sm border border-neutral-200 dark:border-neutral-800 shadow-sm">
            @csrf

            <div class="mb-6">
                <label for="design_id" class="block mb-2 font-medium text-neutral-900 dark:text-white">Select Design:</label>
                <select name="design_id" id="design_id" required
                    class="w-full p-3 bg-neutral-50 dark:bg-neutral-800 text-neutral-900 dark:text-neutral-200 border border-neutral-200 dark:border-neutral-700 rounded-sm text-base">
                    <option value="">Choose a design...</option>
                    @foreach ($designs as $design)
                        <option value="{{ $design->id }}">{{ $design->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-8">
                <label for="model_file" class="block mb-2 font-medium text-neutral-900 dark:text-white">3D Model (.STL file):</label>
                <input type="file" name="model_file" id="model_file" accept=".stl" required
                    class="w-full p-3 bg-neutral-50 dark:bg-neutral-800 text-neutral-900 dark:text-neutral-200 border border-neutral-200 dark:border-neutral-700 rounded-sm">
                <p class="text-sm text-neutral-500 dark:text-neutral-400 mt-2">Maximum file size: 100MB. Supported format: .STL</p>
            </div>

            <button type="submit"
                class="w-full p-3 bg-neutral-900 dark:bg-white text-white dark:text-neutral-950 border-none rounded-sm font-semibold cursor-pointer text-base transition-colors duration-200 hover:bg-neutral-700 dark:hover:bg-neutral-200">
                Upload Model
            </button>
        </form>

        <div class="mt-12 p-8 bg-white dark:bg-neutral-900 rounded-sm border border-neutral-200 dark:border-neutral-800 shadow-sm">
            <h3 class="mb-4 text-neutral-900 dark:text-white font-bold">Recent Designs</h3>
            <div class="flex flex-col gap-4">
                @foreach ($designs as $design)
                    <div class="p-4 bg-neutral-50 dark:bg-neutral-950 rounded-sm border border-neutral-200 dark:border-neutral-800 flex justify-between items-center">
                        <div>
                            <p class="font-medium text-neutral-900 dark:text-white mb-1">{{ $design->title }}</p>
                            <p class="text-sm text-neutral-600 dark:text-neutral-400">{{ $design->category }}</p>
                            @if ($design->model_file)
                                <p class="text-sm text-green-600 dark:text-green-500 mt-1">✓ Has 3D Model</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
