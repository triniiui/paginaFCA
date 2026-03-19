<header class="sticky-top bg-white">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- 🔹 Barra superior con logo, lema, búsqueda e iconos -->
    <div class="container-fluid px-4 py-2">
        <div class="row align-items-center">
            <!-- Logo UADY -->
            <div class="col-auto">
                <a href={{ route('home') }}>
                    <img src="{{ asset('assets/img/uady-logo.png') }}" alt="UADY" height="85">
                </a>
            </div>
            
            <!-- Lema -->
            <div class="col">
                <h1 class="lema mb-0">"Luz, Ciencia y Verdad"</h1>
            </div>
            
            <!-- Búsqueda e iconos -->
            <div class="col-auto">
                <div class="d-flex align-items-center gap-3">
                    <input type="text" placeholder="Buscar" class="buscador">
                    
                    <div class="iconos-barra d-flex align-items-center">
                        <a href="#" class="icono-item"><i class="bi bi-search"></i></a>
                        <a href="#" class="icono-item"><i class="bi bi-translate"></i></a>
                        <a href="#" class="icono-item"><i class="bi bi-laptop"></i></a>
                        <a href="#" class="icono-item"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="icono-item"><i class="bi bi-calendar-fill"></i></a>
                        <a href="#" class="icono-item"><i class="bi bi-person-fill"></i></a>
                        <a href="#" class="icono-item"><i class="bi bi-chat-dots-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Menú dorado -->
    <nav class="bg-uady-gold">
        <div class="container-fluid px-4">
            <ul class="nav nav-fill menu-dorado">
                <li class="nav-item"><a class="nav-link" href="{{ route('aspirantes') }}">Aspirantes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('estudiantes') }}">Estudiantes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('docentes') }}">Docentes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('egresados') }}">Egresados</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Comunidad</a></li>
            </ul>
        </div>
    </nav>

    <!-- 🔹 Menú azul -->
    <nav class="bg-uady-blue">
        <div class="container-fluid px-4">
            <ul class="nav nav-fill menu-azul">
                <li class="nav-item"><a class="nav-link" href="#">Nuestra Universidad</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Oferta Educativa</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Investigación</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Vinculación</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Internacionalización</a></li>
            </ul>
        </div>
    </nav>

</header>