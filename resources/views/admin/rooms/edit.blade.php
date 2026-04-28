@extends('admin.layouts.app')

@section('title', 'Edit Room')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Edit Room</h4>

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

    @php
    $selectedBeds = $room->bed_type ? array_map('trim', explode(',', $room->bed_type)) : [];
    $availability = old('availability', $room->is_available === false ? 'unavailable' : 'available');
    @endphp

    <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Room Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $room->name) }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control"
                    value="{{ old('price', $room->price) }}" required>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4"
                    required>{{ old('description', $room->description) }}</textarea>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Room Size</label>
                <input type="number" name="room_size" class="form-control"
                    value="{{ old('room_size', $room->room_size) }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Capacity</label>
                <input type="number" name="capacity" class="form-control" value="{{ old('capacity', $room->capacity) }}"
                    required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">View</label>
                <input type="text" name="view" class="form-control" value="{{ old('view', $room->view) }}">
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Bed Type</label>

                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Single Bed', 'Double Bed', 'Queen Bed', 'King Bed', 'Twin Beds', 'Sofa Bed'] as $bed)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bed_type[]" value="{{ $bed }}"
                            id="{{ Str::slug($bed) }}" {{ in_array($bed, $selectedBeds) ? 'checked' : '' }}>
                        <label class="form-check-label" for="{{ Str::slug($bed) }}">{{ $bed }}</label>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Availability</label>
                <select name="availability" id="availability" class="form-select" required>
                    <option value="available" {{ $availability === 'available' ? 'selected' : '' }}>
                        Available
                    </option>
                    <option value="unavailable" {{ $availability === 'unavailable' ? 'selected' : '' }}>
                        Not Available
                    </option>
                </select>
            </div>

            <div class="col-md-8 mb-3" id="unavailableDates">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="form-label">Sold From</label>
                        <input type="date" name="unavailable_from" class="form-control"
                            value="{{ old('unavailable_from', optional($room->unavailable_from)->format('Y-m-d')) }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Sold To</label>
                        <input type="date" name="unavailable_to" class="form-control"
                            value="{{ old('unavailable_to', optional($room->unavailable_to)->format('Y-m-d')) }}">
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Old Images</label>

                <div class="d-flex flex-wrap gap-3">
                    @if($room->images)
                    @foreach($room->images as $image)
                    <img src="{{ asset('storage/' . $image) }}"
                        style="width:120px;height:90px;object-fit:cover;border-radius:10px;border:2px solid #102c57;">
                    @endforeach
                    @elseif($room->image)
                    <img src="{{ asset('storage/' . $room->image) }}"
                        style="width:120px;height:90px;object-fit:cover;border-radius:10px;border:2px solid #102c57;">
                    @else
                    <p class="text-muted">No images uploaded.</p>
                    @endif
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Upload New Images</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*">
                <small class="text-muted">New images will be added with old images.</small>
            </div>

            <div class="col-md-12 mb-4">
                <label class="form-label">New Image Preview</label>
                <div id="imagePreview" class="d-flex flex-wrap gap-3"></div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Update Room
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
