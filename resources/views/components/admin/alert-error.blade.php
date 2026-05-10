<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-circle me-2"></i>
    <strong>Error:</strong>
    @if (is_array(session('error')))
        <ul class="mb-0 mt-2">
            @foreach (session('error') as $err)
            <li>{{ $err }}</li>
            @endforeach
        </ul>
    @else
        {{ session('error') }}
    @endif
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
