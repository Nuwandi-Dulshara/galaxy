@extends('admin.layouts.app')

@section('title', 'Rooms')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Rooms List</h4>

        <a href="{{ route('admin.rooms.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add Room
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Room Size</th>
                    <th>Capacity</th>
                    <th>View</th>
                    <th>Bed Type</th>
                    <th>Images</th>
                    <th width="120">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($rooms as $room)
                @php
                $roomImages = collect($room->images ?: [])
                ->when($room->image, fn($images) => $images->prepend($room->image))
                ->unique()
                ->values();
                @endphp

                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->name }}</td>
                    <td>Rs. {{ number_format($room->price, 2) }}</td>
                    <td style="min-width:220px;">{{ Str::limit($room->description, 80) }}</td>
                    <td>{{ $room->room_size }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>{{ $room->view }}</td>
                    <td>{{ $room->bed_type }}</td>

                    <td>
                        @if($roomImages->isNotEmpty())
                        <button type="button" class="btn btn-sm btn-theme-icon" title="View room images"
                            data-bs-toggle="modal" data-bs-target="#roomImagesModal{{ $room->id }}">
                            <i class="bi bi-eye"></i>
                        </button>
                        @else
                        <span class="text-muted">No image</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.rooms.edit', $room->id) }}" class="btn btn-sm btn-theme-icon">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('admin.rooms.destroy', $room->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this room?')">
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
                    <td colspan="10" class="text-center">No rooms found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="content-card p-4 mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Room Availability</h4>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Room Name</th>
                    <th>Availability</th>
                    <th>Booking Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse($rooms as $room)
                @php
                $fromDate = $room->unavailable_from;
                $toDate = $room->unavailable_to;
                $fromLabel = $fromDate ? ($fromDate->isToday() ? 'Today' : $fromDate->format('F j')) : null;
                $toLabel = $toDate ? ($toDate->isToday() ? 'Today' : $toDate->format('F j')) : null;
                @endphp

                <tr>
                    <td>{{ $room->name }}</td>
                    <td>
                        @if($room->is_available)
                        <span class="badge text-bg-success">Available</span>
                        @else
                        <span class="badge text-bg-danger">Not Available</span>
                        @endif
                    </td>
                    <td>
                        @if($room->is_available)
                        <span class="badge text-bg-success">You can book</span>
                        @elseif($fromLabel && $toLabel)
                        {{ $fromLabel }} - {{ $toLabel }}
                        @else
                        <span class="text-muted">Dates not set</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No rooms found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@foreach($rooms as $room)
@php
$roomImages = collect($room->images ?: [])
->when($room->image, fn($images) => $images->prepend($room->image))
->unique()
->values();
@endphp

@if($roomImages->isNotEmpty())
<div class="modal fade" id="roomImagesModal{{ $room->id }}" tabindex="-1"
    aria-labelledby="roomImagesModalLabel{{ $room->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roomImagesModalLabel{{ $room->id }}">
                    {{ $room->name }} Images
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row g-3">
                    @foreach($roomImages as $image)
                    <div class="col-md-4 col-sm-6">
                        <a href="{{ asset('storage/' . $image) }}" target="_blank">
                            <img src="{{ asset('storage/' . $image) }}" alt="{{ $room->name }}"
                                class="img-fluid rounded" style="width:100%;height:180px;object-fit:cover;">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection
