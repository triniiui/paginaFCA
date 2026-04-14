<header class="sticky-top bg-white border-bottom">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        /* 1. Colores y Fuentes */
        :root {
            --uady-blue: #012143;
            --uady-gold: #b58d1b;
            --uady-light-gold: #f7d666; 
        }

        .lema-uady {
            font-family: 'Times New Roman', serif;
            font-style: italic;
            color: var(--uady-blue);
            font-size: 1.2rem;
            letter-spacing: -0.5px;
        }

        /* 2. Buscador */
        .search-box-container {
            border-bottom: 1px solid #ccc;
            padding-bottom: 2px;
            width: 200px;
        }
        .buscador-input {
            border: none;
            outline: none;
            font-size: 0.9rem;
            width: 100%;
        }

        /* 3. Iconos */
        .icono-item-link {
            color: var(--uady-blue);
            text-decoration: none;
            font-size: 0.75rem;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .icono-item-link i { font-size: 1.1rem; }
        .icono-item-link:hover { color: var(--uady-gold); }

        .bg-uady-gold { background-color: var(--uady-gold) !important; }
        .bg-uady-blue { background-color: var(--uady-blue) !important; }

        .nav-link-uady {
            color: white !important;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 6px 5px !important;
            transition: 0.2s;
        }
        .nav-link-uady:hover { background: rgba(255,255,255,0.15); }

        /* 5. EL COMBO / SUBMENÚ  */
        .uady-dropdown:hover > .uady-gold-menu {
            display: block; /* Abre al pasar el mouse */
        }

        .uady-gold-menu {
            display: none;
            position: absolute;
            background-color: var(--uady-light-gold);
            min-width: 320px;
            border-radius: 0 0 8px 8px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.1);
            z-index: 1000;
            border: none;
            margin-top: 0;
        }

        .uady-gold-menu .dropdown-item {
            color: #333;
            font-size: 0.85rem;
            padding: 8px 20px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            white-space: normal;
        }

        .uady-gold-menu .dropdown-item:hover {
            background-color: rgba(0,0,0,0.05);
            color: var(--uady-blue);
        }

        /* Estilo para el botón activo del menú azul */
        .uady-dropdown:hover > .nav-link-uady {
            background-color: white !important;
            color: var(--uady-blue) !important;
        }
    </style>

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

    <nav class="bg-uady-gold">
        <div class="container-fluid px-4">
            <ul class="nav nav-justified">
                <li class="nav-item"><a class="nav-link nav-link-uady" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link nav-link-uady" href="{{ route('aspirantes') }}">Aspirantes</a></li>
                <li class="nav-item"><a class="nav-link nav-link-uady" href="{{ route('estudiantes') }}">Estudiantes</a></li>
                <li class="nav-item"><a class="nav-link nav-link-uady" href="{{ route('docentes') }}">Docentes</a></li>
                <li class="nav-item"><a class="nav-link nav-link-uady" href="{{ route('egresados') }}">Egresados</a></li>
            </ul>
        </div>
    </nav>

    <nav class="bg-uady-blue">
        <div class="container-fluid px-4">
            <ul class="nav nav-justified">
                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady">Nuestra Universidad</a>
                    <div class="uady-gold-menu"><a class="dropdown-item" href="{{ route('facultad.acerca') }}">Acerca de Nosotros</a>
                       <a class="dropdown-item" href="{{ route('facultad.innovacion') }}">Centro de Innovación Pedagógica</a>
                        <a class="dropdown-item" href="{{ route('facultad.directorio') }}">Directorio</a>
                        <a class="dropdown-item" href="{{ route('facultad.historia') }}">Historia</a>
                        <a class="dropdown-item" href="{{ route('facultad.matricula') }}">Matrícula</a>
                        <a class="dropdown-item" href="{{ route('facultad.organizacion') }}">Organización</a>
                        <a class="dropdown-item" href="{{ route('facultad.plan') }}">Plan de Desarrollo</a>
                    </div>
                </li>

                 <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady">Oferta Educativa</a>
                    <div class="uady-gold-menu"><a class="dropdown-item" href="{{ route('ofEdu.ofeduCo') }}">Oferta Educativa Continua</a>
                       <a class="dropdown-item" href="{{ route('ofEdu.proLin') }}">Oferta Licenciatura</a>
                        <a class="dropdown-item" href="{{ route('ofEdu.proPos') }}">Oferta Posgrado</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady">Investigación</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="{{ route('investigacion.coordinacionInvestigacion') }}">Coordinación de Investigación</a>
                        <a class="dropdown-item" href="{{ route('investigacion.cuerposAcademicos') }}">Cuerpos Académicos</a>
                        <a class="dropdown-item" href="{{ route('investigacion.indicadoresEconomicos') }}">Indicadores Economómicos del Estado de Yucatán</a>
                        <a class="dropdown-item" href="{{ route('investigacion.publicacionesCientificas') }}">Publicaciones Científicas</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady">Vinculación</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="{{ route('vinculacion.centroDesarrolloNegocios') }}">Centro de Desarrollo de Negocios</a>
                        <a class="dropdown-item" href="{{ route('vinculacion.coordinacionVinculacionEstrategica') }}">Coordinación de Vinculación Estratégica</a>
                        <a class="dropdown-item" href="{{ route('vinculacion.moduloAtencionFiscal') }}">Modulo de Atención Fiscal</a>
                        <a class="dropdown-item" href="{{ route('vinculacion.programaPadrinoAcademico') }}">Programa Padrino Académico</a>
                    </div>
                </li>

                <li class="nav-item uady-dropdown position-relative">
                    <a class="nav-link nav-link-uady">Internacionalización</a>
                    <div class="uady-gold-menu">
                        <a class="dropdown-item" href="{{ route('internacionalizacion.internationalEntrepreneurshipLab') }}">International Entrepreneurship-Lab Smart Money</a>
                        <a class="dropdown-item" href="{{ route('internacionalizacion.movilidadInternacional') }}">Movilidad Internacional</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>