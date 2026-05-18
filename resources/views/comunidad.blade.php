@extends('layouts.vistas')
@section('vistas-content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-comunidad">
            Boletines del Comité Institucional para la Atención de Fenómenos Meteorológicos Extremos “CIAFEME 
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-comunidad mb-4">
        <img src="{{ asset('assets/img/comunidad/c1.jpg') }}" alt="Biblioteca" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        @foreach($ciafeme as $ciafeme)
            {!!$ciafeme->contenido !!}
        @endforeach

<div class="container my-5">
    <h3 class="text-primary-uady mb-4">Preguntas Frecuentes</h3>
            </h2>
            <x-accordion id="faqBiblioteca" titulo="Preguntas Frecuentes">
                @foreach($preguntasfrecuentes as $preguntafrecuente)
                {!!$preguntafrecuente->contenido !!}
                @endforeach
            </x-accordion>
            </div>
</div>

<div class="text-center mb-4">
        <h2 class="titulo-com">
            Centro Institucional de Lenguas
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="text-center mb-4">
    <div class="banner-evaluacion mb-4">
        <img src="{{ asset('assets/img/comunidad/c2.jpg') }}" alt="ingles" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        @foreach($cil as $cil)
            {!!$cil->contenido !!}
        @endforeach
    </div>
</div> 
       
@endsection