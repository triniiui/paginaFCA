@extends('layouts.vistas')

@section('vistas-content')


<x-hero 
    imagen="assets/img/internacionalizacion/i2.png"
    titulo="Movilidad Internacional"
    subtitulo="Poner bien el subtítulo"
/>

<div class="container my-5">

    {{-- Introducción en bloque destacado --}}
    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <p>
                La Facultad de Contaduría y Administración ha escudriñado su internacionalización por diversos medios. 
                Si bien la cara más visible es la <strong>Movilidad presencial</strong>, existen otras variantes que permiten obtener estos beneficios.
            </p>
            <p>
                La movilidad es una de las opciones más solicitadas en la FCA, tanto para alumnos entrantes (provenientes de otros estados o países) 
                como para alumnos salientes hacia otras entidades mexicanas o naciones alrededor del mundo.
            </p>
            <p>
                En la Facultad se reciben alumnos extranjeros principalmente de <strong>Alemania, España y Colombia</strong>, 
                así como de diversas entidades federativas de México, especialmente Ciudad de México, Puebla, Sonora y Tabasco.
            </p>
            <p>
                Los principales destinos en el extranjero son <strong>Canadá, España y Alemania</strong>. 
                Además de la versión presencial, también existen modalidades de movilidad en línea, así como programas de prácticas en Disney y otras compañías.
            </p>
        </div>
    </div>

    {{-- Tarjetas de modalidades --}}
    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-airplane-fill fs-1 text-primary"></i>
                    <h5 class="fw-bold mt-2">Movilidad Presencial</h5>
                    <p>Intercambios académicos en universidades nacionales e internacionales.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-laptop fs-1 text-success"></i>
                    <h5 class="fw-bold mt-2">Movilidad en Línea</h5>
                    <p>Programas virtuales que permiten experiencias internacionales desde casa.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-briefcase-fill fs-1 text-warning"></i>
                    <h5 class="fw-bold mt-2">Prácticas Profesionales</h5>
                    <p>Oportunidades en Disney y otras compañías internacionales.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Video Informativo</h3>

    <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/XXXXXXXXXXX" 
                title="Video Movilidad Internacional UADY" 
                allowfullscreen></iframe>
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Avisos</h3>

    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <p>
                Se informa que se ha publicado el <strong>“Procedimiento para realizar el trámite de aceptación para la movilidad estudiantil en modalidad presencial para el periodo de agosto-diciembre 2026”</strong>.  
                Este documento puede ser consultado en el portal institucional o en el enlace oficial correspondiente.
            </p>

            <h5 class="fw-bold mt-4">Requisitos principales:</h5>
            <ul>
                <li>Haber aprobado todas las asignaturas al cierre del periodo enero-junio 2025.</li>
                <li>Contar con un promedio general mínimo de 80 (o el que especifique la universidad receptora).</li>
                <li>Acreditar al menos el 50% de los créditos del programa educativo.</li>
                <li>Tener asignaturas pendientes para cursar a su regreso.</li>
                <li>Acreditar el nivel de idioma requerido (B2 o superior).</li>
                <li>Contar con pasaporte vigente para estancias en el extranjero.</li>
                <li>Cumplir con requisitos consulares (visas de estudiante).</li>
            </ul>

            <div class="alert alert-warning mt-4">
                <strong>Fechas importantes:</strong><br>
                - Fecha máxima para entregar documentos: <strong>3 de marzo de 2026</strong> antes de las 11:00 a.m.<br>
                - Fecha máxima para iniciar trámite: <strong>23 de febrero de 2026</strong>.
            </div>

            <h5 class="fw-bold mt-4">Ejemplos de fechas:</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>Universidad</th>
                            <th>Fecha Máx recepción Doctos Inst. Destino</th>
                            <th>15 días hábiles previos</th>
                            <th>Fecha Máx. FCA/UADY</th>
                            <th>Fecha inicio de trámite FCA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>U. del Sapito</td>
                            <td>17 mar. 2026</td>
                            <td>23 feb. 2026</td>
                            <td>13 feb. 2026</td>
                            <td>6 feb. 2026</td>
                        </tr>
                        <tr>
                            <td>U. de la Ranita</td>
                            <td>1 abr. 2026</td>
                            <td>9 mar. 2026</td>
                            <td>3 mar. 2026</td>
                            <td>23 feb. 2026</td>
                        </tr>
                        <tr>
                            <td>U. del Renacuajo</td>
                            <td>15 abr. 2026</td>
                            <td>9 mar. 2026</td>
                            <td>3 mar. 2026</td>
                            <td>23 feb. 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Convocatorias internacionales --}}
            <h5 class="fw-bold mt-4">Convocatorias de estancias internacionales</h5>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="fw-bold">Alemania – Hochschule für Technik und Wirtschaft des Saarlandes</h6>
                    <p>
                        Estancia en la Escuela Internacional de Verano del <strong>15 de junio al 3 de julio de 2026</strong>.  
                        Cursos intensivos de idioma Alemán y experiencia cultural.  
                        <br><strong>Costo:</strong> 480 euros (exento para estudiantes UADY).
                    </p>
                    <p>
                        <a href="https://portalinstitucionales.blob.core.windows.net/cms/principal/documentos/Curso%20verano%20Saar%202026.pdf" target="_blank" class="btn btn-outline-primary btn-sm">Consultar aviso</a>
                    </p>
                    <div class="alert alert-info mt-3">
                        Plática informativa vía Teams: <strong>miércoles 28 de enero, 11:00 hrs</strong>  
                        <a href="https://ln.cl/3bwv7d" target="_blank">Acceder a la plática</a>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="fw-bold">Francia – Institut National des Sciences Appliquées (INSA Rennes)</h6>
                    <p>
                        Estancia en la Escuela Internacional de Verano del <strong>1 al 26 de junio de 2026</strong>.  
                        Cursos intensivos de idioma Francés y experiencia cultural.  
                        <br><strong>Costo administrativo:</strong> 300 euros.  
                        <br><strong>Costo curso:</strong> 1000 euros (exento para estudiantes UADY).
                    </p>
                    <p>
                        <a href="https://portalinstitucionales.blob.core.windows.net/cms/principal/documentos/Curso%20verano%20Francia%20INSA%202026.pdf" target="_blank" class="btn btn-outline-primary btn-sm">Consultar aviso</a>
                    </p>
                    <p>
                        Registro UADY obligatorio:  
                        <a href="https://forms.gle/2WTdQhpVwb5h6RUA8" target="_blank">Formulario de registro</a>
                    </p>
                </div>
            </div>

            <h6 class="fw-bold mt-4">Procedimiento Examen de Francés</h6>
            <ol>
                <li>Enviar correo a <a href="mailto:julia.puerto@correo.uady.mx">julia.puerto@correo.uady.mx</a> entre el <strong>26 y 31 de enero</strong> para registrarse.</li>
                <li>Realizar el pago ($330) a la cuenta BBVA indicada y enviar comprobante a más tardar el <strong>3 de febrero, 13:00 hrs</strong>.</li>
                <li>Presentar examen diagnóstico el <strong>4 de febrero, 11:00 hrs</strong> en el Centro Institucional de Lenguas con el profesor Julien Crenn.</li>
            </ol>

            <h5 class="fw-bold mt-4">Convocatoria Internacional – North Island College (Canadá)</h5>
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="fw-bold">Emerging Leaders in the Americas (ELAP) – 2026/27</h6>
                    <p>
                        North Island College (NIC) en Canadá abre la convocatoria para estudiantes de la FCA-UADY.  
                        Se aceptarán <strong>2 estudiantes de intercambio</strong>:
                    </p>
                    <ul>
                        <li>1 estudiante para el <strong>Fall Term</strong>: septiembre – diciembre 2026</li>
                        <li>1 estudiante para el <strong>Winter Term</strong>: enero – abril 2027</li>
                    </ul>

                    <h6 class="fw-bold mt-3">Beca y duración</h6>
                    <p>
                        <strong>$8,200 CAD</strong> para un periodo académico.  
                        Los fondos pueden utilizarse para visa, vuelos, seguro médico, alojamiento, transporte, alimentos y materiales de estudio.
                    </p>

                    <div class="alert alert-warning mt-3">
                        <strong>Fecha límite de aplicación:</strong> 20 de febrero de 2026.  
                        Todos los documentos deben recibirse en FCA-UADY antes de esta fecha.
                    </div>

                    <h6 class="fw-bold mt-3">Requisitos</h6>
                    <ul>
                        <li>Promedio mínimo de 80/100.</li>
                        <li>Al menos 50% de créditos cubiertos al momento de la solicitud.</li>
                        <li>Dominio de inglés nivel B2 (TOEFL, IELTS, Duolingo, Cambridge, Oxford, etc.).</li>
                    </ul>

                    <h6 class="fw-bold mt-3">Documentos a enviar</h6>
                    <ul>
                        <li>Imagen clara del pasaporte.</li>
                        <li>Aviso de privacidad firmado.</li>
                        <li>Carta de intención (razones para estudiar en Canadá y relación con tu carrera).</li>
                        <li>Formulario de aplicación internacional.</li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Wiesbaden Business School – Summer 2026</h3>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <p>
                La <strong>Wiesbaden Business School (D WIESBAD 01)</strong>, parte de la Hochschule RheinMain University of Applied Sciences, abre su convocatoria para estudiantes de intercambio en el semestre de verano 2026.  
                El semestre inicia aproximadamente el <strong>13 de abril</strong> y concluye el <strong>15 de agosto de 2026</strong>, incluyendo el periodo de exámenes.
            </p>
            <p>
                Antes del inicio, se ofrece un <strong>Curso Intensivo de Alemán</strong> a mediados de marzo, abierto a todos los estudiantes entrantes.
            </p>

            <div class="alert alert-info mt-3">
                <strong>Fecha límite de aplicación:</strong> 30 de noviembre de 2025.  
                Los estudiantes deben completar la aplicación en línea antes de esta fecha.
            </div>

            <h6 class="fw-bold mt-4">Proceso de nominación</h6>
            <p>
                Para ser nominados, los estudiantes deben enviar la siguiente información por correo a  
                <a href="mailto:valentin.alonso@correo.uady.mx">valentin.alonso@correo.uady.mx</a>:
            </p>
            <ul>
                <li>Nombre</li>
                <li>Apellido</li>
                <li>Género</li>
                <li>Correo electrónico</li>
            </ul>
            <p>
                Una vez nominados, recibirán la información necesaria sobre el proceso de aplicación y el enlace correspondiente.
            </p>

            <h6 class="fw-bold mt-4">Recursos adicionales</h6>
            <p>
                - <a href="https://www.youtube.com/watch?v=06vczAepgXM" target="_blank">Tour virtual de WBS</a><br>
                - <a href="https://www.youtube.com/watch?v=0q-GAFB3Ctw" target="_blank">Highlights de la ciudad de Wiesbaden</a><br>
                - <a href="https://www.youtube.com/watch?v=VHd_eVNFYTQ" target="_blank">Más atractivos de Wiesbaden</a><br>
                - <a href="https://www.hs-rm.de/en/from-abroad/exchange-students" target="_blank">Información general para estudiantes de intercambio</a>
            </p>

            <h6 class="fw-bold mt-4">Guías y materiales</h6>
            <ul>
                <li><a href="#" target="_blank">Volante WBS</a></li>
                <li><a href="#" target="_blank">Contacts and Information for Exchange Students</a></li>
                <li><a href="#" target="_blank">List of Business Courses</a></li>
                <li><a href="#" target="_blank">Quick Overview Classes taught in English</a></li>
                <li><a href="#" target="_blank">WBS Information for Incomings Summer 2026</a></li>
                <li><a href="#" target="_blank">WBS Introductory Guide for Incomings</a></li>
            </ul>
        </div>
    </div>

