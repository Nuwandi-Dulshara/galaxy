@extends('admin.layouts.app')

@section('title', 'Profile')

@section('content')
<div class="content-card p-4">
    <h4 class="mb-4">Admin Profile</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('admin.profile.update') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{ old('username', auth()->user()->username) }}">
        </div>

        <div class="mb-4">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', auth()->user()->email) }}">
        </div>

        <button class="btn btn-theme">Update Profile</button>
    </form>
</div>
@endsection