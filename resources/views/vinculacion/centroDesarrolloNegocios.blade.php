@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/vinculacion/v6.jpg"
    titulo="Centro de Desarrollo de Negocios"
    subtitulo="Poner el subtítulo correcto"
/>
  <div class="alert alert-info mt-3 text-center">
<div class="container my-5">

    <!-- ENCABEZADO -->
    <h2 id="CEDENE" class="fw-bold text-center mb-4" style="color: #002E5F;">Centro de Desarrollo de Negocios (CEDENE)</h2>

    <!-- INTRODUCCIÓN -->
    <p class="text-justify">
        La Facultad de Contaduría y Administración, comprometida con el desarrollo económico del estado y con la responsabilidad social de la Universidad Autónoma de Yucatán, crea el Centro de Desarrollo de Negocios (CEDENE) como una iniciativa para vincular formalmente al personal académico del plantel con el sector empresarial. Esto se realiza a través de asesorías y consultorías especializadas, con el objetivo de brindar apoyo a quienes tienen la responsabilidad de operar las pequeñas y medianas empresas (PyMEs) de la región.
    </p>

    <p class="text-justify">
        El CEDENE ofrece soluciones integrales a los retos operativos, necesidades específicas y proyectos en desarrollo de las PyMEs, promoviendo así la innovación y el crecimiento competitivo.
    </p>

    <!-- MISIÓN -->
    <div class="bg-light p-4 rounded shadow-sm my-4">
        <h4 id="mision-CEDENE" class="fw-bold" style="color: #002E5F;">Misión</h4>
        <p>
            Contribuir al desarrollo económico del estado a través de asesorías y consultorías especializadas para PyMEs, fomentando la innovación y mejora continua de sus procesos en áreas como mercadotecnia, desarrollo de marcas, comunicación estratégica, diseño de identidad, administración, finanzas y tecnologías de la información, con el propósito de lograr un crecimiento sostenido y competitivo.
        </p>
    </div>

    <div class="container text-black">
        <h2 id="valores-CEDENE" class="fw-bold mb-4 text-center" style="color: #002E5F;">Valores</h2>

        <div class="container">
            <div class="row g-3 justify-content-center text-center">

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Responsabilidad" color="azul" />
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Honestidad" color="dorado" />
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Compromiso" color="azul" />
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Tolerancia" color="dorado" />
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Servicio" color="dorado" />
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Transparencia" color="azul" />
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Calidad" color="dorado" />
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <x-cuadro tipo="texto" contenido="Respeto" color="azul" />
                </div>

            </div>
        </div>
    </div> 
</div>
  </div>
<div class="container my-5">

    <!-- SERVICIOS PRINCIPALES -->
    <h3 id="servicios-CEDENE" class="fw-bold text-center mb-4" style="color: #002E5F;">Servicios principales</h3>

    <div class="row">
        <!-- Asesoría -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h4 class="fw-bold" style="color: #002E5F;">Asesoría</h4>
                    <p>
                        Servicio de acompañamiento continuo que brinda orientación especializada en áreas como 
                        mercadotecnia, desarrollo de marca, comunicación estratégica, diseño de imagen, impuestos, 
                        temas legales, contabilidad, entre otras.
                    </p>
                </div>
            </div>
        </div>

        <!-- Consultoría -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h4 class="fw-bold" style="color: #002E5F;">Consultoría</h4>
                    <p>
                        Servicio orientado a resolver problemas específicos con un enfoque estratégico y de corto plazo. 
                        Implica el desarrollo de proyectos puntuales que generan recomendaciones y soluciones concretas 
                        para mejorar la eficiencia y productividad empresarial.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- RED DE ASESORES -->
    <div class="alert mt-4" role="alert" style="background-color: #002E5F; color: white; border: none;">El CEDENE cuenta con una red de asesores y consultores, conformada por profesionistas y académicos especializados en distintas áreas de atención empresarial.</div>

    <!-- ÁREAS DE ATENCIÓN -->
    <h4 id="areas-CEDENE" class="fw-bold mt-5" style="color: #002E5F;">Áreas de atención</h4>
    <div class="row mt-3">
        <div class="col-md-3"><div class="card p-3 mb-3 text-center">Mercadotecnia</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3 text-center">Comunicación</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3 text-center">Diseño de Imagen</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3 text-center">Administración</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3 text-center">Finanzas</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3 text-center">Asesoría Legal-Fiscal</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3 text-center">Espacios</div></div>
    </div>

