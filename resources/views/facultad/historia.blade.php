@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/historia/h1.jpg"
    titulo="Historia"
    subtitulo="Facultad de Contaduría y Administración"
/>

{{-- INTRO --}}
<section class="py-5 historia-intro">

    <div class="container text-center">

        <span class="historia-badge mb-4">
            <i class="bi bi-clock-history"></i>
            Trayectoria FCA
        </span>

        <h2 class="fw-bold display-5 mt-4 mb-4" style="color:#012143;">
            Más de 60 años formando profesionales
        </h2>

        <p class="text-muted mx-auto historia-texto">
            Desde 1962, la Facultad de Contaduría y Administración ha sido 
            referente académico en Yucatán, impulsando la formación integral, 
            la innovación y el liderazgo profesional.
        </p>

    </div>

</section>

{{-- TIMELINE --}}
<section class="timeline-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold" style="color:#012143;">
                Línea del tiempo
            </h2>

            <div class="line-title mx-auto"></div>

        </div>

        <div class="timeline">

            {{-- 1962 --}}
            <div class="timeline-item left">

                <div class="timeline-content">

                    <img 
                        src="{{ asset('assets/img/historia/h1.jpg') }}"
                        class="timeline-img"
                        alt="Fundación"
                    >

                    <div class="timeline-body">

                        <div class="timeline-year">
                            1962
                        </div>

                        <h5 class="timeline-title">
                            Fundación
                        </h5>

                        <p class="timeline-text">
                            Nace como Escuela de Comercio y Administración. 
                            Inicia con 32 estudiantes en la carrera de 
                            Contador Público.
                        </p>

                    </div>

                </div>

            </div>

            {{-- PRIMER DIRECTOR --}}
            <div class="timeline-item right">

                <div class="timeline-content">

                    <img 
                        src="{{ asset('assets/img/historia/h2.jpg') }}"
                        class="timeline-img"
                        alt="Primer Director"
                    >

                    <div class="timeline-body">

                        <div class="timeline-year">
                            1963
                        </div>

                        <h5 class="timeline-title">
                            Primer Director
                        </h5>

                        <p class="timeline-text">
                            C.P. Enrique López Novelo lideró los primeros años 
                            de crecimiento de la institución.
                        </p>

                    </div>

                </div>

            </div>

            {{-- CRECIMIENTO --}}
            <div class="timeline-item left">

                <div class="timeline-content">

                    <img 
                        src="{{ asset('assets/img/historia/h3.jpg') }}"
                        class="timeline-img"
                        alt="Crecimiento"
                    >

                    <div class="timeline-body">

                        <div class="timeline-year">
                            1970
                        </div>

                        <h5 class="timeline-title">
                            Crecimiento Académico
                        </h5>

                        <p class="timeline-text">
                            La matrícula estudiantil creció rápidamente, 
                            consolidando la formación contable en la región.
                        </p>

                    </div>

                </div>

            </div>

            {{-- NUEVO EDIFICIO --}}
            <div class="timeline-item right">

                <div class="timeline-content">

                    <img 
                        src="{{ asset('assets/img/historia/h4.jpg') }}"
                        class="timeline-img"
                        alt="Nuevo edificio"
                    >

                    <div class="timeline-body">

                        <div class="timeline-year">
                            1979
                        </div>

                        <h5 class="timeline-title">
                            Nuevo edificio
                        </h5>

                        <p class="timeline-text">
                            Se inauguran nuevas instalaciones en Chuburná, 
                            fortaleciendo la infraestructura educativa.
                        </p>

                    </div>

                </div>

            </div>

            {{-- FACULTAD --}}
            <div class="timeline-item left">

                <div class="timeline-content">

                    <img 
                        src="{{ asset('assets/img/historia/h5.jpg') }}"
                        class="timeline-img"
                        alt="Facultad"
                    >

                    <div class="timeline-body">

                        <div class="timeline-year">
                            1980
                        </div>

                        <h5 class="timeline-title">
                            Facultad
                        </h5>

                        <p class="timeline-text">
                            Se crea la Maestría en Administración y la escuela 
                            se convierte oficialmente en Facultad.
                        </p>

                    </div>

                </div>

            </div>

            {{-- 60 ANIVERSARIO --}}
            <div class="timeline-item right">

                <div class="timeline-content">

                    <img 
                        src="{{ asset('assets/img/historia/h6.jpg') }}"
                        class="timeline-img"
                        alt="60 aniversario"
                    >

                    <div class="timeline-body">

                        <div class="timeline-year">
                            2022
                        </div>

                        <h5 class="timeline-title">
                            60 Aniversario
                        </h5>

                        <p class="timeline-text">
                            Celebración conmemorativa con actividades 
                            académicas, culturales y deportivas.
                        </p>

                    </div>

                </div>

            </div>

            {{-- NUEVA SEDE --}}
            <div class="timeline-item left">

                <div class="timeline-content">

                    <img 
                        src="{{ asset('assets/img/historia/h7.jpg') }}"
                        class="timeline-img"
                        alt="Nueva sede"
                    >

                    <div class="timeline-body">

                        <div class="timeline-year">
                            2023
                        </div>

                        <h5 class="timeline-title">
                            Nueva sede
                        </h5>

                        <p class="timeline-text">
                            Traslado al Campus de Ciencias Sociales, 
                            marcando una nueva etapa institucional.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- DIRECTORES --}}
<section class="py-5 directores-section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold" style="color:#012143;">
                Directores
            </h2>

            <div class="line-title mx-auto"></div>

        </div>

        <div class="row g-4">

            @php
            $directores = [
                "Enrique López Novelo (1962-1969)",
                "Guido Espadas Cantón (1969-1971)",
                "Carlos Pasos Novelo (1971-1973)",
                "José Felipe Capetillo (1973-1977)",
                "Miguel Vidal Vázquez (1982-1987)",
                "Luis Augusto Gamboa Ávila (1995-2001)",
                "Aureliano Martínez Castillo (2015-2022)",
                "David Suárez Pacheco (2023-Actual)"
            ];
            @endphp

            @foreach($directores as $d)

                <div class="col-lg-3 col-md-4 col-6">

                    <div class="director-card">
                        {{ $d }}
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>



<style>

/* ========================================
   INTRO
======================================== */

.historia-intro{

    background: linear-gradient(
        135deg,
        #f3f8fd 0%,
        #edf5fc 100%
    );
}

.historia-badge{

    background: rgba(181,141,27,.12);

    color: #b58d1b;

    padding: 10px 18px;

    border-radius: 30px;

    font-weight: 700;

    display: inline-flex;

    align-items: center;

    gap: 10px;
}

.historia-texto{

    max-width: 850px;

    line-height: 1.9;

    font-size: 1.08rem;
}

/* ========================================
   TITULOS
======================================== */

.line-title{

    width: 80px;

    height: 4px;

    background: #b58d1b;

    border-radius: 10px;

    margin-top: 15px;
}

/* ========================================
   TIMELINE
======================================== */
.timeline-content{

    background: white;

    border-radius: 22px;

    overflow: hidden;

    transition: .35s ease;

    box-shadow: 0 10px 28px rgba(0,0,0,.10);

    position: relative;

    max-width: 420px;

    margin: auto;
}

.timeline-img{

    width: 100%;

    height: 180px;

    object-fit: cover;
}

.timeline-body{

    padding: 22px 24px;
}

.timeline-year{

    font-size: 3rem;

    font-weight: 800;

    color: #b58d1b;

    line-height: 1;

    margin-bottom: 8px;

    letter-spacing: -2px;
}

.timeline-title{

    font-size: 1.15rem;

    font-weight: 700;

    color: #012143;

    margin-bottom: 10px;
}

.timeline-text{

    color: #4c5a6a;

    line-height: 1.7;

    margin-bottom: 0;

    font-weight: 600;

    font-size: 1rem;
}

/* CIRCULO */

.timeline-item::after{

    content: '';

    position: absolute;

    width: 24px;
    height: 24px;

    background: white;

    border: 5px solid #b58d1b;

    border-radius: 50%;

    top: 50px;

    z-index: 10;

    box-shadow: 0 0 0 6px rgba(181,141,27,.15);
}

.timeline-item.left::after{
    right: -12px;
}

.timeline-item.right::after{
    left: -12px;
}
.timeline-content:hover{

    transform: translateY(-8px);

    box-shadow: 0 18px 38px rgba(1,33,67,.18);
}

/* ========================================
   CARD
======================================== */

.timeline-content{

    background: white;

    border-radius: 28px;

    overflow: hidden;

    transition: .35s ease;

    box-shadow: 0 14px 35px rgba(0,0,0,.10);

    position: relative;
}

.timeline-content:hover{

    transform: translateY(-10px) scale(1.02);

    box-shadow: 0 24px 50px rgba(1,33,67,.18);
}

.timeline-content::before{

    content: '';

    position: absolute;

    inset: 0;

    background: linear-gradient(
        to top,
        rgba(1,33,67,.05),
        transparent
    );

    opacity: 0;

    transition: .3s ease;
}

.timeline-content:hover::before{
    opacity: 1;
}

/* ========================================
   IMAGEN
======================================== */

.timeline-img{

    width: 100%;

    height: 230px;

    object-fit: cover;
}

/* ========================================
   BODY
======================================== */

.timeline-body{

    padding: 30px;
}

/* ========================================
   AÑO
======================================== */

.timeline-year{

    font-size: 3.5rem;

    font-weight: 800;

    color: #b58d1b;

    line-height: 1;

    margin-bottom: 15px;

    letter-spacing: -2px;
}

/* ========================================
   TITULO
======================================== */

.timeline-title{

    font-size: 1.4rem;

    font-weight: 700;

    color: #012143;

    margin-bottom: 15px;
}

/* ========================================
   TEXTO
======================================== */

.timeline-text{

    color: #5d6875;

    line-height: 1.9;

    margin-bottom: 0;
}

/* ========================================
   DIRECTORES
======================================== */

.directores-section{

    background: linear-gradient(
        135deg,
        #f7f9fc 0%,
        #eef5fb 100%
    );
}

.director-card{

    background: white;

    border-radius: 24px;

    padding: 24px 18px;

    text-align: center;

    font-size: .95rem;

    font-weight: 600;

    color: #012143;

    transition: .3s ease;

    border: 1px solid rgba(1,33,67,.05);

    box-shadow: 0 10px 28px rgba(0,0,0,.05);

    height: 100%;
}

.director-card:hover{

    transform: translateY(-8px);

    background: #012143;

    color: white;

    box-shadow: 0 18px 40px rgba(1,33,67,.20);
}

/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 991px){

    .timeline::after{
        left: 22px;
    }

    .timeline-item{

        width: 100%;

        padding-left: 70px;
        padding-right: 20px;

        margin-bottom: 30px;
    }

    .timeline-item.left,
    .timeline-item.right{
        left: 0;
    }

    .timeline-item.left::after,
    .timeline-item.right::after{
        left: 10px;
    }

    .timeline-year{
        font-size: 2.7rem;
    }
}

</style>
@endsection