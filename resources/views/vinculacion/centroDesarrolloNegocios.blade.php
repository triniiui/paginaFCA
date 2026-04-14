@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/vinculacion/v1.png"
    titulo="Centro de Desarrollo de Negocios"
    subtitulo="Poner el subtítulo correcto"
/>

<div class="container my-5">

    <!-- ENCABEZADO -->
    <h2 class="fw-bold text-center mb-4">Centro de Desarrollo de Negocios (CEDENE)</h2>

    <!-- INTRODUCCIÓN -->
    <p class="text-justify">
        La Facultad de Contaduría y Administración, comprometida con el desarrollo económico del estado y con la responsabilidad social de la Universidad Autónoma de Yucatán, crea el Centro de Desarrollo de Negocios (CEDENE) como una iniciativa para vincular formalmente al personal académico del plantel con el sector empresarial. Esto se realiza a través de asesorías y consultorías especializadas, con el objetivo de brindar apoyo a quienes tienen la responsabilidad de operar las pequeñas y medianas empresas (PyMEs) de la región.
    </p>

    <p class="text-justify">
        El CEDENE ofrece soluciones integrales a los retos operativos, necesidades específicas y proyectos en desarrollo de las PyMEs, promoviendo así la innovación y el crecimiento competitivo.
    </p>

    <!-- MISIÓN -->
    <div class="bg-light p-4 rounded shadow-sm my-4">
        <h4 class="fw-bold">Misión</h4>
        <p>
            Contribuir al desarrollo económico del estado a través de asesorías y consultorías especializadas para PyMEs, fomentando la innovación y mejora continua de sus procesos en áreas como mercadotecnia, desarrollo de marcas, comunicación estratégica, diseño de identidad, administración, finanzas y tecnologías de la información, con el propósito de lograr un crecimiento sostenido y competitivo.
        </p>
    </div>

    <!-- VALORES -->
    <h4 class="fw-bold mt-5">Valores</h4>
    <div class="row mt-3">
        <div class="col-md-3"><div class="card p-3 mb-3">Responsabilidad</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3">Compromiso</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3">Servicio</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3">Calidad</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3">Honestidad</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3">Tolerancia</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3">Transparencia</div></div>
        <div class="col-md-3"><div class="card p-3 mb-3">Respeto</div></div>
    </div>

</div>

<div class="container my-5">

    <!-- SERVICIOS PRINCIPALES -->
    <h3 class="fw-bold text-center mb-4">Servicios principales</h3>

    <div class="row">
        <!-- Asesoría -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h4 class="fw-bold text-primary">Asesoría</h4>
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
                    <h4 class="fw-bold text-success">Consultoría</h4>
                    <p>
                        Servicio orientado a resolver problemas específicos con un enfoque estratégico y de corto plazo. 
                        Implica el desarrollo de proyectos puntuales que generan recomendaciones y soluciones concretas 
                        para mejorar la eficiencia y productividad empresarial.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- RED DE ASESORES -->
    <div class="alert alert-info mt-4" role="alert">
        El CEDENE cuenta con una red de asesores y consultores, conformada por profesionistas y académicos especializados en distintas áreas de atención empresarial.
    </div>

    <!-- ÁREAS DE ATENCIÓN -->
    <h4 class="fw-bold mt-5">Áreas de atención</h4>
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
        <!-- Aquí colocas tu imagen de banner -->
        <img src="ruta-de-tu-imagen.jpg" alt="Marketing Digital" class="img-fluid rounded shadow">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4">Marketing Digital</h3>

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
        <!-- Aquí colocas tu imagen de banner -->
        <img src="ruta-de-tu-imagen.jpg" alt="Branding" class="img-fluid rounded shadow">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4">Branding</h3>

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
        <!-- Aquí colocas tu imagen de banner -->
        <img src="ruta-de-tu-imagen.jpg" alt="Diseño de Imagen" class="img-fluid rounded shadow">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4">Diseño de Imagen</h3>

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
        <!-- Aquí colocas tu imagen de banner -->
        <img src="ruta-de-tu-imagen.jpg" alt="Investigación de Mercado" class="img-fluid rounded shadow">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4">Investigación de Mercado</h3>

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
        <!-- Aquí colocas tu imagen de banner -->
        <img src="ruta-de-tu-imagen.jpg" alt="Servicios de Mercadotecnia" class="img-fluid rounded shadow">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4">Servicios de Mercadotecnia</h3>

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
        <!-- Aquí colocas tu imagen de banner -->
        <img src="ruta-de-tu-imagen.jpg" alt="Servicios de Administración" class="img-fluid rounded shadow">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4">Servicios de Administración</h3>

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
        <!-- Aquí colocas tu imagen de banner -->
        <img src="ruta-de-tu-imagen.jpg" alt="Servicio de Finanzas" class="img-fluid rounded shadow">
    </div>

    <!-- TÍTULO -->
    <h3 class="fw-bold text-center mb-4">Servicio de Finanzas</h3>

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