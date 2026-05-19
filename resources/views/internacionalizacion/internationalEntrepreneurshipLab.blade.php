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
<div class="container my-5">
    {{-- Links de información y registro --}}
    <div class="d-flex justify-content-center gap-3 mb-5">
        <a href="https://www.ieism.com" target="_blank" 
           class="btn btn-lg px-4 shadow-sm rounded-pill text-white" 
           style="background-color: #002E5F;">
            Más información
        </a>
        <a href="https://forms.gle/ECtLQ8CA1F89gnFR7" target="_blank" 
           class="btn btn-lg px-4 rounded-pill" 
           style="border: 1px solid #002E5F; color: #002E5F;">
            Registro
        </a>
    </div>

    {{-- Profesores --}}
    <section class="mb-5">
        <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Profesores</h3>
        
        <div class="row g-3 justify-content-center">
            {{-- Columna 1 --}}
            <div class="col-md-5">
                <div class="list-group">
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Dra. Anel Flores Novelo
                    </div>
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Dra. María del Carmen Rachó Barroso
                    </div>
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Dra. Teresa Sabido Domínguez
                    </div>
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Dr. Gustavo Alberto Barredo Baqueiro
                    </div>
                </div>
            </div>

            {{-- Columna 2 --}}
            <div class="col-md-5">
                <div class="list-group">
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Dr. Valentín Alonso Novelo
                    </div>
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Mtra. Gina Estefanía Godínez Molina
                    </div>
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Mtro. Gustavo López
                    </div>
                    <div class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded p-3">
                        <i class="bi bi-person-fill me-2" style="color: #002E5F;"></i> Lic. Mary Efraín Yerves Irigoyen
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container my-5">

    <h3 id="equipo-IELSM" class="fw-bold text-center mb-4" style="color: #002E5F;">Equipo Académico</h3>

    <div class="row text-center">
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Anel Flores"
            profesion="IELSM - Coordinadora"
            puesto="Universidad Autónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dr. Valentin Alonso"
            profesion="I"
            puesto="Universidad Autónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Teresa Sabido"
            profesion="I"
            puesto="Universidad Autónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Mtro. Marby Yerbes"
            profesion="I"
            puesto="Universidad Autónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Mtro. Gustavo López"
            profesion="I"
            puesto="Universidad Autónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Maricarmen Rachó"
            profesion="I"
            puesto="Universidad Autónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="MIGIM. Gina Godinez"
            profesion="I"
            puesto="Universidad Autónoma de Yucatán"
            correo="mbasulto@correo.uady.mx"
        />
        <x-staff-card 
            imagen="assets/img/organizacion/o1.jpg"
            nombre="Dra. Anel Flores"
            profesion="IELSM - Coordinadora"
            puesto="Universidad Autónoma de Yucatán"
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
                    
                </div>
            </div>

           <!-- Slide 1 -->
 <div class="carousel-item active">
        <div class="row justify-content-center">
            <x-testimonial-card
                name="Luis Herrera"
                career="Contaduría"
                image="{{ asset('assets/img/internacional/i1.jpg') }}"
                text="Conocí personas increíbles."
            />
            <x-testimonial-card
                name="Sofía Martínez"
                career="Psicología"
                image="{{ asset('assets/img/internacional/i2.jpg') }}"
                text="Una experiencia enriquecedora."
            />
            <x-testimonial-card
                name="Daniela Castro"
                career="Derecho"
                image="{{ asset('assets/img/internacional/i3.jpg') }}"
                text="Aprendí muchísimo trabajando en equipo."
            />
            <x-testimonial-card
                name="José Pérez"
                career="Arquitectura"
                image="{{ asset('assets/img/internacional/i1.jpg') }}"
                text="Desarrollé habilidades organizativas."
            />
        </div>
    </div>

<!-- Slide 2 -->
    <div class="carousel-item">
        <div class="row justify-content-center">
            <x-testimonial-card
                name="Luis Herrera"
                career="Contaduría"
                image="{{ asset('assets/img/internacional/i5.jpg') }}"
                text="Conocí personas increíbles."
            />
            <x-testimonial-card
                name="Sofía Martínez"
                career="Psicología"
                image="{{ asset('assets/img/internacional/i6.jpg') }}"
                text="Una experiencia enriquecedora."
            />
            <x-testimonial-card
                name="Daniela Castro"
                career="Derecho"
                image="{{ asset('assets/img/internacional/i7.jpg') }}"
                text="Aprendí muchísimo trabajando en equipo."
            />
            <x-testimonial-card
                name="José Pérez"
                career="Arquitectura"
                image="{{ asset('assets/img/internacional/i8.jpg') }}"
                text="Desarrollé habilidades organizativas."
            />
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
        <div class="row justify-content-center">
            <x-testimonial-card
                name="Luis Herrera"
                career="Contaduría"
                image="{{ asset('assets/img/internacional/i1.jpg') }}"
                text="Conocí personas increíbles."
            />
            <x-testimonial-card
                name="Sofía Martínez"
                career="Psicología"
                image="{{ asset('assets/img/internacional/i2.jpg') }}"
                text="Una experiencia enriquecedora."
            />
            <x-testimonial-card
                name="Daniela Castro"
                career="Derecho"
                image="{{ asset('assets/img/internacional/i3.jpg') }}"
                text="Aprendí muchísimo trabajando en equipo."
            />
            <x-testimonial-card
                name="José Pérez"
                career="Arquitectura"
                image="{{ asset('assets/img/internacional/i1.jpg') }}"
                text="Desarrollé habilidades organizativas."
            />
        </div>
    </div>

        </div>

        <!-- Flechas de Control -->
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

{{-- Estilos personalizados inline para arreglar la posición del carrusel --}}
<style>
   /* Contenedor del carrusel */
#testimonialCarousel {
    position: relative;
    padding: 0 55px;
}

/* Forzar que todas las tarjetas tengan exactamente la misma altura */
.testimonial-mini {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: #ffffff;
    border: 1px solid #e3e6f0;
    border-radius: 8px;
    height: 100%;
    padding: 20px 10px;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
}

/* CONTROL DE LAS IMÁGENES (Esto arreglará el desborde) */
.testimonial-mini-img {
    width: 120px;          /* Ancho fijo para todas */
    height: 120px;         /* Alto fijo idéntico */
    object-fit: cover;     /* Corta la imagen proporcionalmente sin deformarla */
    border-radius: 50%;    /* Hace la foto perfectamente redonda */
    margin: 0 auto 15px;   /* Centra la imagen y le da espacio abajo */
    display: block;
    border: 3px solid #002E5F; /* Opcional: un borde azul elegante */
}

/* Modificar los controles nativos de Bootstrap */
#testimonialCarousel .carousel-control-prev,
#testimonialCarousel .carousel-control-next {
    width: 45px;
    height: 45px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
}
#testimonialCarousel .carousel-control-prev { left: 0; }
#testimonialCarousel .carousel-control-next { right: 0; }

.carousel-arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    background-color: #002E5F;
    color: #ffffff;
    border-radius: 50%;
    font-size: 1.2rem;
    transition: background-color 0.2s ease;
}
.carousel-arrow:hover {
    background-color: #004085;
}

</style>

@endsection
