@extends('layouts.vistas')

@section('vistas-content')


<x-hero 
    imagen="assets/img/internacionalizacion/i1.png"
    titulo="International Entrepreneurship-Lab Smart Money"
    subtitulo="Poner bien el subtítulo"
/>

<div class="container my-5">

    {{-- Introducción en bloque destacado --}}
    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <p>
                La Facultad de Contaduría y Administración ejerce su compromiso como institución aliada en la plataforma digital europea y latinoamericana de inteligencia colectiva-multicultural para el emprendimiento e innovación digital <strong>International Entrepreneurship-Lab Smart Money</strong>.
            </p>
            <p>
                Esta iniciativa abre paso a la internacionalización y readaptación de modelos de negocio, participando activamente nuestros profesores y alumnos como actores de innovación en el contexto de la transformación digital y la sostenibilidad ambiental.
            </p>
            <p>
                Todo ello es posible gracias a la creación de ecosistemas digitales de negocios e inteligencia multicultural junto a estudiantes, académicos, universidades, empresarios, expertos e inversionistas que comparten el know-how con enfoque internacional. 
                Además, ofrece la oportunidad de estancias en Alemania con universidades miembro para alumnos, profesores y administrativos.
            </p>
        </div>
    </div>

    {{-- Impacto y objetivos en tarjetas --}}
    <div class="row text-center mb-5">
        <div class="col-md-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-globe2 fs-1 text-primary"></i>
                    <h5 class="fw-bold mt-2">Transformación Digital</h5>
                    <p>Potencializando capacidades académicas de enseñanza, investigación, emprendimiento e innovación en red digital con Europa y Latinoamérica.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-people-fill fs-1 text-success"></i>
                    <h5 class="fw-bold mt-2">Impacto Internacional</h5>
                    <p>Brindando un impacto nacional e internacional en ámbitos sociales, económicos y ambientales, ejes de gran importancia para nuestra facultad.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Links de información y registro --}}
    <div class="text-center mb-5">
        <a href="https://www.ieism.com" target="_blank" class="btn btn-primary me-3">Más información</a>
        <a href="https://forms.gle/ECtLQ8CA1F89gnFR7" target="_blank" class="btn btn-outline-primary">Registro</a>
    </div>

    {{-- Profesores en lista estilizada --}}
    <h3 class="fw-bold text-center mb-4">Profesores</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Dra. Anel Flores Novelo</li>
        <li class="list-group-item">Dra. María del Carmen Rachó Barroso</li>
        <li class="list-group-item">Dra. Teresa Sabido Domínguez</li>
        <li class="list-group-item">Dr. Gustavo Alberto Barredo Baqueiro</li>
        <li class="list-group-item">Dr. Valentín Alonso Novelo</li>
        <li class="list-group-item">Mtra. Gina Estefanía Godínez Molina</li>
        <li class="list-group-item">Mtro. Gustavo López</li>
        <li class="list-group-item">Lic. Mary Efraín Yerves Irigoyen</li>
    </ul>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Equipo Académico</h3>

    <div class="row text-center">

        {{-- Dra. Anel Flores --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/anel_flores.png') }}" alt="Dra. Anel Flores" 
                         class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">Dra. Anel Flores</h5>
                    <p class="text-muted">IELSM - Coordinadora<br>Universidad Autónoma de Yucatán</p>
                </div>
            </div>
        </div>

        {{-- Dr. Valentín Alonso --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/valentin_alonso.png') }}" alt="Dr. Valentín Alonso" 
                         class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">Dr. Valentín Alonso</h5>
                    <p class="text-muted">Universidad Autónoma de Yucatán</p>
                </div>
            </div>
        </div>

        {{-- Dra. Teresa Sabido --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/teresa_sabido.png') }}" alt="Dra. Teresa Sabido" 
                         class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">Dra. Teresa Sabido</h5>
                    <p class="text-muted">Universidad Autónoma de Yucatán</p>
                </div>
            </div>
        </div>

        {{-- Mtro. Marby Yerbes --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/marby_yerbes.png') }}" alt="Mtro. Marby Yerbes" 
                         class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">Mtro. Marby Yerbes</h5>
                    <p class="text-muted">Universidad Autónoma de Yucatán</p>
                </div>
            </div>
        </div>

        {{-- Mtro. Gustavo López --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/gustavo_lopez.png') }}" alt="Mtro. Gustavo López" 
                         class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">Mtro. Gustavo López</h5>
                    <p class="text-muted">Universidad Autónoma de Yucatán</p>
                </div>
            </div>
        </div>

        {{-- Dra. Maricarmen Rachó --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/maricarmen_racho.png') }}" alt="Dra. Maricarmen Rachó" 
                         class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">Dra. Maricarmen Rachó</h5>
                    <p class="text-muted">Universidad Autónoma de Yucatán</p>
                </div>
            </div>
        </div>

        {{-- MIGIM. Gina Godínez --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/gina_godinez.png') }}" alt="MIGIM. Gina Godínez" 
                         class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">MIGIM. Gina Godínez</h5>
                    <p class="text-muted">Coordinadora de Marketing Estratégico y Comunicación<br>Universidad Autónoma de Yucatán</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container my-5">

    {{-- Título de testimonios --}}
    <h3 class="fw-bold text-center mb-4">Alumnos destacados del programa</h3>

    {{-- Testimonios en tarjetas --}}
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Monserrat Vargas Jiménez</h5>
                    <p class="text-muted">Mercadotecnia y Negocios Internacionales</p>
                    <p>Es una experiencia única y completa. Cada sesión brinda una oportunidad para trabajar en equipo, potencializar ideas, obtener nuevos aprendizajes, ser empáticos, responsables y desarrollar capacidades organizativas.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Viviana Aminairy Poor Trejo</h5>
                    <p class="text-muted">Mercadotecnia y Negocios Internacionales</p>
                    <p>El IELSM es una gran experiencia, el programa permite tener contacto directo con empresas nacionales e internacionales y aprender de profesionales y especialistas en el área.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Javier Arturo Vallejo Olán</h5>
                    <p class="text-muted">Mercadotecnia y Negocios Internacionales</p>
                    <p>El IELSM me brindó la oportunidad de desarrollar un proyecto de marco social junto a alumnos, empresarios y expertos de América y Europa. Esta experiencia fue una gran influencia para mi carrera profesional, te hace adquirir una perspectiva más global.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Jessica Guadalupe Alpuche Pacheco</h5>
                    <p class="text-muted">Comercio Internacional</p>
                    <p>Permite conectar con estudiantes de negocios internacionales, practicar el idioma inglés y realizar tareas donde pude conocer instrumentos de trabajo para desarrollar planes e impulsar a empresas a expandir sus fronteras.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Jonathan Efraín Vázquez Galeana</h5>
                    <p class="text-muted">Comercio Internacional</p>
                    <p>Participar en la plataforma me hizo sumar experiencia en el análisis y evaluación de modelos de negocios de diferentes empresas según su tamaño, además de aprender a colaborar en equipos de trabajo.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Ana Vanesa May Tec</h5>
                    <p class="text-muted">Administración</p>
                    <p>Mi experiencia en el IELSM ha sido gratificante ya que aprendo varias cosas, por ejemplo, de los catalizadores, expertos, empresarios y me nutro de los canvas utilizados.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Mariana Carolina Gómez Porter</h5>
                    <p class="text-muted">Administración</p>
                    <p>Buena experiencia en el IELSM, los catalizadores responden dudas y escuchan nuestras opiniones en las sesiones. Además, brindan consejos para exponer nuestros proyectos y presentarlos a empresarios y expertos.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Imagen de fases IELSM --}}
    <div class="text-center mt-5">
        <img src="{{ asset('images/ielsm_phases.png') }}" alt="Fases IELSM" class="img-fluid rounded shadow">
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Galería</h3>

    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('images/galeria1.png') }}" alt="Galería IELSM 1" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('images/galeria2.png') }}" alt="Galería IELSM 2" class="img-fluid rounded shadow">
        </div>
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Contacto</h3>

    <div class="row align-items-center">
        <div class="col-md-4 text-center mb-3">
            <img src="{{ asset('images/anel_flores.png') }}" alt="Dra. Anel Flores Novelo" 
                 class="img-fluid rounded shadow" style="max-width:250px;">
        </div>
        <div class="col-md-8">
            <h5 class="fw-bold">Dra. Anel Flores Novelo</h5>
            <p class="text-muted">
                Coordinadora del IELSM en la Facultad de Contaduría y Administración de la Universidad Autónoma de Yucatán
            </p>
            <p>
                <a href="mailto:anel.flores@correo.uady.mx" class="text-decoration-none">
                    anel.flores@correo.uady.mx
                </a>
            </p>
        </div>
    </div>

</div>




@endsection