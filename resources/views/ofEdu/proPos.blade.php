@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/proPos/p1.png"
    titulo="Programas de Posgrado"
    subtitulo="Impulsa tu futuro profesional"
/>
<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Nuestros Programas de Posgrado</h2>
        <p class="text-muted">
            Programas diseñados para formar líderes estratégicos con visión global, innovación y ética profesional.
        </p>
    </div>
</section>

{{-- cards --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-3">
                <div class="card h-100 shadow border-0 hover-card">
                    <div class="card-body">
                        <h5 class="fw-bold">Mercadotecnia Digital</h5>
                        <p class="small text-muted">Innovación + Estrategia digital</p>
                        <button class="btn btn-outline-primary w-100" data-bs-toggle="collapse" data-bs-target="#mmd">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 shadow border-0 hover-card">
                    <div class="card-body">
                        <h5 class="fw-bold">Impuestos</h5>
                        <p class="small text-muted">Especialización fiscal</p>
                        <button class="btn btn-outline-primary w-100" data-bs-toggle="collapse" data-bs-target="#mi">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 shadow border-0 hover-card">
                    <div class="card-body">
                        <h5 class="fw-bold">Dirección Estratégica</h5>
                        <p class="small text-muted">Liderazgo organizacional</p>
                        <button class="btn btn-outline-primary w-100" data-bs-toggle="collapse" data-bs-target="#mde">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 shadow border-0 hover-card">
                    <div class="card-body">
                        <h5 class="fw-bold">Finanzas</h5>
                        <p class="small text-muted">Optimización de recursos</p>
                        <button class="btn btn-outline-primary w-100" data-bs-toggle="collapse" data-bs-target="#mf">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- detalles --}}
<section class="container pb-5">

    <div class="collapse mb-4" id="mmd">
        <div class="p-4 shadow rounded bg-light">
            <h4 class="fw-bold">Maestría en Mercadotecnia Digital</h4>
            <p>Formar líderes estratégicos en marketing digital con enfoque innovador.</p>
            <ul>
                <li>Duración: 18 meses</li>
                <li>Clases: Viernes y sábado</li>
                <li>Contacto: mmd@correo.uady.mx</li>
            </ul>
        </div>
    </div>

    <div class="collapse mb-4" id="mi">
        <div class="p-4 shadow rounded bg-light">
            <h4 class="fw-bold">Maestría en Impuestos</h4>
            <p>Especialistas en soluciones fiscales con enfoque ético e innovador.</p>
            <ul>
                <li>Duración: 18 meses</li>
                <li>Clases: Viernes y sábado</li>
                <li>Contacto: mi@correo.uady.mx</li>
            </ul>
        </div>
    </div>

    <div class="collapse mb-4" id="mde">
        <div class="p-4 shadow rounded bg-light">
            <h4 class="fw-bold">Maestría en Dirección Estratégica</h4>
            <p>Formación en toma de decisiones y estrategias organizacionales.</p>
            <ul>
                <li>Duración: 18 meses</li>
                <li>Clases: Viernes y sábado</li>
                <li>Contacto: mde@correo.uady.mx</li>
            </ul>
        </div>
    </div>

    <div class="collapse mb-4" id="mf">
        <div class="p-4 shadow rounded bg-light">
            <h4 class="fw-bold">Maestría en Finanzas</h4>
            <p>Optimización de recursos financieros en entornos globales.</p>
            <ul>
                <li>Duración: 18 meses</li>
                <li>Clases: Viernes y sábado</li>
                <li>Contacto: maestria.finanzas@correo.uady.mx</li>
            </ul>
        </div>
    </div>

</section>

<section class="py-5 text-center text-white" style="background:#012143;">
    <div class="container">
        <h3 class="fw-bold">Consulta todos los detalles</h3>
        <p>Accede al portal oficial de ingreso a posgrado UADY</p>
        <a href="https://ingreso.uady.mx/posgrado/" target="_blank" class="btn btn-warning btn-lg">
            Ir al sitio
        </a>
    </div>
</section>

{{-- coordinares --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-5">Coordinadores</h3>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="p-3 shadow rounded text-center hover-card">
                    <h6 class="fw-bold">Finanzas</h6>
                    <p>Dra. Betsy May</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 shadow rounded text-center hover-card">
                    <h6 class="fw-bold">Impuestos</h6>
                    <p>Dr. Martín Puc</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 shadow rounded text-center hover-card">
                    <h6 class="fw-bold">Mercadotecnia Digital</h6>
                    <p>María Cristina Mata</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 shadow rounded text-center hover-card">
                    <h6 class="fw-bold">Dirección Estratégica</h6>
                    <p>Idalia de los Santos</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

<style>
.hover-card {
    transition: all 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}
</style>