@extends('admin.layouts.app')

@section('title', 'Booking')

@section('content')
<div class="content-card p-4">
    <h4 class="mb-4">Booking List</h4>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Guests</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->arrival_date }}</td>
                    <td>{{ $booking->departure_date }}</td>
                    <td>{{ $booking->guests }}</td>
                    <td>{{ $booking->created_at }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No bookings found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection