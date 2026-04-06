@props([
    'imagen',
    'titulo',
    'subtitulo' => '',
    'altura' => '400px'
])

<div class="position-relative mb-5">
    <img src="{{ asset($imagen) }}" 
         class="w-100" 
         style="height: {{ $altura }}; object-fit: cover;">

    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5);"></div>

    <div style="position:absolute; bottom:20%; left:10%; color:white;">
        <h1 class="fw-bold">{{ $titulo }}</h1>
        @if($subtitulo)
            <p>{{ $subtitulo }}</p>
        @endif
    </div>
</div>