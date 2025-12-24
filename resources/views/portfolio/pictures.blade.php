@extends('portfolio.layout')

@section('title', 'Pictures')

@section('content')
    <section class="bg-neutral-50 dark:bg-neutral-950 text-neutral-800 dark:text-neutral-200 py-20 px-8 text-center border-b border-neutral-200 dark:border-neutral-800">
        <div class="max-w-[1400px] mx-auto">
            <h1 class="text-4xl mb-4 font-bold -tracking-wide text-neutral-950 dark:text-white">Gallery</h1>
            <p class="text-[1.05rem] opacity-80 max-w-[600px] mx-auto tracking-wide text-neutral-600 dark:text-neutral-400">All the screenshots and photos of my 3D models.</p>
        </div>
    </section>

    <div class="max-w-[1400px] mx-auto py-12 px-8 text-neutral-800 dark:text-neutral-200">
        <div class="text-center mb-12 flex flex-col md:flex-row md:justify-between md:items-center gap-6">
            @if (request()->has('admin'))
                <button
                    onclick="document.getElementById('upload-modal').classList.remove('hidden'); document.getElementById('upload-modal').classList.add('flex')"
                    class="bg-blue-600 text-white border-none py-3 px-6 rounded-sm cursor-pointer font-semibold transition-all duration-200 hover:bg-blue-700">
                    Upload Picture
                </button>
            @endif
        </div>
        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500 text-red-600 dark:text-red-400 p-4 rounded-sm mb-8">
                <ul class="m-0 pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500/10 border border-red-500 text-red-600 dark:text-red-400 p-4 rounded-sm mb-8">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-500/10 border border-green-500 text-green-600 dark:text-green-400 p-4 rounded-sm mb-8">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-6">
            @forelse($pictures as $picture)
                <div class="bg-white dark:bg-neutral-900 rounded-sm overflow-hidden shadow-sm transition-all duration-200 cursor-pointer border border-neutral-200 dark:border-neutral-800 hover:shadow-lg hover:border-neutral-400 dark:hover:border-neutral-700 group portfolio-card"
                    data-id="{{ $picture->id }}"
                    @if (Str::endsWith($picture->image_path, '.pdf')) onclick="window.open('{{ Storage::url($picture->image_path) }}', '_blank')" @else
                        onclick="openLightbox('{{ Storage::url($picture->image_path) }}', '{{ addslashes($picture->title) }}', '{{ addslashes($picture->description) }}')" @endif>
                    @if (Str::endsWith($picture->image_path, '.pdf'))
                        <div class="h-[200px] flex flex-col items-center justify-center bg-neutral-100 dark:bg-neutral-950 text-red-500">
                            <span class="text-5xl mb-2">PDF</span>
                            <span class="text-xs text-neutral-500 dark:text-neutral-400">Click to view document</span>
                        </div>
                    @else
                        <img src="{{ Storage::url($picture->image_path) }}" alt="{{ $picture->title }}"
                            class="cursor-zoom-in w-full h-[250px] border-b border-neutral-200 dark:border-neutral-800 object-cover block">
                    @endif
                    <div class="p-6">
                        <h3 class="text-base font-semibold mb-2 text-neutral-900 dark:text-white tracking-wide">{{ $picture->title }}</h3>
                        @if ($picture->description)
                            <p class="text-neutral-600 dark:text-neutral-400 text-sm leading-relaxed mb-4">{{ $picture->description }}</p>
                        @endif
                        @if (request()->has('admin'))
                            <div class="flex gap-4 mt-4 items-center">
                                <form action="{{ route('pictures.destroy', $picture) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @if (request()->has('admin'))
                                        <input type="hidden" name="admin" value="{{ request('admin') }}">
                                    @endif
                                    <button type="submit"
                                        class="bg-transparent border-none text-red-500 cursor-pointer text-xs p-0 hover:text-red-400"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <button
                                    onclick="event.stopPropagation(); openEditModal('{{ $picture->id }}', '{{ addslashes($picture->title) }}', '{{ addslashes($picture->description) }}')"
                                    class="bg-transparent border-none text-blue-600 cursor-pointer text-xs p-0 hover:text-blue-500">
                                    Edit
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div
                    class="col-span-full text-center p-20 bg-neutral-50 dark:bg-neutral-900 border border-dashed border-neutral-200 dark:border-neutral-800 rounded-lg">
                    <p class="text-neutral-500 text-lg">No pictures uploaded yet.</p>
                </div>
            @endforelse
        </div>
    </div>

    <div id="upload-modal"
        class="hidden fixed inset-0 w-full h-full bg-black/80 z-[2000] items-center justify-center backdrop-blur-sm">
        <div class="bg-white dark:bg-neutral-900 p-10 rounded-lg w-full max-w-[500px] border border-neutral-200 dark:border-neutral-800 relative shadow-2xl">
            <button
                onclick="document.getElementById('upload-modal').classList.add('hidden'); document.getElementById('upload-modal').classList.remove('flex')"
                class="absolute top-4 right-4 bg-transparent border-none text-neutral-400 text-2xl cursor-pointer hover:text-neutral-900 dark:hover:text-white transition-colors">&times;</button>

            <h2 class="text-neutral-900 dark:text-white mb-6 text-2xl font-bold">Upload Picture</h2>

            <form action="{{ route('pictures.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (request()->has('admin'))
                    <input type="hidden" name="admin" value="{{ request('admin') }}">
                @endif
                <div class="mb-6">
                    <label class="block text-neutral-600 dark:text-neutral-400 mb-2 text-sm font-medium">Title</label>
                    <input type="text" name="title" required
                        class="w-full bg-neutral-50 dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800 text-neutral-900 dark:text-white p-3 rounded-sm outline-none transition-colors duration-200 focus:border-blue-600">
                </div>

                <div class="mb-6">
                    <label class="block text-neutral-600 dark:text-neutral-400 mb-2 text-sm font-medium">Image or PDF</label>
                    <input type="file" name="image" required accept=".jpeg,.jpg,.png,.gif,.svg,.pdf"
                        class="w-full text-neutral-500 dark:text-neutral-400 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-semibold file:bg-neutral-100 dark:file:bg-neutral-800 file:text-neutral-700 dark:file:text-white hover:file:bg-neutral-200 dark:hover:file:bg-neutral-700">
                </div>

                <div class="mb-8">
                    <label class="block text-neutral-600 dark:text-neutral-400 mb-2 text-sm font-medium">Description (Optional)</label>
                    <textarea name="description" rows="3"
                        class="w-full bg-neutral-50 dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800 text-neutral-900 dark:text-white p-3 rounded-sm outline-none transition-colors duration-200 focus:border-blue-600"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white border-none p-4 rounded-sm cursor-pointer font-semibold transition-all duration-200 hover:bg-blue-700">
                    Upload
                </button>
            </form>
        </div>
    </div>
    <!-- Edit Modal -->
    <div id="edit-modal"
        class="hidden fixed inset-0 w-full h-full bg-black/80 z-[2000] items-center justify-center backdrop-blur-sm">
        <div class="bg-white dark:bg-neutral-900 p-10 rounded-lg w-full max-w-[500px] border border-neutral-200 dark:border-neutral-800 relative shadow-2xl">
            <button
                onclick="document.getElementById('edit-modal').classList.add('hidden'); document.getElementById('edit-modal').classList.remove('flex')"
                class="absolute top-4 right-4 bg-transparent border-none text-neutral-400 text-2xl cursor-pointer hover:text-neutral-900 dark:hover:text-white transition-colors">&times;</button>

            <h2 class="text-neutral-900 dark:text-white mb-6 text-2xl font-bold">Edit Picture</h2>

            <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @if (request()->has('admin'))
                    <input type="hidden" name="admin" value="{{ request('admin') }}">
                @endif
                <div class="mb-6">
                    <label class="block text-neutral-600 dark:text-neutral-400 mb-2 text-sm font-medium">Title</label>
                    <input type="text" id="edit-title" name="title" required
                        class="w-full bg-neutral-50 dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800 text-neutral-900 dark:text-white p-3 rounded-sm outline-none transition-colors duration-200 focus:border-blue-600">
                </div>

                <div class="mb-6">
                    <label class="block text-neutral-600 dark:text-neutral-400 mb-2 text-sm font-medium">Replace Image or PDF (Optional)</label>
                    <input type="file" name="image" accept=".jpeg,.jpg,.png,.gif,.svg,.pdf"
                        class="w-full text-neutral-500 dark:text-neutral-400 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-semibold file:bg-neutral-100 dark:file:bg-neutral-800 file:text-neutral-700 dark:file:text-white hover:file:bg-neutral-200 dark:hover:file:bg-neutral-700">
                </div>

                <div class="mb-8">
                    <label class="block text-neutral-600 dark:text-neutral-400 mb-2 text-sm font-medium">Description (Optional)</label>
                    <textarea id="edit-description" name="description" rows="3"
                        class="w-full bg-neutral-50 dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800 text-neutral-900 dark:text-white p-3 rounded-sm outline-none transition-colors duration-200 focus:border-blue-600"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white border-none p-4 rounded-sm cursor-pointer font-semibold transition-all duration-200 hover:bg-blue-700">
                    Save Changes
                </button>
            </form>
        </div>
    </div>
    <div id="lightbox-modal" onclick="closeLightbox()"
        class="hidden fixed inset-0 w-full h-full bg-black/95 z-[3000] items-center justify-center backdrop-blur-md cursor-zoom-out">
        <button onclick="closeLightbox()"
            class="absolute top-8 right-8 bg-transparent border-none text-white text-4xl cursor-pointer z-[3001] hover:text-neutral-300">&times;</button>

        <div class="max-w-[90%] max-h-[90%] flex flex-col items-center" onclick="event.stopPropagation()">
            <img id="lightbox-img" src="" alt=""
                class="max-w-full max-h-[80vh] object-contain rounded-sm shadow-[0_0_30px_rgba(0,0,0,0.5)]">
            <div class="mt-6 text-center text-white">
                <h2 id="lightbox-title" class="text-2xl mb-2 font-bold"></h2>
                <p id="lightbox-desc" class="text-neutral-400 text-base max-w-[600px]"></p>
            </div>
        </div>
    </div>

    <script>
        function openLightbox(src, title, desc) {
            const modal = document.getElementById('lightbox-modal');
            const img = document.getElementById('lightbox-img');
            const titleEl = document.getElementById('lightbox-title');
            const descEl = document.getElementById('lightbox-desc');

            img.src = src;
            titleEl.textContent = title;
            descEl.textContent = desc || '';

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function openEditModal(id, title, desc) {
            const modal = document.getElementById('edit-modal');
            const form = document.getElementById('edit-form');
            const titleInput = document.getElementById('edit-title');
            const descInput = document.getElementById('edit-description');

            form.action = `/pictures/${id}`;
            titleInput.value = title;
            descInput.value = desc || '';

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeLightbox() {
            const modal = document.getElementById('lightbox-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeLightbox();
        });

        @if (request()->has('admin'))
            const grid = document.querySelector('.grid');
            if (grid) {
                const sortable = new Sortable(grid, {
                    animation: 150,
                    forceFallback: true,
                    delay: 100,
                    delayOnTouchOnly: false,
                    touchStartThreshold: 5,
                    ghostClass: 'sortable-ghost',
                    onEnd: function() {
                        const cards = grid.querySelectorAll('.portfolio-card');
                        const order = Array.from(cards).map(card => card.dataset.id);

                        fetch('{{ route('pictures.reorder') }}?admin={{ request('admin') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    order: order
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {}
                            })
                            .catch(error => console.error('Error saving order:', error));
                    }
                });
            }
        @endif
    </script>
    @if (request()->has('admin'))
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
        <style>
            .sortable-ghost {
                opacity: 0.4;
                background: #2563eb !important;
            }

            .portfolio-card {
                cursor: move;
            }
        </style>
    @endif
@endsection
