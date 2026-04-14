@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/investigacion/i3.png"
    titulo="Indicadores Económicos del Estado de Yucatán"
    subtitulo="Poner Subtítulo Correcto"
/>

<div class="container mt-5 mb-5">

    <!-- PRESENTACIÓN -->
    <section class="mb-5">
        <h5 class="fw-bold">Presentación</h5>
        <hr>
        <p>
            El boletín Indicadores Económicos del Estado de Yucatán es una publicación del Cuerpo Académico de Economía 
            y Finanzas (UADY-CA-12), que presenta una selección de datos económicos de Yucatán, que son recopilados de 
            fuentes oficiales y analizados por los profesores que integran dicho Cuerpo Académico. El análisis de los datos
            se complementa con otro tipo de reportes, para proporcionar una fuente de información que sea útil a inversionistas,
            empresarios, académicos, estudiantes, así como al público en general, en los diferentes ámbitos de su ejercicio 
            profesional y académico.
        </p>
    </section>

    <!-- EDICIÓN MÁS RECIENTE -->
    <section class="mb-5">
        <div class="row align-items-center">

            <!-- IMAGEN -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/img/ejemplo.png') }}" 
                     class="img-fluid shadow">
            </div>

            <!-- INFO -->
            <div class="col-md-8">
                <p><strong>Número más reciente:</strong></p>
                <p class="mb-1">
                    <a href="#">Indicadores Económicos del Estado de Yucatán</a>
                </p>
                <p class="mb-1">Año XII Volumen 3</p>
                <p class="mb-1">MARZO DE 2026</p>
                <p>Cifras a febrero de 2026</p>
            </div>

        </div>
    </section>

    <hr>

    <!-- EDICIONES ANTERIORES -->
    <section class="mb-5">
        <p class="fw-bold">Ediciones anteriores:</p>

        <!-- AÑO -->
        <div class="text-center mb-4">
            <small class="text-muted">AÑO 2026</small>
        </div>

        <div class="row text-center mb-4">

            <!-- ITEM -->
            <div class="col-6 col-md-2 mb-4">
                <img src="{{ asset('assets/img/ejemplo.png') }}" class="img-fluid shadow-sm mb-2">
                <div><a href="#">ENERO</a></div>
            </div>

            <div class="col-6 col-md-2 mb-4">
                <img src="{{ asset('assets/img/ejemplo.png') }}" class="img-fluid shadow-sm mb-2">
                <div><a href="#">FEBRERO</a></div>
            </div>

        </div>

        <!-- AÑO -->
        <div class="text-center mb-4">
            <small class="text-muted">AÑO 2025</small>
        </div>

        <!-- GENERA VARIOS -->
        <div class="row text-center">
            @for ($i = 1; $i <= 12; $i++)
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('assets/img/indicadores/2025-' . $i . '.png') }}" class="img-fluid shadow-sm mb-2">
                    <div><a href="#">MES {{ $i }}</a></div>
                </div>
            @endfor
        </div>
    </section>

    <!-- BOTÓN -->
    <section class="mb-5">
        <div class="bg-primary text-center py-3 rounded">
            <a href="#" class="btn btn-light">
                Descargar edición más reciente
            </a>
        </div>
    </section>

    <!-- CONTACTO -->
    <section class="mb-5">
        <p class="fw-bold">Contacto:</p>

        <div class="row">

            <!-- PERSONA 1 -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/img/investigacion/i1.png') }}" 
                     class="rounded-circle mb-2" width="100">

                <p class="mb-1 fw-bold">
                    Dra. Laura Guillermina Duarte Cáceres
                </p>
                <a href="#">
                    guillermina.duarte@correo.uady.mx
                </a>
            </div>

            <!-- PERSONA 2 -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/img/investigacion/i1.png') }}" 
                     class="rounded-circle mb-2" width="100">

                <p class="mb-1 fw-bold">
                    Dr. Lucio jesús Uc Heredia
                </p>
                <a href="#">
                    lucio.uc@correo.uady.mx
                </a>
            </div>

        </div>
    </section>

</div>

@endsection