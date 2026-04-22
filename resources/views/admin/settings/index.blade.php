@extends('admin.layouts.app')

@section('title', 'Settings')

@section('content')
<div class="content-card p-4">
    <h4 class="mb-4">Settings</h4>

    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Hotel Name</label>
            <input type="text" class="form-control" name="hotel_name" value="Galaxy Hotel">
        </div>

        <div class="mb-3">
            <label class="form-label">Support Email</label>
            <input type="email" class="form-control" name="support_email" value="support@galaxyhotel.com">
        </div>

        <div class="mb-4">
            <label class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="contact_number" value="+94 77 123 4567">
        </div>

        <button class="btn btn-theme">Save Settings</button>
    </form>
</div>
@endsection