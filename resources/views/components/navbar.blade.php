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
    <nav class="navbar navbar-expand-lg bg-uady-gold">
        <div class="container-fluid px-4">
            <!-- Botón hamburguesa -->
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUady" aria-controls="navbarUady" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenedor colapsable -->
            <div class="collapse navbar-collapse" id="navbarUady">
                <ul class="navbar-nav nav-justified w-100">
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
                    <a class="nav-link nav-link-uady" href="#">Oferta Educativa</a>
                    <div class="uady-gold-menu"><a class="dropdown-item" href="{{ route('ofEdu.ofeduCo') }}">Oferta Educativa Continua</a>
                       <a class="dropdown-item" href="{{ route('ofEdu.proLin') }}">Oferta Licenciatura</a>
                        <a class="dropdown-item" href="{{ route('ofEdu.proPos') }}">Oferta Posgrado</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady" href="#">Investigación</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="#">¿Quiénes somos?</a>
                        <a class="dropdown-item" href="#">Directorio</a>
                        <a class="dropdown-item" href="#">Historia</a>
                        <a class="dropdown-item" href="#">Gaceta Universitaria</a>
                        <a class="dropdown-item" href="#">Legislación Universitaria</a>
                        <a class="dropdown-item" href="#">Transparencia</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady" href="#">Vinculación</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="#">¿Quiénes somos?</a>
                        <a class="dropdown-item" href="#">Directorio</a>
                        <a class="dropdown-item" href="#">Historia</a>
                        <a class="dropdown-item" href="#">Gaceta Universitaria</a>
                        <a class="dropdown-item" href="#">Legislación Universitaria</a>
                        <a class="dropdown-item" href="#">Transparencia</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady" href="#">Internacionalización</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="#">¿Quiénes somos?</a>
                        <a class="dropdown-item" href="#">Directorio</a>
                        <a class="dropdown-item" href="#">Historia</a>
                        <a class="dropdown-item" href="#">Gaceta Universitaria</a>
                        <a class="dropdown-item" href="#">Legislación Universitaria</a>
                        <a class="dropdown-item" href="#">Transparencia</a>
                    </div>
                </li>
            </ul>
                </ul>
            </div>
        </div>
    </nav>
</header>
