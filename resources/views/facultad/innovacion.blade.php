@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/estudiantes/e2.jpg"
    titulo="Centro de Innovación Pedagógica"
    subtitulo="Transformando la educación a través de la innovación"
/>

{{-- frase --}}
<section class="py-5 text-center" style="background:#012143; color:white;">
    <div class="container">
        <blockquote class="frase">
            “La educación es un acto de esperanza, y la innovación es la herramienta que nos permite construir un futuro mejor para todos.”
        </blockquote>
        <small class="text-warning">— Patricia Hill Collins</small>
    </div>
</section>

{{-- bien venida ;) --}}
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Bienvenida</h2>
        <p class="text-muted w-75 mx-auto">
            En el Centro de Innovación Pedagógica creemos que la innovación transforma la enseñanza, 
            inspira a nuevas generaciones y construye un futuro más justo, equitativo y sostenible.
        </p>
    </div>
</section>

{{-- proposito--}}
<section class="py-5 bg-light">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Nuestro propósito</h2>
                <p class="text-muted">
                    El Centro de Innovación Pedagógica (CIP) es un espacio dedicado a la mejora continua 
                    de la práctica docente mediante innovación, investigación educativa y tecnologías emergentes.
                </p>
                <p class="text-muted">
                    Apoyamos a los profesores en el desarrollo de metodologías que enriquecen el proceso 
                    de enseñanza-aprendizaje.
                </p>
            </div>

            <div class="col-lg-6">
                <div class="bloque-dorado p-4">
                    <h5 class="fw-bold">Nuestro objetivo</h5>
                    <p class="small">
                        Fortalecer la innovación docente, proporcionando herramientas para enfrentar 
                        los retos de la educación superior en un entorno global.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- mision y vision--}}
<section class="py-5" style="background:#012143;">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-6">
                <div class="glass-card p-4 h-100">
                    <h4 class="fw-bold text-warning">Misión</h4>
                    <p class="text-white small">
                        Impulsar la excelencia educativa mediante innovación pedagógica, formación continua 
                        y tecnologías emergentes, fomentando el pensamiento crítico y el desarrollo sostenible.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="glass-card p-4 h-100">
                    <h4 class="fw-bold text-warning">Visión</h4>
                    <p class="text-white small">
                        Ser referente nacional e internacional en innovación educativa, formando líderes 
                        capaces de transformar la enseñanza y el aprendizaje.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- conoce --}}
<section class="py-5">
    <div class="container text-center">

        <h2 class="fw-bold mb-4">Conoce</h2>

        <p class="text-muted mb-5">
            El Modelo Educativo para la Formación Integral (MEFI) de la UADY impulsa estos esfuerzos, asegurando que la enseñanza sea relevante y de calidad, respondiendo a problemáticas sociales, regionales y globales. En este modelo, el estudiante es el agente central, mientras que el profesorado crea experiencias de aprendizaje significativas.
            Teniendo en cuenta lo señalado, ponemos a tu disposición los siguientes espacios diseñados para contribuir a tu labor docente. Te hacemos una extensa invitación a que los visites y explores todo lo que en ellos se encuentra.
        </p>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card innovacion-card p-4">
                    <h5>Capacitación</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card innovacion-card p-4">
                    <h5>Metodologías activas</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card innovacion-card p-4">
                    <h5>Blog </h5>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- contacto --}}
<section class="py-5 bg-light text-center">
    <div class="container">

        <h2 class="fw-bold mb-3">Contacto</h2>

        <p class="mb-1">cip.fca@correo.uady.mx</p>
        <p>cursos.cip.fca@correo.uady.mx | gestion.cip.fca@correo.uady.mx</p>

        <p class="text-muted mt-3">
            Lunes a viernes de 7:00 a 15:00
        </p>

        <p class="text-muted">
            Facultad de Contaduría y Administración, UADY
        </p>

    </div>
</section>

@endsection