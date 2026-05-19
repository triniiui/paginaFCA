@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/directorio/d1.jpg"
    titulo="Directorio"
    subtitulo="Conecta con las áreas de la Facultad"
/>
{{-- TELÉFONO --}}
<section class="py-5 seccion-azul-suave">
        <div class="phone-box text-center">
            <div class="phone-icon">
                <i class="bi bi-telephone-fill"></i>
            </div>

            <h5 class="fw-bold mb-2">
                Atención telefónica
            </h5>

            <p class="phone-number mb-0">
                (999) 981 09 26
            </p>

        </div>

    </div>

</section>

{{-- DIRECCIÓN --}}
<section class="py-5 seccion-blanca overflow-hidden">

    <div class="container">

        <div class="text-center mb-5">

            <h2 id="equipo-directivo"class="fw-bold display-6 title-uady">
                Equipo directivo
            </h2>

            <div class="title-line mx-auto"></div>

        </div>

        <div class="row g-4 justify-content-center">

            {{-- CARD --}}
            <div class="col-lg-4 col-md-6">

                <div class="directorio-card h-100">

                    <div class="directorio-icon">
                        <i class="bi bi-person-badge"></i>
                    </div>

                    <h5 class="fw-bold mt-4 mb-1">
                        Director
                    </h5>

                    <p class="directorio-name">
                        CP David Roberto Suárez Pacheco
                    </p>

                    <div class="info-pill">
                        david.suarez@correo.uady.mx
                    </div>

                    <div class="ext-box">
                        Ext. 71102
                    </div>

                </div>

            </div>

            {{-- CARD --}}
            <div class="col-lg-4 col-md-6">

                <div class="directorio-card h-100">

                    <div class="directorio-icon">
                        <i class="bi bi-person"></i>
                    </div>

                    <h5 class="fw-bold mt-4 mb-1">
                        Asistente
                    </h5>

                    <p class="directorio-name">
                        Maricela Cruz Chan
                    </p>

                    <div class="info-pill">
                        maricela.cruz@correo.uady.mx
                    </div>

                    <div class="ext-box">
                        Ext. 71102
                    </div>

                </div>

            </div>

            {{-- CARD --}}
            <div class="col-lg-4 col-md-6">

                <div class="directorio-card h-100">

                    <div class="directorio-icon">
                        <i class="bi bi-person"></i>
                    </div>

                    <h5 class="fw-bold mt-4 mb-1">
                        Asistente
                    </h5>

                    <p class="directorio-name">
                        Ana Lilia Manzanero
                    </p>

                    <div class="info-pill">
                        ana.manzanero@correo.uady.mx
                    </div>

                    <div class="ext-box">
                        Ext. 71103
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- areas --}} 
<section id="areas-coordinaciones" class="py-5 bg-light"> <div class="container"> <h3 class="fw-bold mb-4" style="color: #002E5F;">Áreas y Coordinaciones</h3> <x-accordion id="comunicacion" titulo="Coordinación de Comunicación"> Información de contacto y difusión institucional. </x-accordion> <x-accordion id="vinculacion" titulo="Coordinación de Vinculación Estratégica"> Vinculación con empresas, instituciones y comunidad. </x-accordion> <x-accordion id="cip" titulo="Centro de Innovación Pedagógica"> Innovación educativa y desarrollo docente. </x-accordion> <x-accordion id="movilidad" titulo="Coordinación de Movilidad"> Intercambios académicos nacionales e internacionales. </x-accordion> <x-accordion id="ti" titulo="Centro de Servicios de Tecnologías de Información"> Soporte tecnológico y sistemas institucionales. </x-accordion> </div> </section>

{{-- CONTACTO --}}
<section class="py-5 seccion-blanca">

    <div class="container">

        <div class="contact-box text-center">

            <div class="contact-icon">
                <i class="bi bi-envelope-fill"></i>
            </div>

            <h3 class="fw-bold mb-3 title-uady">
                Contacto institucional
            </h3>

            <p class="text-muted mb-4">
                Para dudas, información o apoyo institucional.
            </p>

            <a href="mailto:comunicacion.fca@correo.uady.mx" class="btn btn-uady">
                comunicacion.fca@correo.uady.mx
            </a>

        </div>

    </div>

