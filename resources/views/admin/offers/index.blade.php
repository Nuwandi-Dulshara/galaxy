@extends('admin.layouts.app')

@section('title', 'Offers')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Offers</h4>

        <a href="{{ route('admin.offers.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add Offer
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description / Items</th>
                    <th>Original Price</th>
                    <th>Offer %</th>
                    <th>Offer Price</th>
                    <th>Image</th>
                    <th>Available</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th width="120">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($offers as $offer)
                <tr>
                    <td>{{ $offer->id }}</td>
                    <td>{{ $offer->title }}</td>
                    <td>{{ Str::limit($offer->description, 60) }}</td>
                    <td>Rs. {{ number_format($offer->original_price, 2) }}</td>
                    <td>{{ $offer->offer_percentage }}%</td>
                    <td>Rs. {{ number_format($offer->offer_price, 2) }}</td>

                    <td>
                        @if($offer->image)
                        <button type="button" class="btn btn-sm btn-theme-icon" data-bs-toggle="modal"
                            data-bs-target="#offerImageModal{{ $offer->id }}">
                            <i class="bi bi-eye"></i>
                        </button>
                        @else
                        <span class="text-muted">No image</span>
                        @endif
                    </td>

                    <td>
                        @if($offer->is_available)
                        <span class="badge bg-success">Yes</span>
                        @else
                        <span class="badge bg-danger">No</span>
                        @endif
                    </td>

                    <td>{{ $offer->start_date ?? '-' }}</td>
                    <td>{{ $offer->end_date ?? '-' }}</td>

                    <td>
                        <a href="{{ route('admin.offers.edit', $offer->id) }}" class="btn btn-sm btn-theme-icon">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('admin.offers.destroy', $offer->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this offer?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-theme-icon">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11" class="text-center">No offers found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@foreach($offers as $offer)
@if($offer->image)
<div class="modal fade" id="offerImageModal{{ $offer->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $offer->title }} Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <a href="{{ asset('storage/' . $offer->image) }}" target="_blank">
                    <img src="{{ asset('storage/' . $offer->image) }}" class="img-fluid rounded"
                        style="max-height:350px;object-fit:cover;">
                </a>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection