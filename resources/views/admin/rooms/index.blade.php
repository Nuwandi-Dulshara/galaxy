@extends('admin.layouts.app')

@section('title', 'Rooms')

@section('content')
<div class="content-card p-4">
    <h4 class="mb-4">Rooms List</h4>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room</th>
                    <th>Price</th>
                    <th>Capacity</th>
                    <th>Featured</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->name }}</td>
                    <td>${{ number_format($room->price, 2) }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>{{ $room->is_featured ? 'Yes' : 'No' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No rooms found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection