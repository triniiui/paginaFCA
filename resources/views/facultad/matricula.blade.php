@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/estudiantes/e1.jpg"
    titulo="Matrícula"
    subtitulo="Alumnos inscritos en nuestros programas educativos"
/>

<style>
    .estadistica-card {
    border-radius: 12px;
    border: none;
    transition: 0.3s;
}

.estadistica-card:hover {
    transform: translateY(-8px);
    background: #012143;
    color: white;
}

/* números grandes */
.numero {
    font-size: 2.5rem;
    font-weight: bold;
    color: #b58d1b;
}

/* total grande */
.total-num {
    font-size: 3rem;
    font-weight: bold;
    color: #012143;
}
</style>

{{-- lic --}}
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="fw-bold text-center mb-5">Licenciatura</h2>
        <p class="text-center text-muted">Ciclo agosto - diciembre 2025</p>

        <div class="row g-4 mt-3">

            @php
            $lic = [
                ['nombre'=>'Contador Público (Mérida)', 'num'=>1738],
                ['nombre'=>'Contador Público (Tizimín)', 'num'=>170],
                ['nombre'=>'Mercadotecnia y Negocios Internacionales', 'num'=>742],
                ['nombre'=>'Administración TI', 'num'=>208],
                ['nombre'=>'Administración', 'num'=>564],
            ];
            @endphp

            @foreach($lic as $item)
                <div class="col-md-4">
                    <div class="card estadistica-card p-4 text-center">
                        <h3 class="numero">{{ $item['num'] }}</h3>
                        <p class="text-muted small">{{ $item['nombre'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- toal --}}
        <div class="text-center mt-5">
            <h2 class="total-num">3,422</h2>
            <p class="text-muted">Total de estudiantes</p>
        </div>

    </div>
</section>

{{-- pos --}}
<section class="py-5">
    <div class="container">

        <h2 class="fw-bold text-center mb-5">Posgrado</h2>
        <p class="text-center text-muted">Ciclo agosto 2025 - enero 2026</p>

        <div class="row g-4 mt-3">

            @php
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

            @foreach($pos as $item)
                <div class="col-md-3">
                    <div class="card estadistica-card p-4 text-center">
                        <h3 class="numero">{{ $item['num'] }}</h3>
                        <p class="text-muted small">{{ $item['nombre'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- total --}}
        <div class="text-center mt-5">
            <h2 class="total-num">316</h2>
            <p class="text-muted">Total de estudiantes</p>
        </div>

    </div>
</section>

@endsection