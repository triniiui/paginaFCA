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
        <p>
            En la página web <a href="http://www.bibliotecas.uady.mx/" target="_blank">http://www.bibliotecas.uady.mx/</a> 
            se puede encontrar la información de cada una de las Bibliotecas que integran el Sistema Bibliotecario, 
            así como sus avisos, noticias y acceso a sus redes sociales. Además, se puede acceder al catálogo en línea 
            y a los recursos electrónicos con los que cuentan las bibliotecas.
        </p>

<div class="container my-5">
    <h3 class="text-primary-uady mb-4">Preguntas Frecuentes</h3>
            </h2>
            <x-accordion id="faqBiblioteca" titulo="Preguntas Frecuentes">
    <p class="fw-bold mb-1">¿Cómo consulto la Pág Web?</p>
    <p>Ingresar a <a href="http://www.bibliotecas.uady.mx/" target="_blank" class="link-uady">http://www.bibliotecas.uady.mx/</a></p>
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
        <p>
            El objetivo del programa es generar evidencias para promover la mejora en el desempeño docente de la UADY.
            Los participantes son profesores y estudiantes de programas educativos de bachillerato, licenciatura y posgrado.
            La evaluación se opera a través del Sistema Institucional de Evaluación (SIDE), el cual se encuentra vinculado al Sistema de Información y Control Escolar institucional (SICEI).
        </p>
    </div>
</div> 
        <div class="text-center mb-4">
        <div class="banner-bienvenidos mb-4">
        <img src="{{ asset('assets/img/docentes/d3.jpeg') }}" alt="Bienvenidos" class="img-fluid">
        </div>
@endsection