@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/vinculacion/v3.png"
    titulo="Módulo de Atención Fiscal"
    subtitulo="Poner el subtítulo correcto"
/>

<div class="container my-5">

    <div class="text-center mb-5">
        <h3 class="fw-bold" style="color: #002E5F;">Módulo de Atención fiscal</h3>
        <div class="mx-auto" style="width: 60px; height: 4px; background: #b58d1b; border-radius: 2px;"></div>
    </div>

    {{-- Introducción con imagen y texto en dos columnas --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('images/maf_intro.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <p>
                El Módulo de Atención Fiscal (MAF) busca crear espacios de atención permanente a la sociedad, 
                con la colaboración de prestadores de Servicio Social y docentes capacitados para ofrecer, 
                de manera gratuita, asesoría y trámites utilizando los servicios del portal del SAT.
            </p>
        </div>
    </div>
    
    <div class="row g-4 justify-content-center">
        {{-- tarjeta 1 --}}
        <div class="col-lg-10 mb-2">
            <div class="egresados-card-main shadow-sm d-flex align-items-center p-4">
                <div class="icon-box me-4 d-none d-md-flex">
                    <i class="bi bi-people-fill"></i> 
                </div>
                <div>
                    <h5 class="fw-bold mb-2">Visión</h5>
                    <p class="text-muted mb-0">
                        Formar contribuyentes conscientes de sus obligaciones fiscales, comprometidos con el cumplimiento voluntario y la ética profesional.
                    </p>
                </div>
            </div>
        </div>

        {{-- tarjeta EGEL --}}
        <div class="col-md-5">
            <div class="egresados-card shadow-sm h-100 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle me-3"><i class="bi bi-journal-check"></i></div>
                    <h5 class="fw-bold m-0">Misión</h5>
                </div>
                <p class="text-muted small">
                    Promover la formación tributaria y proporcionar servicios gratuitos a los contribuyentes utilizando las herramientas del portal del SAT.
                </p>
            </div>
        </div>

        {{-- tarjeta Objetivo General --}}
        <div class="col-md-5">
            <div class="egresados-card shadow-sm h-100 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle me-3"><i class="bi bi-journal-check"></i></div>
                    <h5 class="fw-bold m-0">Objetivo General</h5>
                </div>
                <p class="text-muted small">
                    Brindar orientación fiscal GRATUITA en inscripción al RFC, presentación de avisos y declaraciones, inscripción estatal y trámites relacionados.
                </p>
            </div>
        </div>

        
    </div>


    {{-- Bloque de beneficios con íconos --}}
    <div class="mb-5">
        <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Beneficios para la sociedad</h3>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="p-3">
                    <i class="bi bi-geo-alt-fill fs-1 text-primary"></i>
                    <p>Puntos y servicios de atención alternos.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="p-3">
                    <i class="bi bi-cash-stack fs-1 text-success"></i>
                    <p>Recibe servicios tributarios gratuitos.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="p-3">
                    <i class="bi bi-people-fill fs-1 text-warning"></i>
                    <p>Se involucra directamente en la participación tributaria.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">

    {{-- Catálogo de trámites como lista --}}
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Catálogo de trámites vía portal del SAT</h3>
    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Actualización de obligaciones fiscales</li>
                <li class="list-group-item">Generación de contraseña</li>
                <li class="list-group-item">Cambio de domicilio (si se cuenta con FIEL actualizada)</li>
                <li class="list-group-item">Reanudación de actividades</li>
                <li class="list-group-item">Suspensión de actividades</li>
                <li class="list-group-item">Apertura de establecimiento</li>
                <li class="list-group-item">Cierre de establecimiento</li>
                <li class="list-group-item">Declaraciones anuales de ISR (sueldos, honorarios, arrendamiento)</li>
                <li class="list-group-item">Declaraciones definitivas de RIF y del impuesto cedular estatal</li>
                <li class="list-group-item">Declaraciones provisionales de ISR (honorarios)</li>
                <li class="list-group-item">Herramientas propias del Régimen de Incorporación Fiscal</li>
                <li class="list-group-item">Orientación fiscal a personas físicas</li>
                <li class="list-group-item">Declaraciones de RESICO (personas físicas)</li>
            </ul>
        </div>
    </div>

    {{-- Imagen ilustrativa --}}
    <div class="text-center my-5">
        <img src="{{ asset('images/maf_oficina.jpg') }}" class="img-fluid rounded shadow" alt="Módulo de Atención Fiscal">
    </div>

    {{-- Contacto, dirección y horario en tarjetas --}}
    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-envelope-fill fs-1" style="color: #002E5F;"></i>
                    <h5 class="fw-bold mt-2">Contacto</h5>
                    <p>CP Idalia Amparo De Los Santos Briones, MAT<br>
                       Dr. Víctor Manuel Villausso Pino<br>
                       Dra. Lilia Carolina Avilés Heredia</p>
                    <p>
                        <a href="mailto:maf.fca@correo.uady.mx" class="text-decoration-none">
                            maf.fca@correo.uady.mx
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-geo-alt-fill fs-1" style="color: #002E5F;"></i>
                    <h5 class="fw-bold mt-2">Dirección</h5>
                    <p>Facultad de Contaduría y Administración<br>
                       Campus de Ciencias Sociales, Económico-Administrativas y Humanidades<br>
                       Km. 1 Carretera Mérida-Tizimín</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-clock-fill fs-1" style="color: #002E5F;"></i>
                    <h5 class="fw-bold mt-2">Horario</h5>
                    <p>Lunes a viernes<br>8:00 a 12:00 horas</p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection