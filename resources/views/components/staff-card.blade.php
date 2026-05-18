<div class="col-md-3">
    <div class="card staff-card p-3 text-center">

        <img src="{{ asset($imagen) }}"
        class="rounded-circle mx-auto mb-3 director-img"
        width="120"
        height="120">

        <h6 class="fw-bold">{{ $nombre }}</h6>

        <p class="small text-muted mb-1">
            {{ $profesion }}
        </p>

        <span class="small text-muted mb-1">
            {{ $puesto }}
        </span>

        <p class="small">
            <a href="mailto:{{ $correo }}">
                {{ $correo }}
            </a>
        </p>

    </div>
</div>