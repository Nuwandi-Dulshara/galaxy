@extends('admin.layouts.app')

@section('title', 'Edit Menu Item')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Edit Menu Item</h4>

        <a href="{{ route('admin.menu.index') }}" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $menu->name) }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $menu->price) }}"
                required>
            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $menu->category) }}">
            @error('category') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"
                rows="4">{{ old('description', $menu->description) }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Old / Current Image</label>

            @if($menu->image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="img-fluid rounded"
                    style="width:200px;height:150px;object-fit:cover;">
            </div>
            @else
            <p class="text-muted">No image uploaded.</p>
            @endif

            <label class="form-label">Update Image</label>
            <input type="file" name="image" class="form-control" accept="image/*"
                onchange="previewUpdatedMenuImage(event)">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror

            <div class="mt-3">
                <label class="form-label d-none" id="updatedImageLabel">Updated Image Preview</label>
                <br>
                <img id="updatedMenuImagePreview" src="#" alt="Updated Menu Image Preview"
                    class="img-fluid rounded d-none" style="width:200px;height:150px;object-fit:cover;">
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_available" value="1" class="form-check-input" id="is_available"
                {{ old('is_available', $menu->is_available) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_available">Available</label>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Update Menu Item
        </button>
    </form>
</div>

<script>
function previewUpdatedMenuImage(event) {
    const image = document.getElementById('updatedMenuImagePreview');
    const label = document.getElementById('updatedImageLabel');

    image.src = URL.createObjectURL(event.target.files[0]);
    image.classList.remove('d-none');
    label.classList.remove('d-none');
}
</script>
@endsection