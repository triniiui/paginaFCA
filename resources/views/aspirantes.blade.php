@extends('layouts.vistas')
@section('vistas-content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-aspi">
            Becas
            <a href="#"><i class="bi bi-link-45deg"></i></a>
        </h2>
    </div>

    <div class="banner-asp mb-4">
        <img src="{{ asset('assets/img/aspirantes/b1.jpg') }}" alt="asp" class="img-fluid">
    </div>

    <div class="texto-descripcion px-3">
        <p>
            El compromiso social de la Universidad Autónoma de Yucatán ha generado un esfuerzo continuo por apoyar a estudiantes con deseos de superación, buscando otorgarles medios que les permitan concluir sus estudios en forma satisfactoria.  
            Desde 1999 la Universidad Autónoma de Yucatán ha brindado su apoyo a los alumnos en desventaja económica y después de varios años, esta tarea se ha traducido en la implementación del Programa Institucional de Becas que procura y atiende a los estudiantes de todos los Campus Universitarios que así lo requieren.
            El Programa Institucional de Becas apoya a los estudiantes de nivel licenciatura inscritos en las Facultades de la Universidad Autónoma de Yucatán a través de las siguientes becas:<br><br>
            Becas de Inscripción UADY<br>
            Becas de Inscripción UADY al período intensivo de verano<br>
            Becas de Inscripción para deportistas de alto rendimiento <br>
            Becas de Inscripción de excelencia académica <br>
            Beca UADY Apoyo a la Manutención<br><br>
            La Convocatoria de las Becas del Programa Institucional de Becas se publica entre el mes de mayo y septiembre de cada año; en ellas se encuentra el procedimiento para solicitar una beca. El alumno interesado debe verificar si cumple con los requisitos establecidos en dichas convocatorias antes de solicitar una beca.<br>

            De igual forma el Programa Institucional de Becas es el enlace con otros Programas de Becas tanto del Gobierno Federal como Estatal, así como otros organismos y tiene la tarea de difundir y promover estos apoyos. <br>
            ¡Tu permanencia en la UADY nos interesa!
        </p>

        <div class="container my-5">
    <h3 class="text-primary-uady mb-4">Información importante</h3>
            </h2>
            <x-accordion id="ps" titulo="Páginas sugeridas">
    <p class="fw-bold mb-1"> </p>
    <p>https://www.gob.mx/becasbenitojuarez/documentos/comunicados-a-autoridades-educativas-superior <br>
        https://www.gob.mx/becasbenitojuarez/articulos/beca-jovenes-escribiendo-el-futuro-de-educacion-superior</p>
</x-accordion>
             <x-accordion id="pf" titulo="Preguntas frecuentes">
    <p class="fw-bold mb-1">¿Puedo solicitar más de una beca del Programa Institucional de Becas?</p>
    <p>Si, sin embargo, solamente se podrá otorgar al alumno una o ninguna, según sea el caso. Si el alumno obtiene alguna de estas becas no podrá solicitar otro apoyo económico o en especie para su educación durante el tiempo que disfrute esta beca.</p>
</x-accordion>




    </div>
</div> 
@endsection