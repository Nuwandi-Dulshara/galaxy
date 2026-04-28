@extends('admin.layouts.app')

@section('title', 'Add Menu Item')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Add Menu Item</h4>

        <a href="{{ route('admin.menu.index') }}" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}" required>
            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" value="{{ old('category') }}">
            @error('category') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" accept="image/*" onchange="previewMenuImage(event)">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror

            <div class="mt-3">
                <img id="menuImagePreview" src="#" alt="Menu Image Preview"
                    class="img-fluid rounded d-none" style="width:200px;height:150px;object-fit:cover;">
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_available" value="1" class="form-check-input" id="is_available" checked>
            <label class="form-check-label" for="is_available">Available</label>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Save Menu Item
        </button>
    </form>
</div>

<script>
function previewMenuImage(event) {
    const image = document.getElementById('menuImagePreview');
    image.src = URL.createObjectURL(event.target.files[0]);
    image.classList.remove('d-none');
}
</script>
@endsection