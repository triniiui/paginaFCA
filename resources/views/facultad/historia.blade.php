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
        <h2 class="fw-bold mb-3">Nuestra Historia</h2>
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
                <div class="timeline-content">
                    <h5>Primer Director</h5>
                    <p>
                        C.P. Enrique López Novelo lideró los primeros años junto a destacados docentes fundadores.
                    </p>
                </div>
            </div>

            {{-- CRECIMIENTO --}}
            <div class="timeline-item left">
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
                <div class="timeline-content">
                    <h5>1979 - Nuevo edificio</h5>
                    <p>
                        Se inauguran nuevas instalaciones en Chuburná, fortaleciendo la infraestructura educativa.
                    </p>
                </div>
            </div>

            {{-- 1980 --}}
            <div class="timeline-item left">
                <div class="timeline-content">
                    <h5>1980 - Facultad</h5>
                    <p>
                        Se crea la Maestría en Administración y la escuela se convierte oficialmente en Facultad.
                    </p>
                </div>
            </div>

            {{-- 2022 --}}
            <div class="timeline-item right">
                <div class="timeline-content">
                    <h5>2022 - 60 Aniversario</h5>
                    <p>
                        Celebración conmemorativa con actividades académicas y culturales.
                    </p>
                </div>
            </div>

            {{-- 2023 --}}
            <div class="timeline-item left">
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
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="fw-bold mb-4 text-center">Directores</h2>

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