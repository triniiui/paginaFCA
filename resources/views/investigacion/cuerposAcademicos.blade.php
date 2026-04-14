@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/investigacion/i2.png"
    titulo="Cuerpos Académicos"
    subtitulo="Poner Subtítulo Correcto"
/>

<div class="container my-5">

    {{-- Texto introductorio --}}
    <div class="mb-4">
        <p>
            La actividad investigadora de la Facultad es realizada por cinco Cuerpos Académicos reconocidos por el PRODEP.  
            Esto significa que el 50% de los PTC de esta Facultad están generando o aplicando conocimientos.
        </p>
    </div>

    {{-- Lista de cuerpos académicos --}}
    <div class="mb-4">
        <h3 class="fw-bold">Cuerpos Académicos</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a href="#" class="text-primary text-decoration-none">
                    Cuerpo Académico Organización y Gestión
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="text-primary text-decoration-none">
                    Cuerpo Académico Economía y Finanzas
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="text-primary text-decoration-none">
                    Cuerpo Académico Creación Asistencia y Análisis de las Organizaciones
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="text-primary text-decoration-none">
                    Cuerpo Académico Área Legal
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="text-primary text-decoration-none">
                    Cuerpo Académico Mercadotecnia, Innovación y Desarrollo
                </a>
            </li>
        </ul>
    </div>

    {{-- Contacto --}}
    <div class="mt-5">
        <h5 class="fw-bold">Contacto:</h5>
        <p>
            <a href="mailto:investigacion.fca@correo.uady.mx" class="text-decoration-none">
                investigacion.fca@correo.uady.mx
            </a>
        </p>
    </div>
</div>




@endsection