</div>

<div class="container my-5">

    <!-- ENCABEZADO CON IMAGEN -->
    <div class="text-center mb-4">
        <img src="{{ asset('assets/img/vinculacion/MD.png') }}" 
            alt="Marketing Digital" 
            class="img-fluid rounded shadow" 
            style="width:800px; height:auto;">
    </div>
    

    <!-- TÍTULO -->
    <div class="bg-light p-4 rounded shadow-sm my-4">
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Marketing Digital</h3>

    <!-- DESCRIPCIÓN -->
    <p class="text-justify">
        Diseñamos campañas y contenidos digitales basados en la investigación de la empresa, los consumidores, los competidores y las tendencias del mercado. 
        Definimos el tipo de contenido, los canales y los tiempos ideales para posicionar la marca y generar clientes potenciales.
    </p>

    <!-- LISTA DE SERVICIOS -->
    <ol class="mt-3">
        <li>Estrategia de Marketing Digital</li>
        <li>Creación y calendarización de contenido editorial</li>
        <li>Gestión de redes sociales</li>
        <li>Optimización de pauta (PPC)</li>
    </ol>

</div>

<div class="container my-5">

    <!-- ENCABEZADO CON IMAGEN -->
    <div class="text-center mb-4">
        
        <img src="{{ asset('assets/img/vinculacion/B.png') }}" 
            alt="Marketing Digital" 
            class="img-fluid rounded shadow" 
            style="width:800px; height:auto;">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Branding</h3>

    <!-- DESCRIPCIÓN -->
    <p class="text-justify">
        Diseñamos estrategias para definir la identidad y percepción de la marca, construir una conexión emocional con el público 
        y diferenciarse de la competencia. Creamos una imagen coherente y memorable a través de elementos como nombre, logotipo, 
        paleta de colores, personalidad, mensaje y estrategia de comunicación.
    </p>

    <!-- LISTA DE SERVICIOS -->
    <ol class="mt-3">
        <li>Estrategia de Marca</li>
        <li>Naming</li>
        <li>Concepto creativo de comunicación</li>
        <li>Storytelling de marca</li>
    </ol>

</div>

<div class="container my-5">

    <!-- ENCABEZADO CON IMAGEN -->
    <div class="text-center mb-4">
        
        <img src="{{ asset('assets/img/vinculacion/DI.png') }}" 
            alt="Marketing Digital" 
            class="img-fluid rounded shadow" 
            style="width:800px; height:auto;">
    </div>

    <!-- TÍTULO -->
    <div class="bg-light p-4 rounded shadow-sm my-4">
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Diseño de Imagen</h3>

    <!-- DESCRIPCIÓN -->
    <p class="text-justify">
        Creamos y fortalecemos la identidad visual de las organizaciones mediante el diseño de logotipos, manuales de identidad corporativa 
        e institucional, así como materiales publicitarios adaptados a medios digitales. Nuestro objetivo es transmitir una imagen coherente, 
        profesional y memorable que conecte con el público y refuerce la estrategia de comunicación.
    </p>

    <!-- LISTA DE SERVICIOS -->
    <ol class="mt-3">
        <li>Diseño o rediseño de logotipos</li>
        <li>Manual de identidad corporativa o institucional</li>
        <li>Diseño publicitario para medios digitales</li>
    </ol>

</div>

