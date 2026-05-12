@extends('layouts.vistas')
@section('vistas-content')

<x-hero 
    imagen="assets/img/docentes/d3.jpg"
    titulo="Docentes"
    subtitulo="Personal Docente de la Facultad de Contaduría y Administración"
/>

{{-- docentes --}}
<div class="container my-5">
    <div class="row align-items-center">


        <div class="col-md-6">
            <h3 class="fw-bold mb-3">Personal Docente</h3>
            <p class="text-muted">
               La Facultad cuenta con 52 maestros de Tiempo Completo, de los cuales 22 (el 42%) cuenta con la certificación de la ANFECA, 26 tienen reconocimiento de Perfil Deseable PRODEP (50%) y 8 (el 15%) están adscritos al Sistema Nacional de Investigadores (SNI), del Conacyt. Complementan nuestra planta docente 4 profesores de Medio Tiempo y 108 de asignatura, todos profesionales altamente calificados, con amplia experiencia laboral y reconocida trayectoria en sus respectivas ramas, que en suma, hacen un total de 164 profesores.
             </p>
        </div>

    </div>
</div>

{{-- TABLA DE PROFESORES 🔥 --}}
<div class="container my-5">

    <h3 class="fw-bold mb-4 text-center">Personal Docente</h3>

    <!-- TIEMPO COMPLETO -->
    <h5 class="fw-bold text-primary mb-3">Profesores de Tiempo Completo</h5>

    <div class="table-responsive mb-4">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre completo</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tiempoCompleto as $p)
                    <tr>
                        <td>{{ $p->apellidos }} {{ $p->nombre }}</td>
                        <td>
                            <a href="mailto:{{ $p->email }}">{{ $p->email }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- MEDIO TIEMPO -->
    <h5 class="fw-bold text-primary mb-3">Profesores de Medio Tiempo</h5>

    <div class="table-responsive mb-4">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre completo</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medioTiempo as $p)
                    <tr>
                        <td>{{ $p->apellidos }} {{ $p->nombre }}</td>
                        <td>
                            <a href="mailto:{{ $p->email }}">{{ $p->email }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- COORDINADOR -->
    <h5 class="fw-bold text-primary mb-3">Coordinador del Programa Institucional de Inglés</h5>

    @if($coordinador)
        <table class="table table-bordered mb-4">
            <tbody>
                <tr>
                    <td>{{ $coordinador->apellidos }} {{ $coordinador->nombre }}</td>
                    <td>
                        <a href="mailto:{{ $coordinador->email }}">{{ $coordinador->email }}</a>
                    </td>
                </tr>
            </tbody>
        </table>
    @endif

    <!-- ASIGNATURA -->
    <h5 class="fw-bold text-primary mb-3">Profesores por Asignatura</h5>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre completo</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                @foreach($asignatura as $p)
                    <tr>
                        <td>{{ $p->apellidos }} {{ $p->nombre }}</td>
                        <td>
                            <a href="mailto:{{ $p->email }}">{{ $p->email }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

{{-- Centro de Innovación Pedagógica --}}
<div class="container my-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h3 class="fw-bold mb-3">Centro de Innovación Pedagógica</h3>
            <p class="text-muted">
                 El Centro de Innovación Pedagógica (CIP) de la Facultad de Contaduría y Administración (FCA) de la Universidad Autónoma de Yucatán (UADY) impulsa la mejora continua de la práctica docente y la calidad educativa. Su propósito es apoyar a los docentes mediante la innovación pedagógica, la investigación educativa y la integración de tecnologías emergentes, fomentando un aprendizaje significativo y pertinente.
                El CIP ofrece recursos y formación continua para desarrollar metodologías innovadoras que fortalezcan las competencias pedagógicas del profesorado, promoviendo una educación crítica y orientada al desarrollo sostenible. Además, apoya la implementación del Modelo Educativo para la Formación Integral (MEFI), colocando al estudiante en el centro del aprendizaje. </p>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('assets/img/docentes/d4.png') }}" 
                 class="img-fluid rounded shadow">
       

    </div>
</div>

{{-- Servicios de la Biblioteca del Campus --}}
<div class="container my-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h3 class="fw-bold mb-3">Servicios de la Biblioteca del Campus</h3>
            <p class="text-muted">
                La Biblioteca del Campus de Ciencias Sociales, Económico-Administrativas y Humanidades, cuenta con un amplio acervo de material bibliográfico de las áreas de Ciencias Sociales: Antropología, Psicología, Educación, Economía, Comercio Internacional, Derecho, Administración, Turismo, Comunicación, Literatura, Enseñanza del Inglés, etc.
                Dicho acervo está conformado por libros, tesis, publicaciones periódicas, folletos, discos compactos, bases de datos, entre otros.</div>

        <div class="col-md-6">
            <img src="{{ asset('assets/img/docentes/d5.jpg') }}" 
                 class="img-fluid rounded shadow">
       

    </div>
</div>

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