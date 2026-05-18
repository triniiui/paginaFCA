<header class="sticky-top bg-white border-bottom">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="container-fluid px-4 py-2">
        <div class="row align-items-center">
            <div class="col-auto">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/uady-logo.png') }}" alt="UADY" height="85">
                </a>
            </div>
            
            <div class="col d-none d-lg-block">
                <h1 class="lema-uady mb-0">"Luz, Ciencia y Verdad"</h1>
            </div>
            
            <div class="col-auto">
                <div class="d-flex align-items-center gap-3">
                    <div class="search-box-container d-flex align-items-center">
                        <input type="text" placeholder="Buscar" class="buscador-input">
                        <i class="bi bi-search text-primary"></i>
                    </div>
                    
                    <div class="vr mx-1" style="height: 25px; opacity: 0.2;"></div>

                    <div class="d-flex align-items-center gap-3">
                        <a href="#" class="icono-item-link"><i class="bi bi-translate"></i> <span class="d-none d-xxl-inline">Inglés</span></a>
                        <a href="https://uady.mx/servicioslinea" class="icono-item-link"><i class="bi bi-laptop"></i> <span class="d-none d-xxl-inline">Servicios</span></a>
                        <a href="https://outlook.office.com/mail/" class="icono-item-link"><i class="bi bi-envelope"></i></a>
                        <a href="https://uady.mx/calendario" class="icono-item-link"><i class="bi bi-calendar3"></i></a>
                        <a href="https://uady.mx/trabajadores" class="icono-item-link"><i class="bi bi-person"></i></a>
                        <a href="https://uady.mx/protocolo-violencia-de-genero" class="icono-item-link"><i class="bi bi-chat-left-dots"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar responsive -->
    <nav class="navbar navbar-expand-lg bg-uady-gold" style="padding-top: 2px; padding-bottom: 2px;">
<<<<<<< HEAD
        <div class="container-fluid px-lg-5 px-3">
=======
        <div class="container-fluid px-4">
>>>>>>> 8774a4509799b31300ec8dd523fceb4be11aa5a0
            <!-- Botón hamburguesa -->
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUady" aria-controls="navbarUady" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenedor colapsable -->
            <div class="collapse navbar-collapse" id="navbarUady">
                <ul class="navbar-nav ms-lg-5 gap-lg-2 align-items-lg-center">
                    <li class="nav-item uady-dropdown position-relative">
                        <a class="nav-link nav-link-uady" href="#">Nuestra Universidad</a>
                        <div class="uady-gold-menu">
                            <a class="dropdown-item" href="{{ route('facultad.acerca') }}">Acerca de Nosotros</a>
                            <a class="dropdown-item" href="{{ route('facultad.aspirantes') }}">Aspirantes</a>
                            <a class="dropdown-item" href="{{ route('facultad.estudiantes') }}">Estudiantes</a>
                            <a class="dropdown-item" href="{{ route('facultad.egresados') }}">Egresados</a>
                            <a class="dropdown-item" href="{{ route('facultad.docentes') }}">Docentes</a>
                            <a class="dropdown-item" href="{{ route('facultad.directorio') }}">Directorio</a>
                            <a class="dropdown-item" href="{{ route('facultad.historia') }}">Historia</a>
                            <a class="dropdown-item" href="{{ route('facultad.matricula') }}">Matrícula</a>
                            <a class="dropdown-item" href="{{ route('facultad.organizacion') }}">Organización</a>
                            <a class="dropdown-item" href="{{ route('facultad.plan') }}">Plan de Desarrollo</a>
                        </div>
                    </li>

                    <li class="nav-item uady-dropdown position-relative">
                        <a class="nav-link nav-link-uady" href="#">Oferta Educativa</a>
                        <div class="uady-gold-menu">
                            <a class="dropdown-item" href="{{ route('ofEdu.ofeduCo') }}">Oferta Educativa Continua</a>
                            <a class="dropdown-item" href="{{ route('ofEdu.proLin') }}">Oferta Licenciatura</a>
                            <a class="dropdown-item" href="{{ route('ofEdu.proPos') }}">Oferta Posgrado</a>
                        </div>
                    </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady" href="#">Investigación</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="{{ route('investigacion.coordinacionInvestigacion') }}">Coordinación de Investigación</a>
                        <a class="dropdown-item" href="{{ route('investigacion.cuerposAcademicos') }}">Cuerpos Académicos</a>
                        <a class="dropdown-item" href="{{ route('investigacion.indicadoresEconomicos') }}">Indicadores Economómicos del Estado de Yucatán</a>
                        <a class="dropdown-item" href="{{ route('investigacion.publicacionesCientificas') }}">Publicaciones Científicas</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady" href="#">Vinculación</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="{{ route('vinculacion.centroDesarrolloNegocios') }}">Centro de Desarrollo de Negocios</a>
                        <a class="dropdown-item" href="{{ route('vinculacion.coordinacionVinculacionEstrategica') }}">Coordinación de Vinculación Estratégica</a>
                        <a class="dropdown-item" href="{{ route('vinculacion.moduloAtencionFiscal') }}">Modulo de Atención Fiscal</a>
                        <a class="dropdown-item" href="{{ route('vinculacion.programaPadrinoAcademico') }}">Programa Padrino Académico</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady" href="#">Internacionalización</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="{{ route('internacionalizacion.internationalEntrepreneurshipLab') }}">International Entrepreneurship-Lab Smart Money</a>
                        <a class="dropdown-item" href="{{ route('internacionalizacion.movilidadInternacional') }}">Movilidad Internacional</a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
       <style>

