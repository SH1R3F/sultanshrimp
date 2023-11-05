@foreach (['success'] as $alert)
    @if (session()->has($alert))
        <div class="alert alert-{{ $alert }}" role="alert">
            {{ session($alert) }}
        </div>
    @endif
@endforeach