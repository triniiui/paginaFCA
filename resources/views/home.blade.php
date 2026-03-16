@extends('layouts.app')
@section('content')

    {{-- 1. Hero Component --}}
    <x-hero 
        imagen="assets/img/h1.jpg" 
        titulo="Bienvenidos a la Facultad de Contaduría y Administración" 
    />

    <div class="container mt-5">
        <h3 class="text-primary mb-4" style="border-left: 5px solid #b58d1b; padding-left: 15px;">
            Noticias
        </h3>

        <div class="row">
            {{-- 2. Componentes de Noticias --}}
            <x-noticia-card 
                titulo="Entre Raíces y Caminos del Mayab"
                imagen="assets/img/noticias/not1.jpg"
                resumen="Descripción detallada de la exposición cultural realizada en la explanada de nuestra facultad..."
            />

            <x-noticia-card 
                titulo="Inicia el programa de inducción"
                imagen="assets/img/noticias/not2.jpg"
                resumen="Damos la bienvenida a los nuevos jaguares que se integran a la licenciatura este semestre."
            />

            <x-noticia-card 
                titulo="Clausuran Talleres Artísticos"
                imagen="assets/img/noticias/not3.jpg"
                resumen="Se presentaron los resultados de los talleres de pintura, danza y música del ciclo escolar."
            />

            <x-noticia-card 
                titulo="Noche de Orgullo en FCA"
                imagen="assets/img/noticias/not4.jpg"
                resumen="Evento de gala para reconocer la excelencia académica y deportiva de nuestros estudiantes."
            />
        </div>
    </div>
    <!-- Siguiente sección -->
    <div class="container mt-5">
        <h3 class="text-primary mb-4" style="border-left: 5px solid #b58d1b; padding-left: 15px;">
            Agenda Universitaria
        </h3>

        <div class="row">
            <x-noticia-card 
                titulo="Curso IA EN POWER BI"
                imagen="assets/img/adu/a1.png"
                resumen="Descripción detallada de la exposición cultural realizada en la explanada de nuestra facultad..."
            />

            <x-noticia-card 
                titulo="Curso HERRAMIENTAS DE IA PARA LOS NEGOCIOS"
                imagen="assets/img/adu/a2.jpg"
                resumen="Damos la bienvenida a los nuevos jaguares que se integran a la licenciatura este semestre."
            />

            <x-noticia-card 
                titulo="Taller DECLARACIÓN ANUAL PARA PERSONAS FÍSICAS"
                imagen="assets/img/adu/a3.jpg"
                resumen="Se presentaron los resultados de los talleres de pintura, danza y música del ciclo escolar."
            />

            <x-noticia-card 
                titulo="DIPLOMADO EN DIRECCIÓN DE NEGOCIOS"
                imagen="assets/img/adu/a4.jpg"
                resumen="Evento de gala para reconocer la excelencia académica y deportiva de nuestros estudiantes."
            />
        
            {{-- Nueva sección de Medios Digitales --}}
    <x-medios-digitales />

        </div>
    </div>
@endsection
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0"></script>

