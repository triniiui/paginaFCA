@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/estudiantes/e1.jpg"
    titulo="Acerca de Nosotros"
    subtitulo="Facultad de Contaduría y Administración"
/>

{{-- historia --}}
<section class="py-5 bg-light">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Nuestra Facultad</h2>
                <p class="text-muted">
                    Creada en 1962 como Escuela de Comercio y Administración, la Facultad de Contaduría 
                    y Administración de la Universidad Autónoma de Yucatán es el plantel más grande 
                    de la institución.
                </p>
                <p class="text-muted">
                    Forma parte del Campus de Ciencias Sociales, Económico-Administrativas y Humanidades, 
                    contribuyendo activamente al desarrollo de la región.
                </p>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" 
                     class="img-fluid rounded shadow">
            </div>
        </div>

    </div>
</section>

{{-- oferca acad --}}
<section class="py-5">
    <div class="container">

        <h2 class="fw-bold mb-4 text-center">Oferta Académica</h2>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card p-4 shadow-sm border-0 h-100">
                    <h5 class="fw-bold">Licenciaturas</h5>
                    <ul class="text-muted small">
                        <li>Contador Público (Mérida y Tizimín)</li>
                        <li>Mercadotecnia y Negocios Internacionales</li>
                        <li>Administración de Tecnologías de Información</li>
                        <li>Administración</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 shadow-sm border-0 h-100">
                    <h5 class="fw-bold">Posgrados</h5>
                    <ul class="text-muted small">
                        <li>Maestría en Finanzas</li>
                        <li>Maestría en Impuestos</li>
                        <li>Maestría en Mercadotecnia Digital</li>
                        <li>Maestría en Dirección Estratégica</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- MISIÓN Y VISIÓN --}}
<section class="py-5" style="background:#012143;">
    <div class="container text-white">

        <div class="row g-4">

            <div class="col-md-6">
                <div class="p-4 shadow rounded h-100 card-mv">
                    <h4 class="fw-bold mb-3">Misión</h4>
                    <p>
                        Formación integral de profesionales con enfoque humanista, perfil ético y 
                        capacidad crítica en el área económico administrativa, comprometidos con el 
                        desarrollo sustentable.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 shadow rounded h-100 card-mv">
                    <h4 class="fw-bold mb-3">Visión</h4>
                    <p>
                        Ser una unidad académica reconocida nacional e internacionalmente por la 
                        formación de sus egresados, la innovación y su impacto social.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- contacto --}}
<section class="py-5">
    <div class="container text-center">

        <h2 class="fw-bold mb-3">Contacto</h2>

        <p class="text-muted">comunicacion.fca@correo.uady.mx</p>

    </div>
</section>

@endsection