@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/egresados/e3.jpg"
    titulo="Egresados"
/>
<div class="container my-5">
    <div class="text-center mb-5">
        <h3 class="fw-bold text-dark">Coordinación de Seguimiento a Egresados</h3>
        <div class="mx-auto" style="width: 60px; height: 4px; background: #b58d1b; border-radius: 2px;"></div>
    </div>

    <div class="row g-4 justify-content-center">
        {{-- tarjeta 1 --}}
        <div class="col-lg-10 mb-2">
            <div class="egresados-card-main shadow-sm d-flex align-items-center p-4">
                <div class="icon-box me-4 d-none d-md-flex">
                    <i class="bi bi-people-fill"></i> 
                </div>
                <div>
                    <h5 class="fw-bold mb-2">¿Quiénes somos?</h5>
                    <p class="text-muted mb-0">
                        La Coordinación de Seguimiento a Egresados es la unidad responsable del diseño y oferta de productos académicos dirigidos a la comunidad de alumnos egresados de nuestros programas de licenciatura y posgrado.
                    </p>
                </div>
            </div>
        </div>

        {{-- tarjeta EGEL --}}
        <div class="col-md-5">
            <div class="egresados-card shadow-sm h-100 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle me-3"><i class="bi bi-journal-check"></i></div>
                    <h5 class="fw-bold m-0">EGEL</h5>
                </div>
                <p class="text-muted small">
                    El Examen General para el Egreso de la Licenciatura es un instrumento de cobertura nacional para determinar si los egresados cuentan con los conocimientos y habilidades indispensables al término de su formación.
                </p>
            </div>
        </div>

        {{-- tarjeta 3 --}}
        <div class="col-md-5">
            <div class="egresados-card shadow-sm h-100 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle me-3"><i class="bi bi-mortarboard-fill"></i></div>
                    <h5 class="fw-bold m-0">Servicios Escolares</h5>
                </div>
                <p class="text-muted small mb-2">El Departamento de Control Escolar ofrece:</p>
                <ul class="list-unstyled custom-list small text-muted">
                    <li><i class="bi bi-check2-circle me-2 text-warning"></i>Kárdex e Historial académico.</li>
                    <li><i class="bi bi-check2-circle me-2 text-warning"></i>Certificados y Constancias.</li>
                    <li><i class="bi bi-check2-circle me-2 text-warning"></i>Trámites de Titulación.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- ligas/vinculos --}}
<section class="py-5">
    <div class="container">

        <h2 class="fw-bold mb-4">Guías para realizar los Trámites de Titulación</h2>

        <div class="card shadow-sm border-0 p-4 mt-3">
            <h5 class="fw-bold">Sitio oficial</h5>
            <a href="https://bit.ly/guiasCE-FCA" target="_blank" 
               class="btn btn-outline-primary mt-2">
               Guías para Trámite de Titulación de Licenciatura y Maestría
            </a>

            <p class="mt-3 mb-1"><strong>Trámite de título profesional:</strong>Miércoles de 09:00 a 14:00 hrs.</p>
            <p><strong>Trámite de grado académico:</strong>Lunes y miércoles de 09:00 a 15:00 hrs</p>
        </div>

    </div>
</section>
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="fw-bold mb-4">Sistema Virtual de Citas</h2>

        <div class="card shadow-sm border-0 p-4 mt-3">
            <a href="https://bit.ly/bookingsCE-FCA" target="_blank" 
               class="btn btn-outline-primary mt-2">Acceso al Sistema
            </a>

            <p class="mt-3 mb-1"><strong>	
Lic. Diana Eugenia Salazar Cardeña:</strong>Jefa de Control Escolar</p>
            <p><strong>Tel:</strong> (999) 981 09 26,  ext. 71168</p>
        </div>
    </div>
</section>


@endsection