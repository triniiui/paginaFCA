@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/aspirantes/a2.jpg"
    titulo="Aspirantes"
/>

@php
    $contenido = [
        [
            'titulo' => 'Programas de calidad', 
            'descripcion' => 'Reconocidos en el Padrón de Alto Rendimiento Académico del CENEVAL.'
        ],
        [
            'titulo' => 'Excelencia EGEL', 
            'descripcion' => 'Más del 80% de egresados con desempeño satisfactorio o sobresaliente.'
        ],
        [
            'titulo' => 'Reconocimiento nacional', 
            'descripcion' => 'Licenciatura en Administración entre las mejores de México.'
        ],
    ];
@endphp

<x-card titulo="¿Por qué estudiar en FCA?" :beneficios="$contenido">
    <p>
        La Facultad cuenta con 164 profesores altamente calificados, incluyendo docentes con certificaciones ANFECA,
        reconocimiento PRODEP y participación en el Sistema Nacional de Investigadores.
        Nuestros egresados destacan a nivel nacional, obteniendo premios EGEL y participando en competencias académicas
        con excelentes resultados.
        Además, fomentamos la movilidad estudiantil y ofrecemos asignaturas en inglés que fortalecen la formación global.
    </p>

</x-card>

        
</section>

{{--cuadradoooos--}}
    <div class="container text-black">
        <h2 class="fw-bold mb-4 text-center">Nuestros valores</h2>
        <div class="row g-3 text-center">

<div class="container py-5">
    <div class="row g-3 justify-content-center"> 
        
        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="texto" contenido="Respeto" color="azul" />
        </div>

        {{-- 'imagen' --}}
        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="imagen" imagen="assets/img/aspirantes/a4.jpg" />
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="texto" contenido="Empatía" color="dorado" />
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="imagen" imagen="assets/img/aspirantes/a5.jpg" />
        </div>

        <div class="col-6 col-md-4 col-lg-2"> 
            <x-cuadro tipo="texto" contenido="Responsabilidad" color="azul" />
        </div>
        <div> 
    <div class="row g-3 justify-content-center"> 
        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="imagen" imagen="assets/img/aspirantes/a6.jpeg" />
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="texto" contenido="Justicia" color="dorado" />
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="imagen" imagen="assets/img/aspirantes/a7.png" />
        </div>
        <div class="col-6 col-md-4 col-lg-2"> 
            <x-cuadro tipo="texto" contenido="Ética" color="azul" />
                </div>
        <div class="col-6 col-md-4 col-lg-2">
            <x-cuadro tipo="imagen" imagen="assets/img/aspirantes/a8.jpg" />
        </div>
</div>


{{-- LICENCIATURA --}}
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="fw-bold mb-4">Proceso de Ingreso a Licenciatura</h2>

        <p class="text-muted">
            Los procesos de admisión son equitativos y transparentes. Inician con la convocatoria publicada cada año.
        </p>

        <div class="card shadow-sm border-0 p-4 mt-3">
            <h5 class="fw-bold">Sitio oficial</h5>
            <a href="https://ingreso.uady.mx/licenciatura/" target="_blank" 
               class="btn btn-outline-primary mt-2">
                Ir al portal de ingreso
            </a>

            <p class="mt-3 mb-1"><strong>Correo:</strong> staff.seleccion@correo.uady.mx</p>
            <p><strong>Tel:</strong> (999) 930 01 30 Ext. 74148</p>
        </div>

    </div>
</section>

{{-- PROCESO POSGRADO --}}
<section class="py-5">
    <div class="container">

        <h2 class="fw-bold mb-4">Proceso de Ingreso al Posgrado</h2>

        <p class="text-muted">
            Registro mediante el Sistema de Información para el Proceso de Selección (SIPS).
        </p>

        <div class="card shadow-sm border-0 p-4 mt-3">
            <h5 class="fw-bold">Sitio oficial</h5>
            <a href="https://ingreso.uady.mx/posgrado/" target="_blank" 
               class="btn btn-outline-primary mt-2">
                Ir al portal de posgrado
            </a>

            <p class="mt-3 mb-1"><strong>Correo:</strong> posgrados@correo.uady.mx</p>
            <p><strong>Tel:</strong> (999) 930 01 30 Ext. 74115 y 74119</p>
        </div>

    </div>
</section>

@endsection