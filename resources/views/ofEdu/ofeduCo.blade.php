@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/ofeduCo/o1.jpg"
    titulo="Educación Continua"
    subtitulo="Actualízate, crece y evoluciona profesionalmente"
/>

<section class="py-5 seccion-azul-suave">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 id="oferta-educacion-continua" class="fw-bold mb-3" style="color: #002E5F;">Oferta de Educación Continua</h2>
                <p class="text-muted">
                    La Facultad de Contaduría y Administración ofrece una amplia variedad de programas 
                    diseñados para mantener a nuestros egresados actualizados en áreas clave como 
                    administración, fiscal, mercadotecnia, contabilidad, liderazgo e inteligencia emocional.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/ofeduCo/o1.png') }}" 
                     class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>
{{-- OFERTA ACADÉMICA MODERNA --}}
<section class="py-5 seccion-blanca overflow-hidden">

    <div class="container">
<div class="card-body text-center">
            <h2 class="fw-bold display-6 text-center" style="color:#002E5F;">
                Nuestra oferta académica
            </h2>

            <p class="text-muted mx-auto" style="max-width: 700px;">
                Programas diseñados para fortalecer habilidades profesionales,
                impulsar el crecimiento laboral y responder a las necesidades
                actuales del mercado.
            </p>
        </div>
    <div class="row g-4">

            {{-- CARD 1 --}}
            <div class="col-lg-4">
                <div class="modern-card h-100">
                    <div class="icon-circle bg-primary-subtle">
                        <i class="bi bi-journal-text"></i>
                    </div>
                    <h4 class="fw-bold mt-4">
                        Cursos y Talleres
                    </h4>
                    <p class="text-muted">
                        Capacitación práctica y especializada enfocada en
                        habilidades de aplicación inmediata.
                    </p>
                    <div class="mini-line"></div>
                    <small class="text-info-emphasis fw-semibold">
                        Modalidad flexible
                    </small>
                </div>
            </div>

            {{-- CARD 2 --}}
            <div class="col-lg-4">
                <div class="modern-card h-100">
                    <div class="icon-circle bg-primary-subtle">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h4 class="fw-bold mt-4">
                        Diplomados
                    </h4>
                    <p class="text-muted">
                        Formación integral con contenido actualizado en áreas
                        estratégicas del entorno empresarial.
                    </p>
                    <div class="mini-line"></div>
                    <small class="text-info-emphasis fw-semibold">
                        Valor curricular
                    </small>
                </div>
            </div>

            {{-- CARD 3 --}}
            <div class="col-lg-4">
                <div class="modern-card h-100">
                    <div class="icon-circle bg-primary-subtle">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="fw-bold mt-4">
                        Certificaciones
                    </h4>
                    <p class="text-muted">
                        Programas respaldados por estándares profesionales y
                        orientados al sector laboral.
                    </p>
                    <div class="mini-line"></div>
                    <small class="text-info-emphasis fw-semibold">
                        Reconocimiento profesional
                    </small>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- PROGRAMAS --}}
<section class="py-5 position-relative overflow-hidden seccion-azul">
    <div class="blur-circle blur-1"></div>
    <div class="blur-circle blur-2"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7 text-white">
                <h2 class="fw-bold display-6 mb-4">
                    Programas completos y actualizados
                </h2>
                <p class="lead opacity-75">
                    Cada programa incluye modalidad, duración, fechas,
                    costos y requisitos, además de acceso directo
                    a inscripción y contacto institucional.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="glass-card">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <h3 class="fw-bold mb-0">+40</h3>
                            <small>Programas</small>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0">100%</h3>
                            <small>Actualizados</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="fw-bold mb-0">Flexible</h3>
                            <small>Modalidad</small>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0">UADY</h3>
                            <small>Respaldo</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CAPACITACIÓN --}}
<section class="py-5 seccion-azul-suave">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4" style="color:#002E5F;">
                    Capacitación para organizaciones
                </h2>
                <p class="text-muted">
                    Diseñamos programas especializados para empresas e
                    instituciones que buscan fortalecer las competencias
                    de sus equipos de trabajo.
                </p>
                <div class="mt-4">
                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Profesores especializados
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Contenido actualizado
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Programas con valor curricular
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="empresa-card shadow-lg">
                    <img src="{{ asset('assets/img/ofeduCo/o2.jpg') }}"
                         class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- cursos --}}
