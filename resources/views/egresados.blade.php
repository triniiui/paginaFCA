@extends('layouts.vistas')
@section('vistas-content')

<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-bt">
            Bolsa de Trabajo
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-bt mb-4">
        <img src="{{ asset('assets/img/egresados/e1.jpg') }}" alt="BolsaT" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        @foreach($bolsadetrabajo as $bolsadetrabajo)
            {!!$bolsadetrabajo->contenido !!}
            @endforeach

<div class="container my-5">
    <h3 class="text-primary-uady mb-4">Preguntas Frecuentes</h3>
        </h2>       
        <x-accordion id="faqBT" titulo="Preguntas Frecuentes">
            @foreach($preguntasfrecuentes as $preguntafrecuente)
            {!!$preguntafrecuente->contenido !!}
            @endforeach
        </x-accordion>


 <h2 class="titulo-Eg">
           Examen General de Egreso (EGEL)
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-eg mb-4">
        <img src="{{ asset('assets/img/egresados/e2.jpg') }}" alt="EG" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        @foreach($egel as $egel)
            {!!$egel->contenido !!}
            @endforeach
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection