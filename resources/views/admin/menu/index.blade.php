@extends('admin.layouts.app')

@section('title', 'Menu')

@section('content')
<div class="content-card p-4">
    <h4 class="mb-4">Menu Items</h4>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Available</th>
                </tr>
            </thead>
            <tbody>
                @forelse($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>${{ number_format($menu->price, 2) }}</td>
                    <td>{{ $menu->is_available ? 'Yes' : 'No' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No menu items found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection