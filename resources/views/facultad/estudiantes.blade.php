@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/estudiantes/eV.mp4"
    titulo="¿Por qué estudiar en la UADY?"
    subtitulo="Personal Docente de la Facultad de Contaduría y Administración"
/>

{{-- fca --}}
<div class="container my-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h3 id="facultad-contaduria-administracion" class="fw-bold mb-3" style="color: #002E5F;">Facultad de Contaduría y Administración</h3>
            <p class="text-muted">
                Creada en 1962 como Escuela de Comercio y Administración, la Facultad de Contaduría 
                y Administración es uno de los planteles más importantes de la UADY.
            </p>
        </div>

        <div class="col-md-6">
            <img src="{{ asset($FCA->ruta) }}"
                class="img-fluid rounded shadow">
        </div>

    </div>
</div>

{{-- CARDS --}}
<div class="container my-5">
    <h3 id="que-te-ofrecemos" class="fw-bold mb-4 text-center" style="color: #002E5F;">¿Qué te ofrecemos?</h3>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded">
                <h5 class="fw-bold">Excelencia académica</h5>
                <p class="text-muted">Programas educativos de calidad.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded">
                <h5 class="fw-bold">Infraestructura moderna</h5>
                <p class="text-muted">Espacios adecuados para aprender.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded">
                <h5 class="fw-bold">Apoyos y becas</h5>
                <p class="text-muted">Impulsamos tu formación.</p>
            </div>
        </div>

    </div>
</div>

{{-- becas --}}
<div class="container my-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <img src="{{ asset($Becas->ruta) }}"
                class="img-fluid rounded shadow">
        </div>

        <div class="col-md-6">
            <h3 id="becas" class="fw-bold mb-3" style="color: #002E5F;">Becas</h3>
            <p class="text-muted">
                El área de Becas orienta a los solicitantes sobre las convocatorias, plazos y requerimientos tanto de programas institucionales, estatales o a nivel federal.
            </p>
        </div>

    </div>
</div>


{{-- Coordinación de Cultura y Asignaturas Libres --}}
<div class="container my-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h3 id="coordinacion-cultura-asignaturas-libres" class="fw-bold mb-3" style="color: #002E5F;">Coordinación de Cultura y Asignaturas Libres</h3>
            <p class="text-muted">
                 La Coordinación de Cultura se encarga de la realización de diferentes actividades culturales que ya son parte de la identidad de la Facultad de Contaduría y Administración, tales como la Muestra de Altares Janal Pixán, Concurso de Canto FCA, exposiciones y recitales, por nombrar algunas. 
                También se encarga de coordinar la impartición de asignaturas artísticas y culturales, como: Ritmos Latinos, Taller de Guitarra, Talleres de Teatro, Pintura, Apreciación del Arte y Apreciación Cinematográfica, entre otras.
           </p>
        </div>

        <div class="col-md-6">
            <img src="{{ asset($CCAL->ruta) }}"
                class="img-fluid rounded shadow">
        </div>

    </div>
</div>


{{-- Coordinación de Movilidad --}}
<div class="container my-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <img src="{{ asset($movilidad->ruta) }}"
                class="img-fluid rounded shadow">
        </div>

        <div class="col-md-6">
            <h3 id="coordinacion-movilidad" class="fw-bold mb-3" style="color: #002E5F;">Coordinación de Movilidad</h3>
            <p class="text-muted">
                La Coordinación de Movilidad ofrece orientación sobre trámites y becas para realizar movilidad nacional o internacional, con las instituciones con las que la UADY tiene convenio de colaboración.
                También se brinda atención a estudiantes foráneos y extranjeros, con el afán de hacer su estancia lo más provechosa posible en nuestras aulas </p>
        </div>

    </div>
</div>

{{-- ACORDEON --}}
<div class="container my-5">
    <h3 class="fw-bold mb-4" style="color: #002E5F;">Información adicional</h3>

    <x-accordion id="info1" titulo="Más información">
    <p>Consulta convocatorias y fechas importantes.</p>
</x-accordion> 
</div>

@endsection
