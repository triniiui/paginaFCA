@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/estudiantes/e1.jpg"
    titulo="Matrícula"
    subtitulo="Alumnos inscritos en nuestros programas educativos"
/>

@php
$lic = [
    ['nombre'=>'Contador Público (Mérida)', 'num'=>1738],
    ['nombre'=>'Contador Público (Tizimín)', 'num'=>170],
    ['nombre'=>'Mercadotecnia y Negocios Internacionales', 'num'=>742],
    ['nombre'=>'Administración TI', 'num'=>208],
    ['nombre'=>'Administración', 'num'=>564],
];

$pos = [
    ['nombre'=>'Finanzas', 'num'=>71],
    ['nombre'=>'Administración Tributaria', 'num'=>20],
    ['nombre'=>'Gestión de Mercadotecnia', 'num'=>10],
    ['nombre'=>'Cambio Organizacional', 'num'=>2],
    ['nombre'=>'Dirección Estratégica', 'num'=>55],
    ['nombre'=>'Mercadotecnia Digital', 'num'=>47],
    ['nombre'=>'Impuestos', 'num'=>111],
];
@endphp

<div id="licenciatura">
<x-estadisticas 
    titulo="Licenciatura"
    subtitulo="Ciclo agosto - diciembre 2025"
    :items="$lic"
    total="3,422"
    cols="col-md-4"
    bg="bg-light"
/>
</div>

<div id="posgrado">
<x-estadisticas 
    titulo="Posgrado"
    subtitulo="Ciclo agosto 2025 - enero 2026"
    :items="$pos"
    total="316"
    cols="col-md-3"
/>
</div>

@endsection