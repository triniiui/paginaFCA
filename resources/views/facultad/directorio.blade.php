@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/directorio/d1.jpg"
    titulo="Directorio"
    subtitulo="Conecta con las áreas de la Facultad"
/>

{{-- tel --}}
<section class="py-4 text-center bg-light">
    <div class="container">
        <h5 class="fw-bold">Atención telefónica</h5>
        <p class="text-muted">(999) 981 09 26</p>
    </div>
</section>

{{-- direccion --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold mb-4">Dirección</h3>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-4 shadow rounded text-center hover-card">
                    <h6 class="fw-bold">Director</h6>
                    <p>CP David Roberto Suárez Pacheco</p>
                    <small>david.suarez@correo.uady.mx</small>
                    <p class="mt-2 text-muted">Ext. 71102</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow rounded text-center hover-card">
                    <h6 class="fw-bold">Asistente</h6>
                    <p>Maricela Cruz Chan</p>
                    <small>maricela.cruz@correo.uady.mx</small>
                    <p class="mt-2 text-muted">Ext. 71102</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow rounded text-center hover-card">
                    <h6 class="fw-bold">Asistente</h6>
                    <p>Ana Lilia Manzanero</p>
                    <small>ana.manzanero@correo.uady.mx</small>
                    <p class="mt-2 text-muted">Ext. 71103</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- areas --}}
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold mb-4">Áreas y Coordinaciones</h3>

        <x-accordion id="comunicacion" titulo="Coordinación de Comunicación">
            Información de contacto y difusión institucional.
        </x-accordion>

        <x-accordion id="vinculacion" titulo="Coordinación de Vinculación Estratégica">
            Vinculación con empresas, instituciones y comunidad.
        </x-accordion>

        <x-accordion id="cip" titulo="Centro de Innovación Pedagógica">
            Innovación educativa y desarrollo docente.
        </x-accordion>

        <x-accordion id="movilidad" titulo="Coordinación de Movilidad">
            Intercambios académicos nacionales e internacionales.
        </x-accordion>

        <x-accordion id="ti" titulo="Centro de Servicios de Tecnologías de Información">
            Soporte tecnológico y sistemas institucionales.
        </x-accordion>

    </div>
</section>

{{-- contacto --}}
<section class="py-4 text-center text-white" style="background:#012143;">
    <div class="container">
        <p class="mb-0">Contacto: comunicacion.fca@correo.uady.mx</p>
    </div>
</section>

@endsection


<style>
.hover-card {
    transition: all 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}
</style>