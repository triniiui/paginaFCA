@extends('layouts.vistas')

@section('vistas-content')


<x-hero 
    imagen="assets/img/internacionalizacion/i1.png"
    titulo="International Entrepreneurship-Lab Smart Money"
    subtitulo="Poner bien el subtítulo"
/>

<div class="container my-5">
<section class="py-5 seccion-azul-suave">
    {{-- Introducción en bloque destacado --}}
    <div id="IELSM" class="card shadow-sm mb-5">
        <div class="card-body">
            <p>
                La Facultad de Contaduría y Administración ejerce su compromiso como institución aliada en la plataforma digital europea y latinoamericana de inteligencia colectiva-multicultural para el emprendimiento e innovación digital <strong>International Entrepreneurship-Lab Smart Money</strong>.
            </p>
            <p>
                Esta iniciativa abre paso a la internacionalización y readaptación de modelos de negocio, participando activamente nuestros profesores y alumnos como actores de innovación en el contexto de la transformación digital y la sostenibilidad ambiental.
            </p>
            <p>
                Todo ello es posible gracias a la creación de ecosistemas digitales de negocios e inteligencia multicultural junto a estudiantes, académicos, universidades, empresarios, expertos e inversionistas que comparten el know-how con enfoque internacional. 
                Además, ofrece la oportunidad de estancias en Alemania con universidades miembro para alumnos, profesores y administrativos.
            </p>
        </div>
    </div>

    {{-- Impacto y objetivos en tarjetas --}}
    <div class="row text-center mb-5">
        <div class="col-md-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-globe2 fs-1" style="color: #002E5F;"></i>
                    <h5 class="fw-bold mt-2">Transformación Digital</h5>
                    <p>Potencializando capacidades académicas de enseñanza, investigación, emprendimiento e innovación en red digital con Europa y Latinoamérica.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-people-fill fs-1" style="color: #002E5F;"></i>
                    <h5 class="fw-bold mt-2">Impacto Internacional</h5>
                    <p>Brindando un impacto nacional e internacional en ámbitos sociales, económicos y ambientales, ejes de gran importancia para nuestra facultad.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Links de información y registro --}}
    <div class="text-center mb-5">
        <a href="#" class="btn me-3" style="background-color: #b58d1b; border-color: #b58d1b; color: white;">
            Más información
        </a>
        <a href="#" class="btn" style="background-color: #b58d1b; border-color: #b58d1b; color: white;">
            Registro
        </a>
    </div>




    {{-- Profesores en lista estilizada --}}
    <h3 id="profesores-IELSM" class="fw-bold text-center mb-4" style="color: #002E5F;">Profesores</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Dra. Anel Flores Novelo</li>
        <li class="list-group-item">Dra. María del Carmen Rachó Barroso</li>
        <li class="list-group-item">Dra. Teresa Sabido Domínguez</li>
        <li class="list-group-item">Dr. Gustavo Alberto Barredo Baqueiro</li>
        <li class="list-group-item">Dr. Valentín Alonso Novelo</li>
        <li class="list-group-item">Mtra. Gina Estefanía Godínez Molina</li>
        <li class="list-group-item">Mtro. Gustavo López</li>
        <li class="list-group-item">Lic. Mary Efraín Yerves Irigoyen</li>
    </ul>

</div>

<div class="container my-5">

    <h3 id="equipo-IELSM" class="fw-bold text-center mb-4" style="color: #002E5F;">Equipo Académico</h3>

    <div class="row text-center">

        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Anel Flores"
            profesion="IELSM - Coordinadora"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />

        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dr. Valentin Alonso"
            profesion="I"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />

        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Teresa Sabido"
            profesion="I"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />

        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Mtro. Marby Yerbes"
            profesion="I"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />

        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Mtro. Gustavo López"
            profesion="I"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />

        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Maricarmen Rachó"
            profesion="I"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />

        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="MIGIM. Gina Godinez"
            profesion="I"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
         <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Anel Flores"
            profesion="IELSM - Coordinadora"
            puesto="Universidad Aurónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />


    </div>
</div>