</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">Convocatorias 2026</h3>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">Convocatorias</h5>
                    <ul>
                        <li><a href="#" target="_blank">North Island College 2026/2027</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">Comprobantes de idiomas</h5>
                    <ul>
                        <li><a href="#" target="_blank">Comprobantes de idiomas</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">Instituciones y oferta académica</h5>
                    <ul>
                        <li><a href="#" target="_blank">Opciones de movilidad internacional</a></li>
                        <li><a href="#" target="_blank">Oferta académica de pregrado 2024-2025</a></li>
                        <li><a href="#" target="_blank">Oferta académica de posgrado INILAT 1 - 2024</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">Boletín de Becas</h5>
                    <ul>
                        <li><a href="#" target="_blank">FEBRERO 2026 – Becas para Mexicanos | SRE / AMEXCID</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm mt-5">
        <div class="card-body d-flex align-items-center">
            <img src="images/contacto_valentin.jpg" alt="Dr. Valentín Alonso Novelo" class="rounded-circle me-3" style="width:80px; height:80px;">
            <div>
                <h5 class="fw-bold mb-1">Contacto</h5>
                <p class="mb-0">Dr. Valentín Alonso Novelo<br>Coordinador</p>
                <p class="mb-0">
                    <a href="mailto:valentin.alonso@correo.uady.mx">valentin.alonso@correo.uady.mx</a>
                </p>
            </div>
        </div>
    </div>

</div>

@endsection
