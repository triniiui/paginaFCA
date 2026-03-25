@extends('layouts.vistas')
@section('vistas-content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-comunidad">
            Boletines del Comité Institucional para la Atención de Fenómenos Meteorológicos Extremos “CIAFEME 
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-comunidad mb-4">
        <img src="{{ asset('assets/img/comunidad/c1.jpg') }}" alt="Biblioteca" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        <p>
            Durante la temporada de huracanes y ciclones tropicales del 1 de junio al 30 de noviembre se envían boletines, para realizar recomendaciones y en su caso emitir alertas ante el inminente impacto de algún fenómeno natural. Asimismo, todos los días se da a conocer a la comunidad universitaria las condiciones del clima.
        </p>

<div class="container my-5">
    <h3 class="text-primary-uady mb-4">Preguntas Frecuentes</h3>
            </h2>
            <x-accordion id="faqBiblioteca" titulo="Preguntas Frecuentes">
    <p class="fw-bold mb-1">¿Qué incluye los boletines del CIAFEME-UADY? </p>
    <p>Información fidedigna y precisa de las alertas emitidas ante el impacto de algún fenómeno que pueda afectar nuestra región y las condiciones del clima.</a></p>
            </x-accordion>
            </div>
</div>

<div class="text-center mb-4">
        <h2 class="titulo-com">
            Centro Institucional de Lenguas
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="text-center mb-4">
    <div class="banner-evaluacion mb-4">
        <img src="{{ asset('assets/img/comunidad/c2.jpg') }}" alt="ingles" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        <p>
            El CIL ofrece cursos para el aprendizaje de lenguas, la profesionalización de la docencia de lenguas, así como servicios de traducción, certificación y acreditación, entre otros. La misión del centro es participar en la formación integral de los estudiantes a través del aprendizaje de las lenguas, el conocimiento de otras culturas y revalorización de la propia, la profesionalización de la docencia de lenguas y los servicios de certificación y acreditación de las mismas bajo excelentes normas de calidad y desempeño ético, contando con la mejor planta académica, infraestructura y equipo.
            El CIL es responsable de la operación de los programas de lenguas: inglés, francés, italiano, español para no hispanohablantes y maya. Utiliza un ambiente de aprendizaje llamado Centro de Auto-Acceso (CAA) como una extensión del aula, en el cual se encuentran recursos didácticos para el aprendizaje de lenguas apoyados en tecnologías que permiten al alumno aprender bajo la guía de un tutor, en un horario flexible y con su propio estilo de aprendizaje. Estos cursos incluyen el componente cultural, así como los tiempos de instrucción y competencias recomendadas en el Marco Común Europeo de Referencia para las Lenguas.
</p>
    </div>
</div> 
       
@endsection