@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/estudiantes/e2.jpg"
    titulo="Historia"
    subtitulo="Facultad de Contaduría y Administración"
/>

<style>
    .timeline {
    position: relative;
    margin: 0 auto;
    padding: 20px 0;
}

.timeline::after {
    content: '';
    position: absolute;
    width: 4px;
    background: #b58d1b;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -2px;
}

.timeline-item {
    padding: 20px;
    position: relative;
    width: 50%;
}

.timeline-item.left {
    left: 0;
}

.timeline-item.right {
    left: 50%;
}

.timeline-content {
    background: #012143;
    color: white;
    padding: 20px;
    border-radius: 10px;
    position: relative;
    transition: 0.3s;
}

.timeline-content:hover {
    transform: scale(1.05);
}

/* circulito */
.timeline-item::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    right: -10px;
    background: #b58d1b;
    border-radius: 50%;
    top: 25px;
    z-index: 1;
}

.timeline-item.right::after {
    left: -10px;
}

/* directores */
.director-card {
    background: white;
    border-radius: 10px;
    transition: 0.3s;
    font-size: 0.9rem;
}

.director-card:hover {
    background: #012143;
    color: white;
    transform: translateY(-5px);
}
</style>

{{-- INTRO --}}
<section class="py-5 text-center bg-light">
    <div class="container">
        <h2 class="fw-bold mb-3" style="color: #002E5F;">Nuestra Historia</h2>
        <p class="text-muted">
            Desde 1962, la Facultad de Contaduría y Administración ha sido parte fundamental 
            del desarrollo académico y profesional en Yucatán.
        </p>
    </div>
</section>

{{-- TIMELINE --}}
<section class="timeline-section py-5">
    <div class="container">

        <div class="timeline">

            {{-- 1962 --}}
            <div class="timeline-item left">

                <div class="timeline-image">
                    <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="">
                </div>

                <div class="timeline-dot"></div>

                <div class="timeline-content">
                    <h5>1962 - Fundación</h5>
                    <p>
                        Nace como Escuela de Comercio y Administración. Inicia con 32 estudiantes 
                        en la carrera de Contador Público.
                    </p>
                </div>
            </div>

            {{-- DIRECTOR --}}
            <div class="timeline-item right">

                <div class="timeline-image">
                    <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="">
                </div>

                <div class="timeline-dot"></div>

                <div class="timeline-content">
                    <h5>Primer Director</h5>
                    <p>
                        C.P. Enrique López Novelo lideró los primeros años junto a destacados docentes fundadores.
                    </p>
                </div>
            </div>

            {{-- CRECIMIENTO --}}
            <div class="timeline-item left">

                <div class="timeline-image">
                    <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="">
                </div>

                <div class="timeline-dot"></div>

                <div class="timeline-content">
                    <h5>Crecimiento</h5>
                    <p>
                        La matrícula creció rápidamente, consolidando la importancia de la formación contable 
                        en la región.
                    </p>
                </div>
            </div>

            {{-- 1979 --}}
            <div class="timeline-item right">

                <div class="timeline-image">
                    <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="">
                </div>

                <div class="timeline-dot"></div>

                <div class="timeline-content">
                    <h5>1979 - Nuevo edificio</h5>
                    <p>
                        Se inauguran nuevas instalaciones en Chuburná, fortaleciendo la infraestructura educativa.
                    </p>
                </div>
            </div>

            {{-- 1980 --}}
            <div class="timeline-item left">

                <div class="timeline-image">
                    <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="">
                </div>

                <div class="timeline-dot"></div>

                <div class="timeline-content">
                    <h5>1980 - Facultad</h5>
                    <p>
                        Se crea la Maestría en Administración y la escuela se convierte oficialmente en Facultad.
                    </p>
                </div>
            </div>

            {{-- 2022 --}}
            <div class="timeline-item right">

                <div class="timeline-image">
                    <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="">
                </div>

                <div class="timeline-dot"></div>

                <div class="timeline-content">
                    <h5>2022 - 60 Aniversario</h5>
                    <p>
                        Celebración conmemorativa con actividades académicas y culturales.
                    </p>
                </div>
            </div>

            {{-- 2023 --}}
            <div class="timeline-item left">

                <div class="timeline-image">
                    <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="">
                </div>

                <div class="timeline-dot"></div>

                <div class="timeline-content">
                    <h5>2023 - Nueva sede</h5>
                    <p>
                        Traslado al Campus de Ciencias Sociales, marcando una nueva etapa de crecimiento.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- DIRECTORES --}}
{{-- DIRECTORES --}}
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="fw-bold mb-4 text-center" style="color: #002E5F;">Directores</h2>

        <div class="row g-3">

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
                <div class="col-md-3 col-6">
                    <div class="director-card p-3 text-center">
                        {{ $d }}
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>

@endsection

<style>
.timeline{
    position: relative;
    max-width: 1200px;
    margin: auto;
}

.timeline::after{
    content: '';
    position: absolute;
    width: 4px;
    background-color: #b58d1b;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -2px;
}

.timeline-item{
    position: relative;
    width: 50%;
    padding: 20px 40px;
    min-height: 220px;
}

.timeline-item.left{
    left: 0;
}

.timeline-item.right{
    left: 50%;
}

.timeline-dot{
    position: absolute;
    width: 20px;
    height: 20px;
    background-color: #b58d1b;
    border-radius: 50%;
    top: 30px;
    z-index: 2;
    cursor: pointer;
}

.timeline-item.left .timeline-dot{
    right: -10px;
}

.timeline-item.right .timeline-dot{
    left: -10px;
}

.timeline-content{
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);

    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: 0.3s ease;
}

.timeline-content h5{
    font-size: 1.8rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 15px;
}

/* IMÁGENES */
.timeline-image{
    position: absolute;
    top: 10px;
    width: 260px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: 0.3s ease;
}

.timeline-image img{
    width: 100%;
    height: 170px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.timeline-item.left .timeline-image{
    left: calc(100% + 70px);
}

.timeline-item.right .timeline-image{
    right: calc(100% + 70px);
}
</style>

<script>
window.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.timeline-dot').forEach(dot => {

        const item = dot.parentElement;
        const content = item.querySelector('.timeline-content');
        const image = item.querySelector('.timeline-image');

        // Mostrar al pasar el mouse
        dot.addEventListener('mouseenter', () => {

            content.style.opacity = '1';
            content.style.visibility = 'visible';
            content.style.transform = 'translateY(0)';

            image.style.opacity = '1';
            image.style.visibility = 'visible';
            image.style.transform = 'translateY(0)';
        });

        // Ocultar al hacer click
        dot.addEventListener('click', () => {

            content.style.opacity = '0';
        content.style.visibility = 'hidden';
        content.style.transform = 'translateY(10px)';

        image.style.opacity = '0';
        image.style.visibility = 'hidden';
        image.style.transform = 'translateY(10px)';
        });

    });

});
</script>