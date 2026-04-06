@extends('layouts.app')

@section('content')

@php
    $fotosFacultad = [
        ['url' => 'assets/img/carousel/c3.jpg', 'titulo' => 'Bienvenidos a la Facultad', 'alt' => 'Edificio principal'],
        ['url' => 'assets/img/carousel/c1.jpg', 'titulo' => 'Inscripciones Abiertas', 'subtitulo' => 'Ciclo Escolar 2026', 'alt' => 'Estudiantes'], 
        ['url' => 'assets/img/carousel/c2.jpg', 'titulo' => 'Orgullo Jaguar', 'alt' => 'Mascota'],
    ];
@endphp

{{--  CAROUSEL --}}
<div class="w-100 mb-5">
    <x-carousel id="mainHomeCarousel" :imagenes="$fotosFacultad" />
</div>

{{-- botón comunidad --}}
<section class="py-5 text-white text-center" style="background:#012143;">
    <div class="container">
        <h2 class="fw-bold">Forma parte de nuestra comunidad</h2>
        <p>Inscripciones abiertas 2026</p>
        <a href="{{ url('/estudiantes') }}" class="btn btn-warning fw-bold px-4 py-2">
            Solicita información
        </a>
    </div>
</section>

{{-- oferta académica :)  --}}
@php
$oferta = [
    ['titulo' => 'Maestrías', 'imagen' => 'assets/img/oferta/m1.jpg', 'link' => '/aspirantes'],
    ['titulo' => 'Doctorados', 'imagen' => 'assets/img/oferta/m2.jpg', 'link' => '/egresados'],
    ['titulo' => 'Educación continua', 'imagen' => 'assets/img/oferta/m3.jpg', 'link' => '/egresados'],
    ['titulo' => 'Licenciaturas', 'imagen' => 'assets/img/oferta/m4.jpg', 'link' => '/estudiantes'],
];
@endphp

<x-oferta-academica :items="$oferta" />

{{-- NOTICIAS --}}
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold mb-4 border-start border-4 ps-3" style="border-color:#b58d1b;">
            Noticias
        </h3>

        <div class="row g-4">
            @foreach($noticias as $noticia)
                <x-noticia-card 
                    :titulo="$noticia->titulo"
                    :imagen="$noticia->imagen"
                    :resumen="$noticia->resumen"
                />
            @endforeach
        </div>
    </div>
</section>

{{-- AGENDA --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold mb-4 border-start border-4 ps-3" style="border-color:#b58d1b;">
            Agenda Universitaria
        </h3>

        <div class="row g-4">
            @foreach($agenda as $item)
                <x-noticia-card 
                    :titulo="$item->titulo"
                    :imagen="$item->imagen"
                    :resumen="$item->resumen"
                />
            @endforeach
        </div>

        {{-- Medios digitales --}}
        <div class="mt-5">
            <x-medios-digitales />
        </div>
    </div>
</section>

{{-- Facebook SDK --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0"></script>


@endsection