@extends('admin.layouts.app')

@section('title', 'Menu Items')

@section('content')
<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Menu Items</h4>

        <a href="{{ route('admin.menu.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add Menu
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image Available</th>
                    <th>Available</th>
                    <th width="120">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>Rs. {{ number_format($menu->price, 2) }}</td>
                    <td>{{ $menu->category ?? '-' }}</td>

                    <td>
                        @if($menu->image)
                        <button type="button" class="btn btn-sm btn-theme-icon" title="View menu image"
                            data-bs-toggle="modal" data-bs-target="#menuImageModal{{ $menu->id }}">
                            <i class="bi bi-eye"></i>
                        </button>
                        @else
                        <span class="text-muted">No image</span>
                        @endif
                    </td>

                    <td>
                        @if($menu->is_available)
                        <span class="badge bg-success">Yes</span>
                        @else
                        <span class="badge bg-danger">No</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-sm btn-theme-icon">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this menu item?')">
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
                    <td colspan="7" class="text-center">No menu items found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@foreach($menus as $menu)
@if($menu->image)
<div class="modal fade" id="menuImageModal{{ $menu->id }}" tabindex="-1"
    aria-labelledby="menuImageModalLabel{{ $menu->id }}" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="menuImageModalLabel{{ $menu->id }}">
                    {{ $menu->name }} Image
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body text-center">
                <a href="{{ asset('storage/' . $menu->image) }}" target="_blank">
                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}"
                        class="img-fluid rounded" style="max-height:350px;object-fit:cover;">
                </a>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection