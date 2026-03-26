@extends('layouts.app')
@section('content')

@php
    $fotosFacultad = [
    ['url' => 'assets/img/carousel/c3.jpg', 'titulo' => 'Bienvenidos a la Facultad', 'alt' => 'Edificio principal'],
    ['url' => 'assets/img/carousel/c1.jpg', 'titulo' => 'Inscripciones Abiertas', 'subtitulo' => 'Ciclo Escolar 2026', 'alt' => 'Estudiantes'], 
    ['url' => 'assets/img/carousel/c2.jpg', 'titulo' => 'Orgullo Jaguar', 'alt' => 'Mascota'],
];
@endphp
<div class="w-100">
    <x-carousel id="mainHomeCarousel" :imagenes="$fotosFacultad" />
</div>


    {{-- 1. Hero Component 
    <x-hero 
        imagen="assets/img/h1.jpg" 
        titulo="Bienvenidos a la Facultad de Contaduría y Administración" 
    />
    --}}

    <div class="container mt-5">
        <h3 class="text-primary mb-4" style="border-left: 5px solid #b58d1b; padding-left: 15px;">
            Noticias
        </h3>

        <div class="row">
            @foreach($noticias as $noticia)
            <x-noticia-card 
                :titulo="$noticia->titulo"
                :imagen="$noticia->imagen"
                :resumen="$noticia->resumen"
            />
            @endforeach
        </div>
    </div>
    <!-- Siguiente sección -->
    <div class="container mt-5">
        <h3 class="text-primary mb-4" style="border-left: 5px solid #b58d1b; padding-left: 15px;">
            Agenda Universitaria
        </h3>

        <div class="row">
            @foreach($agenda as $item)
                <x-noticia-card 
                    :titulo="$item->titulo"
                    :imagen="$item->imagen"
                    :resumen="$item->resumen"
                />
            @endforeach

            {{-- Nueva sección de Medios Digitales --}}
    <x-medios-digitales />

        </div>
    </div>

<div id="fb-root">
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0"></script> </div>
@endsection
