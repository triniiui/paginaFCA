@extends('layouts.vistas')
@section('vistas-content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-aspi">
            Becas
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-asp mb-4">
        <img src="{{ asset('assets/img/aspirantes/b1.jpg') }}" alt="asp" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        <p>
        @foreach($becas as $beca)
        <p>{{ $beca->contenido }}</p>
        @endforeach
        </p>

        <div class="container my-5">
    <h3 class="text-primary-uady mb-4">Información importante</h3>
            </h2>
            <x-accordion id="ps" titulo="Páginas sugeridas">
                <p class="fw-bold mb-1"> </p>
                @foreach($paginas as $pagina)
                    <p>{!! $pagina->contenido !!}</p>
                @endforeach
            </x-accordion>
             <x-accordion id="pf" titulo="Preguntas frecuentes">
                @foreach($preguntas as $pregunta)
                    <p>{!! $pregunta->contenido !!}</p>
                @endforeach
            </x-accordion>
    </div>
</div> 
@endsection