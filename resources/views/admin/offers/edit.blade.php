@extends('admin.layouts.app')

@section('title', 'Edit Offer')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Edit Offer</h4>

        <a href="{{ route('admin.offers.index') }}" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <form action="{{ route('admin.offers.update', $offer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $offer->title) }}" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description / Included Items / Free Items</label>
            <textarea name="description" class="form-control"
                rows="4">{{ old('description', $offer->description) }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Original Price</label>
            <input type="number" step="0.01" name="original_price" id="original_price" class="form-control"
                value="{{ old('original_price', $offer->original_price) }}" required oninput="calculateOfferPrice()">
            @error('original_price') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Offer Percentage</label>
            <input type="number" step="0.01" name="offer_percentage" id="offer_percentage" class="form-control"
                value="{{ old('offer_percentage', $offer->offer_percentage) }}" required
                oninput="calculateOfferPrice()">
            @error('offer_percentage') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Offer Price - Automatic Calculate</label>
            <input type="text" id="offer_price" class="form-control"
                value="Rs. {{ number_format($offer->offer_price, 2) }}" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control"
                value="{{ old('start_date', $offer->start_date) }}">
            @error('start_date') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $offer->end_date) }}">
            @error('end_date') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Offer Image</label>

            @if($offer->image)
            <div class="mb-3">
                <p class="mb-1 fw-bold">Old Image</p>
                <img src="{{ asset('storage/' . $offer->image) }}" class="img-fluid rounded"
                    style="width:200px;height:150px;object-fit:cover;">
            </div>
            @endif

            <input type="file" name="image" class="form-control" accept="image/*" onchange="previewOfferImage(event)">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror

            <div class="mt-3">
                <p class="mb-1 fw-bold">New Current Image</p>
                <img id="offerImagePreview" src="#" class="img-fluid rounded d-none"
                    style="width:200px;height:150px;object-fit:cover;">
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_available" value="1" class="form-check-input" id="is_available"
                {{ old('is_available', $offer->is_available) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_available">Available</label>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Update Offer
        </button>
    </form>
</div>

<script>
function calculateOfferPrice() {
    const originalPrice = parseFloat(document.getElementById('original_price').value) || 0;
    const percentage = parseFloat(document.getElementById('offer_percentage').value) || 0;
    const offerPrice = originalPrice - (originalPrice * percentage / 100);

    document.getElementById('offer_price').value = 'Rs. ' + offerPrice.toFixed(2);
}

function previewOfferImage(event) {
    const image = document.getElementById('offerImagePreview');
    image.src = URL.createObjectURL(event.target.files[0]);
    image.classList.remove('d-none');
}
</script>
@endsection