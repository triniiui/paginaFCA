@extends('layouts.vistas')

@section('vistas-content')


<x-hero 
    imagen="assets/img/proLin/p1.png"
    titulo="Programas de Licenciatura"
    subtitulo="Formación profesional con excelencia académica"
/>

<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Nuestros Programas</h2>
        <p class="text-muted">
            La Facultad de Contaduría y Administración ofrece 4 programas de licenciatura 
            alineados al Modelo Educativo para la Formación Integral (MEFI 2019).
        </p>
    </div>
</section>

{{-- accordion detalle --}}
<section class="py-5 bg-light">
    <div class="container">

        <x-accordion id="cp" titulo="Licenciatura de Contador Público">
            <p>
                Forma profesionistas capaces de generar información financiera, auditar, 
                gestionar recursos y proponer soluciones organizacionales.
            </p>
            <ul>
                <li> Reconocido Nivel 1 Plus CENEVAL (Mérida)</li>
                <li> Nivel 1 CENEVAL (Tizimín)</li>
                <li> Acreditado por CACECA</li>
            </ul>
        </x-accordion>

        <x-accordion id="mni" titulo="Mercadotecnia y Negocios Internacionales">
            <p>
                Forma profesionales capaces de detectar oportunidades de mercado y generar valor 
                en entornos globales y digitales.
            </p>
            <ul>
                <li> Nivel 1 CENEVAL</li>
                <li> Acreditado por CACECA</li>
            </ul>
        </x-accordion>

        <x-accordion id="ti" titulo="Administración de Tecnologías de Información">
            <p>
                Profesionales enfocados en soluciones tecnológicas, innovación y mejora continua 
                en procesos organizacionales.
            </p>
            <ul>
                <li> Nivel 1 CENEVAL</li>
                <li> Acreditado por CACECA</li>
            </ul>
        </x-accordion>

        <x-accordion id="admin" titulo="Licenciatura en Administración">
            <p>
                Forma líderes capaces de gestionar organizaciones, recursos y estrategias 
                en contextos globales.
            </p>
            <ul>
                <li> Nivel 1 Plus CENEVAL</li>
                <li> Acreditado por CACECA</li>
            </ul>
        </x-accordion>

    </div>
</section>

{{-- coordinadores --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold mb-5 text-center">Coordinaciones</h3>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="p-4 shadow rounded hover-card">
                    <h5 class="fw-bold">Contador Público</h5>
                    <p>Dra. Teresita Sabido</p>
                    <small>tere.sabido@correo.uady.mx</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 shadow rounded hover-card">
                    <h5 class="fw-bold">Mercadotecnia y Negocios Internacionales</h5>
                    <p>Dra. María Rachó</p>
                    <small>maricarmen.racho@correo.uady.mx</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 shadow rounded hover-card">
                    <h5 class="fw-bold">Tecnologías de Información</h5>
                    <p>Ileana Vázquez</p>
                    <small>ileana.vazquez@correo.uady.mx</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 shadow rounded hover-card">
                    <h5 class="fw-bold">Administración</h5>
                    <p>Martha Medina</p>
                    <small>martha.medina@correo.uady.mx</small>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection


{{-- ESTILOS --}}
<style>
.hover-card {
    transition: all 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
</style>