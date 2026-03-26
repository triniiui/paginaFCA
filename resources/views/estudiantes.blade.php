@extends('layouts.vistas')
@section('vistas-content')

<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="titulo-estudiantes">¿Por qué estudiar en la uady?</h2>
    </div>

    <div class="banner-est mb-4">
        <img src="{{ asset('assets/img/estudiantes/e1.jpg') }}" alt="Estudiantes" class="img-fluid w-100">
    </div>

    <div class="text-center mb-4">
        <h2 class="titulo-est1">Bachillerato</h2>
    </div>

    <div class="banner-bach mb-4">
        <img src="{{ asset('assets/img/estudiantes/e2.jpg') }}" alt="Bachillerato" class="img-fluid w-100">
    </div>

    <div class="texto-descripcion px-3 mb-5">
        <h4>Proceso de Ingreso a Bachillerato</h4>
        <p>
            El Proceso de Ingreso a Bachillerato está dirigido a las personas interesadas en ingresar como alumnos y alumnas al primer curso del bachillerato en la Escuela Preparatoria Uno, Escuela Preparatoria Dos o la Unidad Académica de Bachillerato con Interacción Comunitaria.
        </p>
    </div>

    <div class="section-convocatorias-uady shadow">
        
        <div class="mb-5">
            <h4 class="titulo-seccion-blanco">CONVOCATORIAS FEDERALES</h4>
            <div class="row g-3">
                <div class="col-md-3">
                    <x-convocatoria-card titulo="Convocatoria Federales" 
                    url="https://www.gob.mx/becasbenitojuarez/documentos/comunicados-a-autoridades-educativas-superior"
                    />
                </div>
                <div class="col-md-3">
                    <x-convocatoria-card titulo="Beca y Apoyos Complementarios para la Inclusión de Madres Mexicanas..." 
                    url="https://portalinsitucionalsa.blob.core.windows.net/cms/principal/documentos/CONVOCATORIA_Inclusion25.pdf"
                    />
                </div>
                <div class="col-md-3">
                    <x-convocatoria-card titulo="Convocatoria Beca Jóvenes Escribiendo el Futuro Febrero 2026-1"
                    url="https://portalinsitucionalsa.blob.core.windows.net/cms/principal/documentos/Anexo%202.%20Comunicado%20de%20Inicio%202026-1_Estudiantes_S283.pdf"
                     />
                </div>
                <div class="col-md-3">
                    <x-convocatoria-card titulo="AVISO importante JEF 2026-1" 
                    url="https://portalinsitucionalsa.blob.core.windows.net/cms/principal/documentos/AVISO%20JEF%20carga%20de%20fichas%20escolares%2018022026-1.pdf"
                    />
                </div>
                <div class="col-md-3 offset-md-3">
                    <x-convocatoria-card titulo="AVISO Importante JEF 2026-1 Estudiantes de continuidad"
                    url="https://portalinsitucionalsa.blob.core.windows.net/cms/principal/documentos/AVISO%20JEF%20carga%20de%20fichas%20escolares%2018022026-1.pdf"
                     />
                </div>
                <div class="col-md-3">
                    <x-convocatoria-card titulo="AVISO importante JEF 2026-1 Escuelas Prioritarias"
                    url="https://portalinsitucionalsa.blob.core.windows.net/cms/principal/documentos/AVISO%20JEF%20carga%20de%20fichas%20escolares%2023022026-1.pdf"
                     />
                </div>
            </div>
        </div>
        <div class="pt-4 border-top border-secondary">
            <h4 class="titulo-seccion-blanco">CONVOCATORIAS ESTATALES</h4>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <x-convocatoria-card titulo="Convocatoria Juventudes Renacimiento 2025-2026"
                    url="https://portalinsitucionalsa.blob.core.windows.net/cms/principal/documentos/Convocatoria_JuventudesRenacimiento.pdf"
                     />
                </div>
            </div>
        </div>

    </div> </div> @endsection
