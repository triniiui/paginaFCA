@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/ofeduCo/o1.png"
    titulo="Educación Continua"
    subtitulo="Actualízate, crece y evoluciona profesionalmente"
/>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Oferta de Educación Continua</h2>
                <p class="text-muted">
                    La Facultad de Contaduría y Administración ofrece una amplia variedad de programas 
                    diseñados para mantener a nuestros egresados actualizados en áreas clave como 
                    administración, fiscal, mercadotecnia, contabilidad, liderazgo e inteligencia emocional.
                </p>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/ofeduCo/o2.jpg') }}" 
                     class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

{{-- cat --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-5">Nuestra oferta académica</h3>

        <div class="row g-4 text-center">

            <div class="col-md-4">
                <div class="p-4 shadow rounded h-100 hover-card">
                    <i class="bi bi-journal-text display-5 text-primary-uady"></i>
                    <h5 class="mt-3 fw-bold">Cursos y Talleres</h5>
                    <p class="text-muted">Habilidades específicas de aplicación inmediata.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow rounded h-100 hover-card">
                    <i class="bi bi-mortarboard display-5 text-warning"></i>
                    <h5 class="mt-3 fw-bold">Diplomados</h5>
                    <p class="text-muted">Formación integral en áreas clave del conocimiento.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow rounded h-100 hover-card">
                    <i class="bi bi-award display-5 text-primary-uady"></i>
                    <h5 class="mt-3 fw-bold">Certificaciones</h5>
                    <p class="text-muted">Reconocidas por el sector laboral.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- programas --}}
<section class="py-5 bg-uady-blue text-white text-center">
    <div class="container">
        <h3 class="fw-bold">Programas completos</h3>
        <p>
            Cada programa incluye modalidad, duración, fechas, costos y requisitos, 
            así como acceso directo a inscripción o contacto.
        </p>
    </div>
</section>

{{-- cap emp --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold mb-8">Capacitación para empresas</h3>

        <div class="row align-items-center">
            <div class="col-md-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Profesores especializados</li>
                    <li class="list-group-item"> Temas actualizados</li>
                    <li class="list-group-item"> Programas con valor curricular</li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- cursos --}}
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-5">Cursos más solicitados</h3>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="card shadow-sm border-0 hover-card">
                    <img src="{{ asset('assets/img/ofeduCo/o4.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="fw-bold">Contabilidad básica</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 hover-card">
                    <img src="{{ asset('assets/img/ofeduCo/o5.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="fw-bold">Marketing digital</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 hover-card">
                    <img src="{{ asset('assets/img/ofeduCo/o6.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="fw-bold">Finanzas personales</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 hover-card">
                    <img src="{{ asset('assets/img/ofeduCo/o4.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="fw-bold">Liderazgo</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- faq --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold mb-4">Preguntas frecuentes</h3>

        <x-accordion id="faq1" titulo="¿Los diplomados tienen valor curricular?">
            Sí, todos nuestros programas cuentan con respaldo institucional.
        </x-accordion>

        <x-accordion id="faq2" titulo="¿Cuál es el proceso de inscripción?">
            Puedes registrarte en línea o contactar directamente a la facultad.
        </x-accordion>

        <x-accordion id="faq3" titulo="¿Cuáles son las formas de pago?">
            Transferencia, depósito o pago en ventanilla.
        </x-accordion>

        <x-accordion id="faq4" titulo="¿Puedo obtener descuentos?">
            Sí, existen beneficios para egresados y convenios.
        </x-accordion>

    </div>
</section>

@endsection

<style>
.hover-card {
    transition: all 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
</style>