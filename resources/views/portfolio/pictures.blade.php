@extends('portfolio.layout')

@section('title', 'Pictures')

@section('content')
    <div style="max-width: 1400px; margin: 0 auto; padding: 3rem 2rem;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
            <div>
                <h1 style="font-size: 2.5rem; color: #ffffff; margin-bottom: 0.5rem;">Pictures</h1>
                <p style="color: #999; font-size: 1.1rem;">Screenshots and photos of models.</p>
            </div>
            @if(request()->has('admin'))
                <button onclick="document.getElementById('upload-modal').style.display='flex'"
                    style="background: #2563eb; color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 4px; cursor: pointer; font-weight: 600; transition: all 0.2s ease;"
                    onmouseover="this.style.background='#1d4ed8'" onmouseout="this.style.background='#2563eb'">
                    Upload Picture
                </button>
            @endif
        </div>
        @if ($errors->any())
            <div style="background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; color: #ef4444; padding: 1rem; border-radius: 4px; margin-bottom: 2rem;">
                <ul style="margin: 0; padding-left: 1.5rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('error'))
            <div
                style="background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; color: #ef4444; padding: 1rem; border-radius: 4px; margin-bottom: 2rem;">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div
                style="background: rgba(34, 197, 94, 0.1); border: 1px solid #22c55e; color: #22c55e; padding: 1rem; border-radius: 4px; margin-bottom: 2rem;">
                {{ session('success') }}
            </div>
        @endif

        <div class="portfolio-grid">
            @forelse($pictures as $picture)
                <div class="portfolio-card" data-id="{{ $picture->id }}" @if(Str::endsWith($picture->image_path, '.pdf'))
                onclick="window.open('{{ Storage::url($picture->image_path) }}', '_blank')" @else
                        onclick="openLightbox('{{ Storage::url($picture->image_path) }}', '{{ addslashes($picture->title) }}', '{{ addslashes($picture->description) }}')"
                    @endif>
                    @if(Str::endsWith($picture->image_path, '.pdf'))
                        <div
                            style="height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #0f0f0f; color: #ff4444;">
                            <span style="font-size: 3rem; margin-bottom: 0.5rem;">PDF</span>
                            <span style="font-size: 0.8rem; color: #999;">Click to view document</span>
                        </div>
                    @else
                        <img src="{{ Storage::url($picture->image_path) }}" alt="{{ $picture->title }}" style="cursor: zoom-in;">
                    @endif
                    <div class="portfolio-card-content">
                        <h3 class="portfolio-card-title">{{ $picture->title }}</h3>
                        @if($picture->description)
                            <p class="portfolio-card-description">{{ $picture->description }}</p>
                        @endif
                        @if(request()->has('admin'))
                            <form action="{{ route('pictures.destroy', $picture) }}" method="POST" style="margin-top: 1rem;">
                                @csrf
                                @method('DELETE')
                                @if(request()->has('admin'))
                                    <input type="hidden" name="admin" value="{{ request('admin') }}">
                                @endif
                                <button type="submit"
                                    style="background: none; border: none; color: #ff4444; cursor: pointer; font-size: 0.8rem; padding: 0;"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <button
                                onclick="event.stopPropagation(); openEditModal('{{ $picture->id }}', '{{ addslashes($picture->title) }}', '{{ addslashes($picture->description) }}')"
                                style="background: none; border: none; color: #2563eb; cursor: pointer; font-size: 0.8rem; padding: 0; margin-top: 0.5rem; display: block;">
                                Edit
                            </button>
                        @endif
                    </div>
                </div>
            @empty
                <div
                    style="grid-column: 1 / -1; text-align: center; padding: 5rem; background: #1a1a1a; border: 1px dashed #333; border-radius: 8px;">
                    <p style="color: #666; font-size: 1.1rem;">No pictures uploaded yet.</p>
                </div>
            @endforelse
        </div>
    </div>

    <div id="upload-modal"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 2000; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
        <div
            style="background: #1a1a1a; padding: 2.5rem; border-radius: 8px; width: 100%; max-width: 500px; border: 1px solid #333; position: relative;">
            <button onclick="document.getElementById('upload-modal').style.display='none'"
                style="position: absolute; top: 1rem; right: 1rem; background: none; border: none; color: #999; font-size: 1.5rem; cursor: pointer;">&times;</button>

            <h2 style="color: #fff; margin-bottom: 1.5rem; font-size: 1.5rem;">Upload Picture</h2>

            <form action="{{ route('pictures.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(request()->has('admin'))
                    <input type="hidden" name="admin" value="{{ request('admin') }}">
                @endif
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; color: #999; margin-bottom: 0.5rem; font-size: 0.9rem;">Title</label>
                    <input type="text" name="title" required
                        style="width: 100%; background: #0f0f0f; border: 1px solid #333; color: #fff; padding: 0.8rem; border-radius: 4px; outline: none; transition: border-color 0.2s;"
                        onfocus="this.style.borderColor='#2563eb'" onblur="this.style.borderColor='#333'">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; color: #999; margin-bottom: 0.5rem; font-size: 0.9rem;">Image or PDF</label>
                    <input type="file" name="image" required accept=".jpeg,.jpg,.png,.gif,.svg,.pdf"
                        style="width: 100%; color: #999; font-size: 0.9rem;">
                </div>

                <div style="margin-bottom: 2rem;">
                    <label style="display: block; color: #999; margin-bottom: 0.5rem; font-size: 0.9rem;">Description
                        (Optional)</label>
                    <textarea name="description" rows="3"
                        style="width: 100%; background: #0f0f0f; border: 1px solid #333; color: #fff; padding: 0.8rem; border-radius: 4px; outline: none; transition: border-color 0.2s;"
                        onfocus="this.style.borderColor='#2563eb'" onblur="this.style.borderColor='#333'"></textarea>
                </div>

                <button type="submit"
                    style="width: 100%; background: #2563eb; color: white; border: none; padding: 1rem; border-radius: 4px; cursor: pointer; font-weight: 600; transition: all 0.2s ease;"
                    onmouseover="this.style.background='#1d4ed8'" onmouseout="this.style.background='#2563eb'">
                    Upload
                </button>
            </form>
        </div>
    </div>
    <!-- Edit Modal -->
    <div id="edit-modal"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 2000; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
        <div
            style="background: #1a1a1a; padding: 2.5rem; border-radius: 8px; width: 100%; max-width: 500px; border: 1px solid #333; position: relative;">
            <button onclick="document.getElementById('edit-modal').style.display='none'"
                style="position: absolute; top: 1rem; right: 1rem; background: none; border: none; color: #999; font-size: 1.5rem; cursor: pointer;">&times;</button>

            <h2 style="color: #fff; margin-bottom: 1.5rem; font-size: 1.5rem;">Edit Picture</h2>

            <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @if(request()->has('admin'))
                    <input type="hidden" name="admin" value="{{ request('admin') }}">
                @endif
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; color: #999; margin-bottom: 0.5rem; font-size: 0.9rem;">Title</label>
                    <input type="text" id="edit-title" name="title" required
                        style="width: 100%; background: #0f0f0f; border: 1px solid #333; color: #fff; padding: 0.8rem; border-radius: 4px; outline: none; transition: border-color 0.2s;"
                        onfocus="this.style.borderColor='#2563eb'" onblur="this.style.borderColor='#333'">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; color: #999; margin-bottom: 0.5rem; font-size: 0.9rem;">Replace Image or PDF (Optional)</label>
                    <input type="file" name="image" accept=".jpeg,.jpg,.png,.gif,.svg,.pdf" style="width: 100%; color: #999; font-size: 0.9rem;">
                </div>

                <div style="margin-bottom: 2rem;">
                    <label style="display: block; color: #999; margin-bottom: 0.5rem; font-size: 0.9rem;">Description
                        (Optional)</label>
                    <textarea id="edit-description" name="description" rows="3"
                        style="width: 100%; background: #0f0f0f; border: 1px solid #333; color: #fff; padding: 0.8rem; border-radius: 4px; outline: none; transition: border-color 0.2s;"
                        onfocus="this.style.borderColor='#2563eb'" onblur="this.style.borderColor='#333'"></textarea>
                </div>

                <button type="submit"
                    style="width: 100%; background: #2563eb; color: white; border: none; padding: 1rem; border-radius: 4px; cursor: pointer; font-weight: 600; transition: all 0.2s ease;"
                    onmouseover="this.style.background='#1d4ed8'" onmouseout="this.style.background='#2563eb'">
                    Save Changes
                </button>
            </form>
        </div>
    </div>
    <div id="lightbox-modal" onclick="closeLightbox()"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.95); z-index: 3000; align-items: center; justify-content: center; backdrop-filter: blur(8px); cursor: zoom-out;">
        <button onclick="closeLightbox()"
            style="position: absolute; top: 2rem; right: 2rem; background: none; border: none; color: #fff; font-size: 2.5rem; cursor: pointer; z-index: 3001;">&times;</button>

        <div style="max-width: 90%; max-height: 90%; display: flex; flex-direction: column; align-items: center;"
            onclick="event.stopPropagation()">
            <img id="lightbox-img" src="" alt=""
                style="max-width: 100%; max-height: 80vh; object-fit: contain; border-radius: 4px; box-shadow: 0 0 30px rgba(0,0,0,0.5);">
            <div style="margin-top: 1.5rem; text-align: center; color: #fff;">
                <h2 id="lightbox-title" style="font-size: 1.5rem; margin-bottom: 0.5rem;"></h2>
                <p id="lightbox-desc" style="color: #999; font-size: 1rem; max-width: 600px;"></p>
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

            modal.style.display = 'flex';
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

            modal.style.display = 'flex';
        }

        function closeLightbox() {
            const modal = document.getElementById('lightbox-modal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeLightbox();
        });

        @if(request()->has('admin'))
            const grid = document.querySelector('.portfolio-grid');
            if (grid) {
                const sortable = new Sortable(grid, {
                    animation: 150,
                    forceFallback: true,
                    delay: 100,
                    delayOnTouchOnly: false,
                    touchStartThreshold: 5,
                    ghostClass: 'sortable-ghost',
                    onEnd: function () {
                        const cards = grid.querySelectorAll('.portfolio-card');
                        const order = Array.from(cards).map(card => card.dataset.id);

                        fetch('{{ route("pictures.reorder") }}?admin={{ request("admin") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ order: order })
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                }
                            })
                            .catch(error => console.error('Error saving order:', error));
                    }
                });
            }
        @endif
    </script>
    @if(request()->has('admin'))
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