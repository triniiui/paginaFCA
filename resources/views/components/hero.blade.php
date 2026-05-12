@props([
    'imagen',
    'titulo',
    'subtitulo' => '',
    'altura' => '500px'
])

@php
    $extension = pathinfo($imagen, PATHINFO_EXTENSION);
    $esVideo = in_array($extension, ['mp4', 'webm', 'ogg']);
@endphp

<div class="position-relative mb-5" style="height: {{ $altura }}; overflow: hidden;">
    
    @if($esVideo)
        <video autoplay muted loop playsinline class="w-100" 
               style="height: {{ $altura }}; object-fit: cover;">
            <source src="{{ asset($imagen) }}" type="video/{{ $extension }}">
        </video>
    @else
        <img src="{{ asset($imagen) }}" 
             class="w-100" 
             style="height: {{ $altura }}; object-fit: cover;">
    @endif

    <div style="position:absolute; inset:0; background:rgba(0,0,0,.8);"></div>

    {{-- Texto --}}
    <div style="position:absolute; bottom:20%; left:10%; color:white; z-index: 2;">
        <h1 class="fw-bold">{{ $titulo }}</h1>
        @if($subtitulo)
            <p>{{ $subtitulo }}</p>
        @endif
    </div>
</div>