@extends('layouts.vistas')

@section('vistas-content')


<x-hero 
    imagen="assets/img/proLin/p1.png"
    titulo="Programas de Licenciatura"
    subtitulo="Formación profesional con excelencia académica"
/>
{{-- INTRO --}}

<section class="py-5 seccion-azul-suave">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
<<<<<<< HEAD
                <h2 class="fw-bold display-5 mb-4" style="color:#002E5F;">
=======

                <h2 id="formacion-profesional-vision-global" class="fw-bold display-5 mb-4" style="color:#002E5F;">
>>>>>>> 01abd925ff1fe34a4d64ade2981dd5ccbec1852c
                    Formación profesional con visión global
                </h2>
                <p class="lead text-muted">
                    Nuestros programas están alineados al Modelo Educativo
                    para la Formación Integral (MEFI 2019), fortaleciendo
                    competencias académicas, tecnológicas y humanas.
                </p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <div class="mini-stat">
                        <h4>CENEVAL</h4>
                        <span>Reconocimiento</span>
                    </div>
                    <div class="mini-stat">
                        <h4>CACECA</h4>
                        <span>Acreditación</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="glass-info-card">
                    <h4 class="fw-bold mb-4">
                        ¿Por qué estudiar en FCA?
                    </h4>
                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Programas acreditados
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Formación integral
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Vinculación profesional
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Docentes especializados
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- PROGRAMAS --}}
<section class="py-5 position-relative overflow-hidden" 
    style="
        background: linear-gradient(180deg, #eef5ff 0%, #f7fbff 100%);
    ">

    {{-- decoraciones --}}
    <div class="bg-shape bg-shape-1"></div>
    <div class="bg-shape bg-shape-2"></div>

    <div class="container position-relative">

        {{-- TITULO --}}
        <div class="text-center mb-5">

            <span class="section-badge">
                Oferta Académica
            </span>

            <h2 id="nuestros-programas-licenciatura" class="fw-bold display-5 mt-3" style="color:#002E5F;">
                Nuestros programas
            </h2>

            <p class="text-muted mx-auto mt-3" style="max-width:700px;">
                Licenciaturas diseñadas para formar profesionistas con visión
                estratégica, liderazgo, innovación y preparación integral
                para los retos actuales del entorno laboral.
            </p>

        </div>

        {{-- GRID --}}
        <div class="row g-4 justify-content-center">

            {{-- CARD --}}
            <div class="col-lg-6">
                <div class="career-card-modern h-100">

                    <div class="career-top">

                        <div class="career-icon-modern">
                            <i class="bi bi-calculator"></i>
                        </div>

                        <div class="career-line"></div>

                    </div>

                    <h4 class="fw-bold mt-4">
                        Contador Público
                    </h4>

                    <p class="text-muted mb-4">
                        Formación en auditoría, finanzas, fiscal y gestión
                        organizacional con enfoque estratégico.
                    </p>

                    <div class="d-flex flex-wrap gap-2">

                        <span class="badge-soft-modern">
                            Nivel 1 Plus
                        </span>

                        <span class="badge-soft-modern">
                            CENEVAL
                        </span>

                        <span class="badge-soft-modern">
                            CACECA
                        </span>

                    </div>

                </div>
            </div>

            {{-- CARD --}}
            <div class="col-lg-6">
                <div class="career-card-modern h-100">

                    <div class="career-top">

                        <div class="career-icon-modern">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>

                        <div class="career-line"></div>

                    </div>

                    <h4 class="fw-bold mt-4">
                        Mercadotecnia y Negocios Internacionales
                    </h4>

                    <p class="text-muted mb-4">
                        Estrategias comerciales, marketing digital y visión
                        empresarial en mercados globales.
                    </p>

                    <div class="d-flex flex-wrap gap-2">

                        <span class="badge-soft-modern">
                            Marketing
                        </span>

                        <span class="badge-soft-modern">
                            CENEVAL
                        </span>

                        <span class="badge-soft-modern">
                            CACECA
                        </span>

                    </div>

                </div>
            </div>

            {{-- CARD --}}
            <div class="col-lg-6">
                <div class="career-card-modern h-100">

                    <div class="career-top">

                        <div class="career-icon-modern">
                            <i class="bi bi-cpu"></i>
                        </div>

                        <div class="career-line"></div>

                    </div>

                    <h4 class="fw-bold mt-4">
                        Administración de TI
                    </h4>

                    <p class="text-muted mb-4">
                        Innovación tecnológica y soluciones digitales para la
                        transformación organizacional.
                    </p>

                    <div class="d-flex flex-wrap gap-2">

                        <span class="badge-soft-modern">
                            Tecnología
                        </span>

                        <span class="badge-soft-modern">
                            Innovación
                        </span>

                        <span class="badge-soft-modern">
                            CACECA
                        </span>

                    </div>

                </div>
            </div>

            {{-- CARD --}}
            <div class="col-lg-6">
                <div class="career-card-modern h-100">

                    <div class="career-top">

                        <div class="career-icon-modern">
                            <i class="bi bi-briefcase"></i>
                        </div>

                        <div class="career-line"></div>

                    </div>

                    <h4 class="fw-bold mt-4">
                        Administración
                    </h4>

                    <p class="text-muted mb-4">
                        Gestión empresarial, liderazgo y toma de decisiones
                        estratégicas en organizaciones.
                    </p>

                    <div class="d-flex flex-wrap gap-2">

                        <span class="badge-soft-modern">
                            Liderazgo
                        </span>

                        <span class="badge-soft-modern">
                            Gestión
                        </span>

                        <span class="badge-soft-modern">
                            CENEVAL
                        </span>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

{{-- COORDINADORES --}}

<section class="py-5 seccion-azul-suave">

    <div class="container">

        <div class="text-center text-white mb-5">

           <h2 id="equipo-academico-licenciatura" class="fw-bold display-6" style="color:#002E5F;">
                Equipo académico
            </h2>

        </div>

        <div class="row g-4">

            <x-team-card
                titulo="Tecnologías"
                nombre="Ileana Vázquez"
                correo="ileana.vazquez@correo.uady.mx"
                imagen="assets/img/adu/a2.jpg"
            />

            <x-team-card
                titulo="Tecnologías"
                nombre="Ileana Vázquez"
                correo="ileana.vazquez@correo.uady.mx"
                imagen="assets/img/adu/a2.jpg"
            />

                    <x-team-card
                titulo="Tecnologías"
                nombre="Ileana Vázquez"
                correo="ileana.vazquez@correo.uady.mx"
                imagen="assets/img/adu/a2.jpg"
            />
                    <x-team-card
                titulo="Administración"
                nombre="Martha Medina"
                correo="martha.medina@correo.uady.mx"
            />

        </div>

    </div>
</section>
{{-- ESTILOS --}}
<style>

/* =========================
   HOVER GENERAL
========================= */

.hover-card{
    transition: all 0.3s ease;
}

.hover-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* =========================
   MINI STATS
========================= */

.mini-stat{
    background: white;
    padding: 18px 26px;
    border-radius: 18px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.06);
}

.mini-stat h4{
    margin: 0;
    font-weight: 700;
    color: #002E5F;
}

.mini-stat span{
    font-size: .9rem;
    color: gray;
}

/* =========================
   GLASS CARD
========================= */

.glass-info-card{
    background: rgba(255,255,255,0.6);
    backdrop-filter: blur(12px);

    border-radius: 28px;

    padding: 40px;

    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

/* =========================
   SECTION BADGE
========================= */

.section-badge{
    display: inline-block;

    background: rgba(181,141,27,0.12);

    color: #b58d1b;

    padding: 10px 18px;

    border-radius: 50px;

    font-weight: 700;

    letter-spacing: .5px;
}

/* =========================
   BACKGROUND SHAPES
========================= */

.bg-shape{
    position: absolute;

    border-radius: 50%;

    filter: blur(10px);

    opacity: .4;
}

.bg-shape-1{
    width: 320px;
    height: 320px;

    background: #cfe3ff;

    top: -120px;
    left: -120px;
}

.bg-shape-2{
    width: 260px;
    height: 260px;

    background: #d8ecff;

    bottom: -120px;
    right: -100px;
}

/* =========================
   CARD
========================= */

.career-card-modern{

    background: rgba(255,255,255,0.75);

    backdrop-filter: blur(10px);

    border: 1px solid rgba(255,255,255,0.7);

    border-radius: 32px;

    padding: 38px;

    transition: .35s ease;

    box-shadow: 0 12px 35px rgba(0,46,95,0.08);

    position: relative;

    overflow: hidden;
}

.career-card-modern:hover{

    transform: translateY(-10px);

    box-shadow: 0 20px 45px rgba(0,46,95,0.14);
}

/* =========================
   TOP AREA
========================= */

.career-top{
    display: flex;

    align-items: center;

    gap: 18px;
}

.career-line{
    flex: 1;

    height: 4px;

    border-radius: 50px;

    background: linear-gradient(to right, #b58d1b, transparent);
}

/* =========================
   ICON
========================= */

.career-icon-modern{

    width: 88px;
    height: 88px;

    min-width: 88px;

    border-radius: 26px;

    background: linear-gradient(135deg, #dbeafe 0%, #eef6ff 100%);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 2rem;

    color: #002E5F;

    box-shadow: 0 8px 22px rgba(0,46,95,0.12);
}

.career-icon-modern i{
    line-height: 1;
}

/* =========================
   BADGES
========================= */

.badge-soft-modern{

    background: rgba(181,141,27,0.12);

    color: #8f6f14;

    padding: 8px 14px;

    border-radius: 30px;

    font-size: .85rem;

    font-weight: 700;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:991px){

    .career-card-modern{
        padding: 30px;
    }

    .career-top{
        flex-direction: column;
        align-items: flex-start;
    }

    .career-line{
        width: 100%;
    }
}

/* =========================
   FEATURES
========================= */

.feature-item{
    display: flex;
    align-items: center;
    gap: 12px;

    margin-bottom: 18px;

    font-weight: 500;
}

.feature-item i{
    color: #002E5F;
}

/* =========================
   PROGRAM CARDS
========================= */

.career-card{
    background: white;

    border-radius: 28px;

    padding: 35px;

    box-shadow: 0 10px 28px rgba(0,0,0,0.06);

    transition: .3s ease;

    height: 100%;
}

.career-card:hover{
    transform: translateY(-10px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.12);
}

/* =========================
   ICONOS PROGRAMAS
========================= */

.career-icon{
    width: 78px;
    height: 78px;

    border-radius: 20px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 2rem;

    color: #002E5F;
}

/* =========================
   BADGES
========================= */

.badge-soft{
    background: #eef4fb;

    color: #002E5F;

    padding: 8px 14px;

    border-radius: 30px;

    font-weight: 600;
}

/* =========================
   TEAM CARDS
========================= */

.team-card{
    background: rgba(255,255,255,0.95);

    border-radius: 28px;

    padding: 35px 25px;

    text-align: center;

    color: #002E5F;

    transition: .3s ease;

    box-shadow: 0 12px 30px rgba(0,0,0,0.12);

    height: 100%;
}

.team-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(0,0,0,0.18);
}

/* =========================
   AVATAR
========================= */

.team-avatar{
    width: 95px;
    height: 95px;

    border-radius: 50%;

    background: #eef4fb;

    overflow: hidden;

    display: flex;
    align-items: center;
    justify-content: center;

    margin: auto;

    border: 4px solid rgba(255,255,255,0.7);

    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

/* Imagen avatar */

.team-avatar img{
    width: 100%;
    height: 100%;

    object-fit: cover;
}

/* Icono fallback */

.team-avatar i{
    font-size: 2.5rem;
    color: #002E5F;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 991px){

    .glass-info-card{
        padding: 28px;
    }

    .career-card{
        padding: 28px;
    }

    .team-card{
        padding: 28px 20px;
    }

    .mini-stat{
        width: 100%;
        text-align: center;
    }
}

</style>

@endsection