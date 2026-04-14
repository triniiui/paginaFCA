@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/investigacion/i1.png"
    titulo="Coordinación de Investigación"
    subtitulo="Poner Subtítulo Correcto"
/>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Coordinación de Investigación</h3>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <p>
                La Coordinación de Investigación depende de la Unidad de Posgrado e Investigación de la Facultad.
            </p>
            <p>
                Su objetivo principal es coordinar la actividad investigadora que realizan los profesores, en torno a la línea de investigación general de la Facultad, procurando que los esfuerzos realizados contribuyan al avance de las disciplinas de la contaduría, las finanzas, el ámbito legal-fiscal, la mercadotecnia, las disciplinas relacionadas con la administración y las innovaciones tecnológicas aplicadas a empresas, siempre con pertinencia social y apuntando al logro de los <strong>Objetivos de Desarrollo Sostenible (ODS)</strong> de la Organización de las Naciones Unidas.
            </p>
            <p>
                Adicionalmente, promueve la habilitación de los profesores de tiempo completo de la Facultad para desarrollar proyectos de investigación de alta calidad.
            </p>

            <div class="alert alert-info mt-3">
                La actividad investigadora de la Facultad es realizada por cuatro cuerpos académicos reconocidos por el PRODED (39% de los PTC) y un grupo de investigación (14% de los PTC), lo que significa que más del 50% de los PTC están generando o aplicando conocimientos.
            </div>

            <h5 class="fw-bold mt-4">Cuerpos Académicos</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" target="_blank">Cuerpo Académico Organización y Gestión</a></li>
                <li class="list-group-item"><a href="#" target="_blank">Cuerpo Académico Economía y Finanzas</a></li>
                <li class="list-group-item"><a href="#" target="_blank">Cuerpo Académico Creación Asistencia y Análisis de las Organizaciones</a></li>
                <li class="list-group-item"><a href="#" target="_blank">Cuerpo Académico Área Legal</a></li>
                <li class="list-group-item"><a href="#" target="_blank">Cuerpo Académico Mercadotecnia, Innovación y Desarrollo</a></li>
            </ul>
        </div>
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Registro de Proyectos en el Sistema de Proyectos (SISTPROY) de la UADY</h3>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="d-grid gap-3">
                <a href="#" class="btn btn-outline-primary">Políticas Proyectos de Investigación 2025</a>
                <a href="#" class="btn btn-outline-primary">Enlaces a formatos SISTPROY 2026</a>
                <a href="#" class="btn btn-outline-primary">Guías SISTPROY 2026</a>
                <a href="#" class="btn btn-outline-primary">Formato de Registro de Proyectos</a>
                <a href="#" class="btn btn-outline-primary">Competencias Genéricas UADY</a>
            </div>
        </div>
    </div>

    <h3 class="fw-bold text-center mb-4">Otros documentos de interés</h3>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="d-grid gap-3">
                <a href="#" class="btn btn-outline-secondary">Circular INV-01-2023 Techo Financiero para el Fortalecimiento de los CA</a>
                <a href="#" class="btn btn-outline-secondary">Circular INV-02-2020 Reconocimiento de REDES</a>
                <a href="#" class="btn btn-outline-secondary">Circular INV-02-2023 Línea de Generación y Aplicación del Conocimiento de la FCA</a>
                <a href="#" class="btn btn-outline-secondary">Circular INV-03-2020 Reconocimiento de Productos de Investigación NO registrados en SISTPROY</a>
                <a href="#" class="btn btn-outline-secondary">Políticas y Procedimientos para la Aprobación, Evaluación, Registro y Desarrollo de Proyectos de Investigación y/o Vinculación de la FCA</a>
            </div>
        </div>
    </div>

</div>

<div class="container my-5">

    <div class="card shadow-sm">
        <div class="card-body d-flex justify-content-center align-items-center">
            <img src="images/contacto_guillermina.jpg" alt="Dra. Laura Guillermina Duarte Cáceres" 
                 class="rounded-circle me-3" style="width:90px; height:90px;">
            <div class="text-center">
                <h5 class="fw-bold mb-1">Contacto</h5>
                <p class="mb-0">Dra. Laura Guillermina Duarte Cáceres<br>Coordinadora</p>
                <p class="mb-0">
                    <a href="mailto:guillermina.duarte@correo.uady.mx">guillermina.duarte@correo.uady.mx</a>
                </p>
            </div>
        </div>
    </div>

</div>

@endsection