<section class="py-5 seccion-blanca">
    <div class="container">
        <h3 id="cursos-mas-solicitados" class="fw-bold text-center mb-5" style="color: #002E5F;">Cursos más solicitados</h3>

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
<section class="py-5 seccion-gris">
    <div class="container">
        <h3 class="fw-bold mb-4" style="color: #002E5F;">Preguntas frecuentes</h3>

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













<style>
.hover-card {
    transition: all 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.seccion-blanca{
    background-color: #ffffff;
}

.seccion-gris{
    background-color: #f8f9fa;
}

.seccion-azul-suave{
    background-color: #eef4fb;
}

.seccion-azul{
    background-color: #002E5F;
    color: white;
}
.modern-card{
    background: white;
    border-radius: 24px;
    padding: 40px 30px;
    transition: .3s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,0,0,0.04);
}

.modern-card:hover{
    transform: translateY(-10px);
    box-shadow: 0 20px 45px rgba(0,0,0,0.12);
}

.icon-circle{
    width: 80px;
    height: 80px;
    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 2rem;

    color: #002E5F;
}

.mini-line{
    width: 60px;
    height: 4px;
    background: #d4af37;
    border-radius: 50px;
    margin: 20px 0;
}

.glass-card{
    background: rgba(255,255,255,0.12);

    backdrop-filter: blur(12px);

    border: 1px solid rgba(255,255,255,0.15);

    border-radius: 24px;

    padding: 35px;

    color: white;
}

.blur-circle{
    position: absolute;
    border-radius: 50%;
    filter: blur(90px);
    opacity: .25;
}

.blur-1{
    width: 300px;
    height: 300px;
    background: #d4af37;
    top: -100px;
    right: -100px;
}

.blur-2{
    width: 250px;
    height: 250px;
    background: #ffffff;
    bottom: -120px;
    left: -80px;
}

.feature-item{
    display: flex;
    align-items: center;
    gap: 12px;

    margin-bottom: 18px;

    font-weight: 500;
}

.feature-item i{
    color: #002E5F;
    font-size: 1.1rem;
}

.empresa-card img{
    border-radius: 24px;
    object-fit: cover;
}


/* =========================
   PROGRAM CARDS
========================= */

.career-card{

    background: #f3f7fc;

    border-radius: 28px;

    padding: 35px 28px;

    box-shadow: 0 10px 28px rgba(0,0,0,0.06);

    transition: .3s ease;

    height: 100%;
}

.career-card:hover{

    transform: translateY(-10px);

    box-shadow: 0 18px 40px rgba(0,0,0,0.12);
}

/* =========================
   ICONOS
========================= */

.career-icon{

    width: 82px;

    height: 82px;

    border-radius: 24px;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 2rem;

    background: #dfeaf8;

    color: #002E5F;

    box-shadow: 0 6px 18px rgba(0,46,95,0.10);
}

/* =========================
   BADGES
========================= */

.badge-soft{

    background: rgba(181,141,27,0.12);

    color: #b38b00;

    padding: 8px 14px;

    border-radius: 30px;

    font-size: .85rem;

    font-weight: 700;
}

/* =========================
   BOTÓN
========================= */

.btn-uady{

    background: #002E5F;

    color: white;

    border-radius: 14px;

    border: none;

    padding: 12px;

    font-weight: 600;

    transition: .3s ease;
}

.btn-uady:hover{

    background: #01427f;

    color: white;

    transform: translateY(-2px);
}

/* =========================
   DETAIL CARD
========================= */

.detail-card{

    background: rgba(255,255,255,0.96);

    border-radius: 24px;

    padding: 35px;

    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

/* =========================
   CTA
========================= */

.cta-box{

    background: white;

    border-radius: 32px;

    padding: 60px 40px;

    box-shadow: 0 10px 35px rgba(0,0,0,0.08);
}

/* =========================
   HOVER GENERAL
========================= */

.hover-card{

    transition: all 0.3s ease;
}

.hover-card:hover{

    transform: translateY(-8px);

    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 991px){

    .glass-info-card{
        padding: 28px;
    }

    .career-card{
        padding: 28px 22px;
    }

    .mini-stat{

        width: 100%;

        text-align: center;
    }

    .cta-box{
        padding: 40px 25px;
    }

    .career-icon{

        width: 72px;

        height: 72px;

        font-size: 1.7rem;
    }
}

</style>


@endsection