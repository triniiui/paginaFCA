@extends('layouts.vistas')

@section('vistas-content')

<style>
    .director-card {
    width: 350px;
    border-radius: 15px;
    border: none;
    transition: 0.3s;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.director-card:hover {
    transform: translateY(-10px);
    background: #012143;
    color: white;
}

.director-img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border: 4px solid #b58d1b;
}

.linea-organigrama {
    width: 3px;
    height: 50px;
    background: #b58d1b;
    margin: 0 auto;
}

.staff-card {
    border-radius: 12px;
    border: none;
    transition: 0.3s;
}

.staff-card:hover {
    transform: translateY(-8px);
    background: #012143;
    color: white;
}
</style>

<x-hero 
    imagen="assets/img/docentes/d3.jpg"
    titulo="Organización"
    subtitulo="Estructura organizacional de la Facultad"
/>

<section class="py-5 text-center bg-light">
    <div class="container">
        <h2 class="fw-bold mb-4">Dirección</h2>

        {{-- direc --}}
        <div class="d-flex justify-content-center mb-5">
            <div class="card director-card text-center p-4">

                <img src="{{ asset('assets/img/organizacion/o1.jpg') }}" 
                     class="rounded-circle mx-auto mb-3 director-img">

                <h4 class="fw-bold mb-1">David Roberto Suárez Pacheco</h4>

                <p class="text-muted mb-2">
                    Mtro. en Administración de Instituciones Educativas
                </p>

                <span class="badge bg-uady-gold text-dark px-3 py-2 mb-3">
                    Director
                </span>

                <p>
                    <a href="mailto:david.suarez@correo.uady.mx" class="text-decoration-none">
                        david.suarez@correo.uady.mx
                    </a>
                </p>

            </div>
        </div>


        {{-- EQUIPO --}}
        <div class="row justify-content-center g-4 mt-4">

            {{-- sec acad --}}
            <div class="col-md-3">
                <div class="card staff-card p-3 text-center">
                    <img src="{{ asset('assets/img/organizacion/o1.jpg') }}" 
                     class="rounded-circle mx-auto mb-3 director-img">
                    <h6 class="fw-bold">Manuel Jesús Basulto Triay</h6>
                    <p class="small text-muted mb-1">Contador Público</p>
                    <span class="badge bg-primary mb-2">Secretario Académico</span>
                    <p class="small">
                        <a href="mailto:mbasulto@correo.uady.mx">mbasulto@correo.uady.mx</a>
                    </p>
                </div>
            </div>

            {{-- sec adm --}}
            <div class="col-md-3">
                <div class="card staff-card p-3 text-center">
                    <img src="{{ asset('assets/img/organizacion/o1.jpg') }}" 
                     class="rounded-circle mx-auto mb-3 director-img">
                    <h6 class="fw-bold">Gustavo Alberto Barredo Baqueiro</h6>
                    <p class="small text-muted mb-1">Dr. en Dirección de Empresas</p>
                    <span class="badge bg-primary mb-2">Secretario Administrativo</span>
                    <p class="small">
                        <a href="mailto:gbarredo@correo.uady.mx">gbarredo@correo.uady.mx</a>
                    </p>
                </div>
            </div>

            {{-- pos --}}
            <div class="col-md-3">
                <div class="card staff-card p-3 text-center">
                    <img src="{{ asset('assets/img/organizacion/o4.jpg') }}" 
                     class="rounded-circle mx-auto mb-3 director-img">
                    <h6 class="fw-bold">Olivia Jiménez Diez</h6>
                    <p class="small text-muted mb-1">Dra. en Administración</p>
                    <span class="badge bg-primary mb-2">
                        Jefa de Posgrado e Investigación
                    </span>
                    <p class="small">
                        <a href="mailto:jdiez@correo.uady.mx">jdiez@correo.uady.mx</a>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection