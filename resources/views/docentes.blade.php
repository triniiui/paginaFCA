@extends('layouts.vistas')
@section('vistas-content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-biblioteca">
            Coordinación General del Sistema Bibliotecario 
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-biblioteca mb-4">
        <img src="{{ asset('assets/img/docentes/d1.jpg') }}" alt="Biblioteca" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        @foreach($cgsb as $cgsb)
        {!!$cgsb->contenido !!}
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
    <div class="contacto-responsable mt-5">
        <p class="mb-1"><strong>Responsable:</strong> Ligia Ancona Martínez</p>
        <p class="mb-1"><strong>E-mail de contacto:</strong> <a href="mailto:amarti@correo.uady.mx" class="link-uady">amarti@correo.uady.mx</a></p>
        <p class="mb-1"><strong>Departamento:</strong> Coordinación General del Sistema Bibliotecario</p>
        <p class="mb-1"><strong>Domicilio:</strong> Avenida Itzáes, calle 59 y 59 A, Biblioteca del Campus de Salud</p>
        <p class="mb-0"><strong>Teléfono:</strong> (999) 923 03 49 y (999) 928 20 44</p> <br><br>
    </div>
</div>

<div class="text-center mb-4">
        <h2 class="titulo-biblioteca">
            Programa Institucional de Evaluación Docente
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="text-center mb-4">
    <div class="banner-evaluacion mb-4">
        <img src="{{ asset('assets/img/docentes/d2.jpg') }}" alt="Evaluación" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
            @foreach($pied as $pied)
            {!!$pied->contenido !!}
            @endforeach
    </div>
</div> 
        <div class="text-center mb-4">
        <div class="banner-bienvenidos mb-4">
        <img src="{{ asset('assets/img/docentes/d3.jpeg') }}" alt="Bienvenidos" class="img-fluid">
        </div>
@endsection