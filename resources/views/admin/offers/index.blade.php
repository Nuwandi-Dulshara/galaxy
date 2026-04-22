@extends('admin.layouts.app')

@section('title', 'Offers')

@section('content')
<div class="content-card p-4">
    <h4 class="mb-4">Offers List</h4>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Discount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($offers as $offer)
                <tr>
                    <td>{{ $offer->id }}</td>
                    <td>{{ $offer->title }}</td>
                    <td>{{ $offer->discount_percent }}%</td>
                    <td>{{ $offer->is_active ? 'Active' : 'Inactive' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No offers found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection