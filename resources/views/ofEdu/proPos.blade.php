@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/proPos/p1.png"
    titulo="Programas de Posgrado"
    subtitulo="Impulsa tu futuro profesional"
/>

{{-- HERO INFO --}}
<section class="py-5 seccion-azul-suave">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <h2 class="fw-bold display-5 mb-4" style="color:#002E5F;">
                    Especialízate y lleva tu perfil profesional al siguiente nivel
                </h2>

                <p class="lead text-muted">
                    Nuestros programas de posgrado están diseñados para fortalecer
                    competencias estratégicas, liderazgo, innovación y toma de decisiones
                    en entornos empresariales globales.
                </p>

                <div class="d-flex flex-wrap gap-3 mt-4">

                    <div class="mini-stat">
                        <h4>4</h4>
                        <span>Posgrados</span>
                    </div>

                    <div class="mini-stat">
                        <h4>18</h4>
                        <span>Meses promedio</span>
                    </div>

                    <div class="mini-stat">
                        <h4>Global</h4>
                        <span>Visión estratégica</span>
                    </div>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="glass-info-card">

                    <h4 class="fw-bold mb-4">
                        ¿Por qué estudiar un posgrado?
                    </h4>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Formación especializada
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Liderazgo profesional
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Networking empresarial
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Innovación y estrategia
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PROGRAMAS --}}
<section class="py-5 seccion-blanca overflow-hidden">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6" style="color:#002E5F;">
                Nuestros programas de posgrado
            </h2>
        </div>
           <div class="row g-4">
    <x-iconoCard
        icono="bi-megaphone"
        titulo="Mercadotecnia Digital"
        descripcion="Innovación, marketing digital y estrategias comerciales."
        :badges="['Marketing', 'Digital']"
        target="mmd"
    />

    <x-iconoCard
        icono="bi-receipt"
        titulo="Impuestos"
        descripcion="Especialización fiscal y soluciones tributarias."
        :badges="['Fiscal', 'Legal']"
        target="mi"
    />

    <x-iconoCard
        icono="bi-briefcase"
        titulo="Dirección Estratégica"
        descripcion="Liderazgo y toma de decisiones organizacionales."
        :badges="['Liderazgo', 'Gestión']"
        target="mde"
    />

    <x-iconoCard
        icono="bi-cash-stack"
        titulo="Finanzas"
        descripcion="Optimización y análisis financiero empresarial."
        :badges="['Finanzas', 'Estrategia']"
        target="mf"
    />

</div>

    </div>

</section>

        <div class="collapse mb-4" id="mmd">
            <div class="detail-card">
                <h4 class="fw-bold">Maestría en Mercadotecnia Digital</h4>

                <p>
                    Formación de líderes estratégicos en marketing digital,
                    innovación y análisis de tendencias.
                </p>

                <ul>
                    <li>Duración: 18 meses</li>
                    <li>Clases: Viernes y sábado</li>
                    <li>Contacto: mmd@correo.uady.mx</li>
                </ul>
            </div>
        </div>

        <div class="collapse mb-4" id="mi">
            <div class="detail-card">
                <h4 class="fw-bold">Maestría en Impuestos</h4>

                <p>
                    Especialización fiscal con enfoque ético y estratégico.
                </p>

                <ul>
                    <li>Duración: 18 meses</li>
                    <li>Clases: Viernes y sábado</li>
                    <li>Contacto: mi@correo.uady.mx</li>
                </ul>
            </div>
        </div>

        <div class="collapse mb-4" id="mde">
            <div class="detail-card">
                <h4 class="fw-bold">Maestría en Dirección Estratégica</h4>

                <p>
                    Formación en liderazgo, gestión y dirección organizacional.
                </p>

                <ul>
                    <li>Duración: 18 meses</li>
                    <li>Clases: Viernes y sábado</li>
                    <li>Contacto: mde@correo.uady.mx</li>
                </ul>
            </div>
        </div>

        <div class="collapse mb-4" id="mf">
            <div class="detail-card">
                <h4 class="fw-bold">Maestría en Finanzas</h4>

                <p>
                    Optimización de recursos financieros en entornos globales.
                </p>

                <ul>
                    <li>Duración: 18 meses</li>
                    <li>Clases: Viernes y sábado</li>
                    <li>Contacto: maestria.finanzas@correo.uady.mx</li>
                </ul>
            </div>
        </div>

    </div>

</section>


{{-- COORDINADORES --}}

<section class="py-5 seccion-azul-suave">

    <div class="container">

        <div class="text-center text-white mb-5">
            
            <h2 class="fw-bold display-6" style="color:#002E5F;">
                Equipo académico
            </h2>

        </div>

        <div class="row g-4">

            <x-team-card
                titulo="Finanzas"
                nombre="Dra. Betsy May"
                correo="betsy.may@correo.uady.mx"
            />

            <x-team-card
                titulo="Impuestos"
                nombre="Dr. Martín Puc"
                correo="martin.puc@correo.uady.mx"
            />

            <x-team-card
                titulo="Mercadotecnia Digital"
                nombre="María Cristina Mata"
                correo="maria.mata@correo.uady.mx"
            />

            <x-team-card
                titulo="Dirección Estratégica"
                nombre="Idalia de los Santos"
                correo="idalia.santos@correo.uady.mx"
            />

        </div>

    </div>

</section>

<style>

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

    background: rgba(255,255,255,0.65);

    backdrop-filter: blur(12px);

    border-radius: 28px;

    padding: 40px;

    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
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

    background: #f3f7fc;

    border-radius: 28px;

    padding: 35px 28px;

    box-shadow: 0 10px 28px rgba(0,0,0,0.06);

    transition: .3s ease;

    height: 100%;
}

.career-card:hover{

    transform: translateY(-10px);

    box-shadow: 0 18px 40px rgba(0,0,0,0.12);
}

/* =========================
   ICONOS
========================= */

.career-icon{

    width: 82px;

    height: 82px;

    border-radius: 24px;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 2rem;

    background: #dfeaf8;

    color: #002E5F;

    box-shadow: 0 6px 18px rgba(0,46,95,0.10);
}

/* =========================
   BADGES
========================= */

.badge-soft{

    background: rgba(181,141,27,0.12);

    color: #b38b00;

    padding: 8px 14px;

    border-radius: 30px;

    font-size: .85rem;

    font-weight: 700;
}

/* =========================
   BOTÓN
========================= */

.btn-uady{

    background: #002E5F;

    color: white;

    border-radius: 14px;

    border: none;

    padding: 12px;

    font-weight: 600;

    transition: .3s ease;
}

.btn-uady:hover{

    background: #01427f;

    color: white;

    transform: translateY(-2px);
}

/* =========================
   DETAIL CARD
========================= */

.detail-card{

    background: rgba(255,255,255,0.96);

    border-radius: 24px;

    padding: 35px;

    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

/* =========================
   CTA
========================= */

.cta-box{

    background: white;

    border-radius: 32px;

    padding: 60px 40px;

    box-shadow: 0 10px 35px rgba(0,0,0,0.08);
}

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
   RESPONSIVE
========================= */

@media (max-width: 991px){

    .glass-info-card{
        padding: 28px;
    }

    .career-card{
        padding: 28px 22px;
    }

    .mini-stat{

        width: 100%;

        text-align: center;
    }

    .cta-box{
        padding: 40px 25px;
    }

    .career-icon{

        width: 72px;

        height: 72px;

        font-size: 1.7rem;
    }
}

</style>

@endsection