/* =========================
   NAVBAR GENERAL
========================= */

.bg-uady-gold{
    background-color: #b38b00;
}

.navbar-nav{
    gap: 10px;
}

/* =========================
   LINKS PRINCIPALES
========================= */

.nav-link-uady{
    color: white !important;
    font-weight: 600;
    font-size: 0.95rem;

    padding: 14px 20px !important;

    border-radius: 14px 14px 0 0;

    transition: all .2s ease;

    white-space: nowrap;
}

/* Hover del botón principal */
.uady-dropdown:hover .nav-link-uady{
    background-color: white;
    color: #012143 !important;
}

/* =========================
   DROPDOWN
========================= */

.uady-dropdown{
    position: relative;
}

/* Menú */
.uady-gold-menu{
    position: absolute;

    top: 100%;
    left: 0;

   width: 260px;
    max-width: 90vw;

    background-color: #b38b00;

    border-radius: 0 0 18px 18px;

    overflow: hidden;

    display: none;

    z-index: 999;

    box-shadow: 0 10px 24px rgba(0,0,0,0.18);
}

/* Mostrar dropdown desktop */
@media (min-width: 992px){

    .uady-dropdown:hover .uady-gold-menu{
        display: block;
    }

    /* Último dropdown hacia la izquierda */
    .navbar-nav .uady-dropdown:last-child .uady-gold-menu{
        left: auto;
        right: 0;
    }
}

/* Opciones internas */
.uady-gold-menu .dropdown-item{

    color: white;

    padding: 10px 18px;

    display: flex;
    align-items: center;

    min-height: 42px;

    font-size: 0.92rem;
    line-height: 1.2;

    white-space: normal;

    transition: background .2s ease;
}

/* Hover interno */
.uady-gold-menu .dropdown-item:hover{
    background-color: rgba(255,255,255,0.12);
    color: white;
}

/* =========================
   MOBILE
========================= */

@media (max-width: 991px){

    .navbar-collapse{

        max-height: 85vh;

        overflow-y: auto;

        background-color: #b38b00;

        margin-top: 8px;

        border-radius: 0 0 14px 14px;
    }

    .navbar-nav{
        gap: 0;
        margin-left: 0 !important;
        padding: 10px 0;
    }

    .nav-link-uady{

        display: block;

        width: 100%;

        padding: 14px 18px !important;

        border-radius: 0;

        border-bottom: 1px solid rgba(255,255,255,0.12);
    }

    .uady-gold-menu{

        position: static !important;

        width: 100%;

        max-width: 100%;

        display: block !important;

        border-radius: 0;

        box-shadow: none;

        background-color: rgba(0,0,0,0.08);
    }

    .uady-gold-menu .dropdown-item{

        min-height: auto;

        padding: 12px 28px;

        font-size: 0.9rem;
    }

    .navbar-toggler{
        border: 2px solid white !important;
    }

    .navbar-toggler:focus{
        box-shadow: none !important;
    }
}

</style>
    </nav>
</header>