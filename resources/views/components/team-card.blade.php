@props([
    'titulo',
    'nombre',
    'correo',
    'imagen' => null
])

<div class="col-lg-3 col-md-6">
    <div class="team-card h-100 p-3 text-center" style="background-color: #b38b00; border-radius: 8px;">

        <div class="team-avatar">
            @if($imagen)
                <img src="{{ asset($imagen) }}" alt="{{ $nombre }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
            @else
                <i class="bi bi-person-fill" style="font-size: 3rem;"></i>
            @endif
        </div>

        <!-- El texto azul marino (002E5F) combina perfecto con el amarillo UADY -->
        <h5 class="fw-bold mt-3" style="color: white;">
            {{ $titulo }}
        </h5>

        <p class="mb-1 fw-bold medium">
            {{ $nombre }}
        </p>

        <small class="text-muted">
            {{ $correo }}
        </small>

    </div>
</div>