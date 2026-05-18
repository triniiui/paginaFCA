@props([
    'nombre',
    'correo',
    'imagen' => 'assets/img/investigacion/i1.png'
])

<div class="col-md-6 text-center">
    <img src="{{ asset($imagen) }}" 
         class="rounded-circle mb-2" 
         width="100"
         alt="{{ $nombre }}">

    <p class="mb-1 fw-bold">
        {{ $nombre }}
    </p>

    <a href="mailto:{{ $correo }}">
        {{ $correo }}
    </a>
</div>