<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<div class="container py-5">
<h3 id="alumnos-IELSM" class="fw-bold text-center mb-4" style="color: #002E5F;">Alumnos destacados del programa</h3>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">

                    <x-testimonial-card
                        name="Monserrat Vargas Jiménez"
                        career="Mercadotecnia"
                        image="{{ asset('img/internacional/i1.jpg') }}"
                        text="Experiencia única y completa."
                    />

                    <x-testimonial-card
                        name="Andrea López"
                        career="Administración"
                        image="{{ asset('img/internacional/i2.jpg') }}"
                        text="Fortalecí mis habilidades de liderazgo."
                    />

                    <x-testimonial-card
                        name="Carlos Méndez"
                        career="Ingeniería"
                        image="{{ asset('img/internacional/i3.jpg') }}"
                        text="Aprendí a trabajar bajo presión."
                    />

                    <x-testimonial-card
                        name="Fernanda Ruiz"
                        career="Diseño"
                        image="{{ asset('img/internacional/i4.jpg') }}"
                        text="Me ayudó a crecer profesionalmente."
                    />

                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">

                    <x-testimonial-card
                        name="Luis Herrera"
                        career="Contaduría"
                        image="{{ asset('img/internacional/i1.jpg') }}"
                        text="Conocí personas increíbles."
                    />

                    <x-testimonial-card
                        name="Sofía Martínez"
                        career="Psicología"
                        image="{{ asset('img/internacional/i2.jpg') }}"
                        text="Una experiencia enriquecedora."
                    />

                    <x-testimonial-card
                        name="Daniela Castro"
                        career="Derecho"
                        image="{{ asset('img/internacional/i3.jpg') }}"
                        text="Aprendí muchísimo trabajando en equipo."
                    />

                    <x-testimonial-card
                        name="José Pérez"
                        career="Arquitectura"
                        image="{{ asset('img/internacional/i4.jpg') }}"
                        text="Desarrollé habilidades organizativas."
                    />

                </div>
            </div>

        </div>

        <!-- Flechas -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-arrow">
                <i class="bi bi-chevron-left"></i>
            </span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-arrow">
                <i class="bi bi-chevron-right"></i>
            </span>
        </button>

    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Galería</h3>

    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('assets/img/internacionalizacion/galeria1.png') }}" alt="Galería IELSM 1" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('assets/img/internacionalizacion/galeria2.png') }}" alt="Galería IELSM 2" class="img-fluid rounded shadow">
        </div>
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Contacto</h3>

    <div class="row align-items-center">
        <div class="col-md-4 text-center mb-3">
            <img src="{{ asset('assets/img/internacionalizacion/anel.png') }}" alt="Dra. Anel Flores Novelo" 
                 class="img-fluid rounded shadow" style="max-width:250px;">
        </div>
        <div class="col-md-8">
            <h5 class="fw-bold">Dra. Anel Flores Novelo</h5>
            <p class="text-muted">
                Coordinadora del IELSM en la Facultad de Contaduría y Administración de la Universidad Autónoma de Yucatán
            </p>
            <p>
                <a href="mailto:anel.flores@correo.uady.mx" class="text-decoration-none">
                    anel.flores@correo.uady.mx
                </a>
            </p>
        </div>
    </div>

</div>

<style>
    /* =========================
   CARD
========================= */

.testimonial-mini{
    background: white;
    border-radius: 22px;
    overflow: hidden;
    transition: .3s ease;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    border: 1px solid #f1f1f1;
    height: 100%;
}

.testimonial-mini:hover{
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.12);
}

.testimonial-mini-img{
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
}

.testimonial-name{
    color: #002E5F;
    font-size: 1rem;
}

.testimonial-career{
    color: #C79A00;
    font-size: .82rem;
    font-weight: 600;
}

.testimonial-text{
    color: #666;
    font-size: .88rem;
    line-height: 1.6;
}

/* =========================
   FLECHAS
========================= */

.carousel-arrow{
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #002E5F;
    font-size: 1.4rem;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    transition: .3s ease;
}

.carousel-arrow:hover{
    background: #002E5F;
    color: white;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:992px){

    .carousel-control-prev,
    .carousel-control-next{
        display: none;
    }

    .testimonial-mini-img{
        height: 180px;
    }

}

</style>


@endsection