<div class="container my-5">

    <!-- ENCABEZADO CON IMAGEN -->
    <div class="text-center mb-4">
        
        <img src="{{ asset('assets/img/vinculacion/IM.png') }}" 
            alt="Marketing Digital" 
            class="img-fluid rounded shadow" 
            style="width:800px; height:auto;">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Investigación de Mercado</h3>

    <!-- DESCRIPCIÓN -->
    <p class="text-justify">
        Recolectamos, analizamos e interpretamos información sobre consumidores, competencia, mercado y conceptos de comunicación 
        para facilitar la toma de decisiones estratégicas que impulsen el crecimiento empresarial.
    </p>

    <!-- LISTA DE SERVICIOS -->
    <ol class="mt-3">
        <li>Focus Groups</li>
        <li>Encuestas digitales, presenciales o telefónicas</li>
        <li>Entrevistas digitales, presenciales o telefónicas</li>
        <li>Mistery Shopper</li>
    </ol>

</div>

<div class="container my-5">

    <!-- ENCABEZADO CON IMAGEN -->
    <div class="text-center mb-4">
        <img src="{{ asset('assets/img/vinculacion/IM.png') }}" 
            alt="Marketing Digital" 
            class="img-fluid rounded shadow" 
            style="width:800px; height:auto;">
    </div>

    <!-- TÍTULO -->
    <div class="bg-light p-4 rounded shadow-sm my-4">
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Servicios de Mercadotecnia</h3>

    <!-- DESCRIPCIÓN -->
    <p class="text-justify">
        Desarrollamos estrategias integrales de mercadotecnia que permiten a las organizaciones posicionarse en el mercado, 
        optimizar sus procesos comerciales y fortalecer la relación con sus clientes. Nuestro enfoque combina análisis, 
        creatividad y gestión para lograr resultados sostenibles.
    </p>

    <!-- LISTA DE SERVICIOS -->
    <ol class="mt-3">
        <li>Plan Estratégico de Mercadotecnia</li>
        <li>Estrategias de precios</li>
        <li>Estrategias y gestión de ventas</li>
    </ol>

</div>

<div class="container my-5">

    <!-- ENCABEZADO CON IMAGEN -->
    <div class="text-center mb-4">
        <img src="{{ asset('assets/img/vinculacion/SA.png') }}" 
            alt="Marketing Digital" 
            class="img-fluid rounded shadow" 
            style="width:800px; height:auto;">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Servicios de Administración</h3>

    <!-- DESCRIPCIÓN -->
    <p class="text-justify">
        Brindamos soluciones administrativas que fortalecen la organización interna de las empresas, optimizan sus procesos 
        y mejoran la eficiencia operativa. Nuestros servicios están diseñados para apoyar la gestión empresarial con herramientas 
        prácticas y estratégicas.
    </p>

    <!-- LISTA DE SERVICIOS -->
    <ol class="mt-3">
        <li>Control de inventario</li>
        <li>Consultoría administrativa</li>
        <li>Manual Organizacional</li>
        <li>Perfiles de puesto</li>
    </ol>

</div>

<div class="container my-5">

    <!-- ENCABEZADO CON IMAGEN -->
    <div class="text-center mb-4">
        <img src="{{ asset('assets/img/vinculacion/SF.png') }}" 
            alt="Marketing Digital" 
            class="img-fluid rounded shadow" 
            style="width:800px; height:auto;">
    </div>

    <!-- TÍTULO -->
    <div class="bg-light p-4 rounded shadow-sm my-4">
    <h3 class="fw-bold text-center mb-4" style="color: #002E5F;">Servicio de Finanzas</h3>

    <!-- DESCRIPCIÓN -->
    <p class="text-justify">
        Ofrecemos servicios financieros especializados que apoyan la toma de decisiones estratégicas, 
        fortalecen la planeación empresarial y garantizan un manejo eficiente de los recursos. 
        Nuestro enfoque está orientado a la interpretación de información clave para impulsar 
        la rentabilidad y sostenibilidad de las organizaciones.
    </p>

    <!-- LISTA DE SERVICIOS -->
    <ol class="mt-3">
        <li>Análisis e interpretación de estados financieros</li>
        <li>Formulación y evaluación de proyectos de inversión</li>
        <li>Elaboración y control de presupuestos</li>
    </ol>

</div>



@endsection