</section>

@endsection


<style>

/* =========================
   TITLES
========================= */

.title-uady{
    color: #002E5F;
}

.title-line{
    width: 70px;
    height: 5px;
    background: #b58d1b;
    border-radius: 20px;
    margin-top: 18px;
}

.badge-title{
    background: rgba(181,141,27,0.12);
    color: #b58d1b;
    padding: 10px 18px;
    border-radius: 30px;
    font-weight: 700;
}

/* =========================
   PHONE BOX
========================= */

.phone-box{
    background: rgba(255,255,255,0.85);
    border-radius: 30px;
    padding: 50px 30px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.06);
}

.phone-icon{
    width: 90px;
    height: 90px;
    margin: auto auto 25px;

    border-radius: 50%;

    background: #dfeefe;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #002E5F;
    font-size: 2rem;
}

.phone-number{
    font-size: 1.5rem;
    font-weight: 700;
    color: #b58d1b;
}

/* =========================
   DIRECTORIO CARD
========================= */

.directorio-card{
    background: rgba(239,247,255,0.65);

    border-radius: 32px;

    padding: 40px 30px;

    text-align: center;

    transition: .35s ease;

    box-shadow: 0 10px 35px rgba(0,0,0,0.05);

    border: 1px solid rgba(0,46,95,0.05);

    height: 100%;
}

.directorio-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 18px 45px rgba(0,0,0,0.10);
}

.directorio-icon{
    width: 95px;
    height: 95px;

    margin: auto;

    border-radius: 50%;

    background: linear-gradient(135deg,#dcecff,#eef6ff);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 2.3rem;

    color: #002E5F;
}

.directorio-name{
    color: #5d6878;
    margin-bottom: 20px;
}

.info-pill{
    background: white;
    border-radius: 30px;
    padding: 10px 18px;
    font-size: .9rem;
    color: #002E5F;
    margin-bottom: 18px;
    word-break: break-word;
}

.ext-box{
    display: inline-block;

    background: rgba(181,141,27,0.12);

    color: #b58d1b;

    padding: 10px 18px;

    border-radius: 30px;

    font-weight: 700;
}

/* =========================
   ACCORDION
========================= */

.custom-accordion .accordion-item{
    border: none;
    margin-bottom: 18px;
    border-radius: 22px !important;
    overflow: hidden;
}

.custom-accordion .accordion-button{
    background: rgba(255,255,255,0.12);
    color: white;
    font-weight: 600;
    padding: 22px;
    box-shadow: none !important;
}

.custom-accordion .accordion-button:not(.collapsed){
    background: white;
    color: #002E5F;
}

.custom-accordion .accordion-button::after{
    filter: brightness(0) invert(1);
}

.custom-accordion .accordion-button:not(.collapsed)::after{
    filter: none;
}

.custom-accordion .accordion-body{
    background: white;
    color: #5d6878;
    padding: 25px;
}

/* =========================
   CONTACT BOX
========================= */

.contact-box{
    background: rgba(239,247,255,0.7);

    border-radius: 34px;

    padding: 60px 40px;

    box-shadow: 0 10px 35px rgba(0,0,0,0.05);
}

.contact-icon{
    width: 95px;
    height: 95px;

    margin: auto auto 25px;

    border-radius: 50%;

    background: #dcecff;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 2.2rem;

    color: #002E5F;
}

.btn-uady{
    background: #b58d1b;
    border: none;
    color: white;

    padding: 14px 28px;

    border-radius: 14px;

    font-weight: 600;

    transition: .3s ease;
}

.btn-uady:hover{
    background: #8d6d15;
    color: white;
    transform: translateY(-2px);
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:991px){

    .phone-box,
    .contact-box{
        padding: 40px 25px;
    }

    .directorio-card{
        padding: 35px 25px;
    }

    .phone-number{
        font-size: 1.2rem;
    }
}

</style>