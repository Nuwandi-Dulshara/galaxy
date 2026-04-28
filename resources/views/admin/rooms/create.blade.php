@extends('admin.layouts.app')

@section('title', 'Create Room')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Create Room</h4>

        <a href="{{ route('admin.rooms.index') }}" class="btn btn-theme-light">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Room Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}" required>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Room Size</label>
                <input type="number" name="room_size" class="form-control" value="{{ old('room_size') }}"
                    placeholder="Example: 250">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Capacity</label>
                <input type="number" name="capacity" class="form-control" value="{{ old('capacity', 2) }}" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">View</label>
                <input type="text" name="view" class="form-control" value="{{ old('view') }}" placeholder="Sea View">
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Bed Type</label>

                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Single Bed', 'Double Bed', 'Queen Bed', 'King Bed', 'Twin Beds', 'Sofa Bed'] as $bed)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bed_type[]" value="{{ $bed }}"
                            id="{{ Str::slug($bed) }}">
                        <label class="form-check-label" for="{{ Str::slug($bed) }}">{{ $bed }}</label>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Availability</label>
                <select name="availability" id="availability" class="form-select" required>
                    <option value="available" {{ old('availability', 'available') === 'available' ? 'selected' : '' }}>
                        Available
                    </option>
                    <option value="unavailable" {{ old('availability') === 'unavailable' ? 'selected' : '' }}>
                        Not Available
                    </option>
                </select>
            </div>

            <div class="col-md-8 mb-3" id="unavailableDates">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="form-label">Sold From</label>
                        <input type="date" name="unavailable_from" class="form-control"
                            value="{{ old('unavailable_from') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Sold To</label>
                        <input type="date" name="unavailable_to" class="form-control"
                            value="{{ old('unavailable_to') }}">
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Room Images</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*">
            </div>

            <div class="col-md-12 mb-4">
                <label class="form-label">View Images</label>
                <div id="imagePreview" class="d-flex flex-wrap gap-3"></div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Save Room
        </button>
    </form>
</div>
@endsection

@push('scripts')
<script>
const availability = document.getElementById('availability');
const unavailableDates = document.getElementById('unavailableDates');

function toggleUnavailableDates() {
    unavailableDates.style.display = availability.value === 'unavailable' ? 'block' : 'none';
}

availability.addEventListener('change', toggleUnavailableDates);
toggleUnavailableDates();

document.getElementById('images').addEventListener('change', function(event) {
    let preview = document.getElementById('imagePreview');
    preview.innerHTML = '';

    Array.from(event.target.files).forEach(function(file) {
        let reader = new FileReader();

        reader.onload = function(e) {
            let img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '120px';
            img.style.height = '90px';
            img.style.objectFit = 'cover';
            img.style.borderRadius = '10px';
            img.style.border = '2px solid #102c57';
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    });
});
</script>
@endpush
