@extends('layouts.vistas')
@section('vistas-content')

<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-bt">
            Bolsa de Trabajo
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-bt mb-4">
        <img src="{{ asset('assets/img/egresados/e1.jpg') }}" alt="BolsaT" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        <p>
            Tiene como objetivo proporcionar una herramienta digital para vincular a los jóvenes universitarios que se encuentran por realizar sus prácticas profesionales y a los egresados que se encuentran en su proceso de inserción laboral.
        </p>
    

<div class="container my-5">
    <h3 class="text-primary-uady mb-4">Preguntas Frecuentes</h3>
            </h2>
            <x-accordion id="faqBT" titulo="Preguntas Frecuentes">
    <p class="fw-bold mb-1">Si el sistema no permite registrarme, ¿cómo puedo solucionar ésta incidencia?</p>
    <p>Puedes enviar un correo reportando esta incidencia y darte pronta solución. Correo del servicio Bolsa de Trabajo es bolsadetrabajo_boletines@correo.uady.mx</p>
     <p class="fw-bold mb-2">¿Las prácticas profesionales tienen apoyo económico?</p>
    <p>Cada facultad tiene sus lineamientos para la realización de prácticas profesionales, hay facultades que si tienen como requisito el apoyo económico.</p>
</x-accordion>

 <h2 class="titulo-Eg">
           Examen General de Egreso (EGEL)
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-eg mb-4">
        <img src="{{ asset('assets/img/egresados/e2.jpg') }}" alt="EG" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        <h4> ¿Qué es el EGEL Plus? </h4>
        <p>
        El Examen General para el Egreso de la Licenciatura (EGEL Plus) es un instrumento de evaluación de cobertura nacional, diseñado por el Centro Nacional de Evaluación (CENEVAL) cuyo propósito es determinar si los egresados que concluyen un plan de estudios de la licenciatura cuentan con los conocimientos y las habilidades que se consideran indispensables al término de su formación académica. 
        En la UADY, el examen se ofrece como una opción de titulación y el nivel de desempeño que los sustentantes demuestran sirve, en lo general, como referente para identificar a los programas educativos de calidad y, en lo particular, permite reconocer a nivel nacional a los egresados de excelencia de la Universidad Autónoma de Yucatán. 
        </p>
    

                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection