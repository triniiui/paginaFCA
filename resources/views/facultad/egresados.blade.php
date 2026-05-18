@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/egresados/e3.jpg"
    titulo="Egresados"
/>
{{-- INTRO --}}
<section class="py-5 seccion-azul-suave overflow-hidden position-relative">

    <div class="bg-circle bg-circle-1"></div>
    <div class="bg-circle bg-circle-2"></div>

    <div class="container position-relative">

        <div class="text-center mb-5">
            <h2 class="fw-bold display-5 mt-3" style="color:#002E5F;">
                Coordinación de Seguimiento a Egresados
            </h2>

            <p class="text-muted mx-auto mt-3" style="max-width:850px;">
                Espacio dedicado al acompañamiento académico y profesional de
                nuestros egresados mediante servicios, orientación y trámites
                que fortalecen su desarrollo profesional.
            </p>

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


{{-- GUIAS --}}
<section class="py-5 seccion-blanca overflow-hidden">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">

                <span class="section-badge">
                    Titulación
                </span>

                <h2 class="fw-bold display-6 mt-3 mb-4" style="color:#002E5F;">
                    Guías para realizar los trámites
                </h2>

                <p class="text-muted">
                    Consulta la información oficial para realizar trámites de
                    titulación de licenciatura y maestría de manera sencilla y organizada.
                </p>

            </div>

            <div class="col-lg-7">

                <div class="detail-card">

                    <div class="d-flex align-items-center gap-3 mb-4">

                        <div class="mini-icon">
                            <i class="bi bi-folder-check"></i>
                        </div>

                        <div>
                            <h5 class="fw-bold mb-1">
                                Sitio oficial
                            </h5>

                            <small class="text-muted">
                                Información y formatos oficiales
                            </small>
                        </div>

                    </div>

                    <a href="https://bit.ly/guiasCE-FCA"
                       target="_blank"
                       class="btn btn-uady">

                        Guías para Trámite de Titulación
                    </a>

                    <div class="schedule-box mt-4">

                        <p class="mb-2">
                            <strong>Trámite de título profesional:</strong><br>
                            Miércoles de 09:00 a 14:00 hrs.
                        </p>

                        <p class="mb-0">
                            <strong>Trámite de grado académico:</strong><br>
                            Lunes y miércoles de 09:00 a 15:00 hrs.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CITAS --}}
<section class="py-5 position-relative overflow-hidden seccion-azul">

    <div class="container position-relative">

        <div class="row align-items-center g-5">

            <div class="col-lg-5 text-white">

                <span class="section-badge">
                    Atención
                </span>

                <h2 class="fw-bold display-6 mt-3 mb-4" style="color:#002E5F;">
                     Sistema Virtual de Citas
                </h2>

                <p class="text-muted">
                    Agenda y consulta información relacionada con los servicios
                    de Control Escolar y trámites administrativos.
                </p>

            </div>

            <div class="col-lg-7">

                <div class="detail-card">

                    <div class="d-flex align-items-center gap-3 mb-4">

                        <div class="mini-icon gold">
                            <i class="bi bi-calendar-check"></i>
                        </div>

                        <div>
                            <h5 class="fw-bold mb-1">
                                Acceso al sistema
                            </h5>

                            <small class="text-muted">
                                Plataforma oficial de citas
                            </small>
                        </div>

                    </div>

                    <a href="https://bit.ly/bookingsCE-FCA"
                       target="_blank"
                       class="btn btn-uady">

                        Acceso al Sistema
                    </a>

                    <div class="schedule-box mt-4">

                        <p class="mb-2">
                            <strong>Lic. Diana Eugenia Salazar Cardeña</strong><br>
                            Jefa de Control Escolar
                        </p>

                        <p class="mb-0">
                            <strong>Tel:</strong>
                            (999) 981 09 26, ext. 71168
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
    /* =========================
   BADGE
========================= */

.section-badge{

    display: inline-block;

    background: rgba(181,141,27,0.12);

    color: #b58d1b;

    padding: 10px 18px;

    border-radius: 50px;

    font-weight: 700;
}

/* =========================
   BACKGROUND
========================= */

.bg-circle{

    position: absolute;

    border-radius: 50%;

    opacity: .35;

    filter: blur(10px);
}

.bg-circle-1{

    width: 260px;
    height: 260px;

    background: #cfe3ff;

    top: -100px;
    left: -100px;
}

.bg-circle-2{

    width: 220px;
    height: 220px;

    background: #d9ebff;

    bottom: -80px;
    right: -80px;
}

/* =========================
   MAIN CARD
========================= */

.main-card{

    background: rgba(255,255,255,0.8);

    backdrop-filter: blur(10px);

    border-radius: 32px;

    padding: 40px;

    display: flex;

    align-items: center;

    gap: 30px;

    box-shadow: 0 12px 35px rgba(0,46,95,0.08);
}

.main-icon{

    width: 100px;
    height: 100px;

    min-width: 100px;

    border-radius: 28px;

    background: linear-gradient(135deg,#dbeafe,#eef6ff);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 2.5rem;

    color: #002E5F;
}

/* =========================
   INFO CARDS
========================= */

.info-card{

    background: white;

    border-radius: 30px;

    padding: 38px;

    box-shadow: 0 10px 30px rgba(0,46,95,0.08);

    transition: .35s ease;

    height: 100%;
}

.info-card:hover{

    transform: translateY(-8px);

    box-shadow: 0 18px 40px rgba(0,46,95,0.14);
}

.info-icon{

    width: 85px;
    height: 85px;

    border-radius: 50%;

    background: #e6f0ff;

    color: #002E5F;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 2rem;
}

.info-icon.gold{

    background: rgba(181,141,27,0.18);

    color: #b58d1b;
}

/* =========================
   LISTA
========================= */

.custom-list{

    list-style: none;

    padding: 0;

    margin: 0;
}

.custom-list li{

    display: flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 14px;

    color: #5f6b7a;
}

.custom-list i{

    color: #b58d1b;
}

/* =========================
   DETAIL CARD
========================= */

.detail-card{

    background: rgba(255,255,255,0.95);

    border-radius: 32px;

    padding: 40px;

    box-shadow: 0 10px 35px rgba(0,46,95,0.1);
}

.mini-icon{

    width: 65px;
    height: 65px;

    border-radius: 18px;

    background: #e6f0ff;

    color: #002E5F;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 1.5rem;
}

.mini-icon.gold{

    background: rgba(181,141,27,0.18);

    color: #b58d1b;
}

/* =========================
   BUTTON
========================= */

.btn-uady{

    background: #b58d1b;

    color: white;

    border: none;

    padding: 12px 22px;

    border-radius: 14px;

    font-weight: 600;

    transition: .3s ease;
}

.btn-uady:hover{

    background: #967313;

    color: white;

    transform: translateY(-2px);
}

/* =========================
   SCHEDULE
========================= */

.schedule-box{

    background: #f5f9ff;

    border-radius: 20px;

    padding: 22px;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:991px){

    .main-card{

        flex-direction: column;

        text-align: center;

        padding: 30px;
    }

    .info-card,
    .detail-card{

        padding: 30px;
    }
}
</style>

@endsection