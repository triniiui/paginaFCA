<style>
/* Tarjeta base */
.estadistica-card {
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    cursor: pointer;
}

.estadistica-card:hover {
    transform: translateY(-8px) scale(1.02);
    background: #012143;
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    color: white;
}

/* todo el texto a blanco */
.estadistica-card:hover h3,
.estadistica-card:hover p {
    color: white !important;
}

.numero {
    font-size: 2.5rem;
    font-weight: bold;
    color: #b58d1b;
    transition: color 0.3s ease;
}

.estadistica-card:hover .numero {
    color: #ffd700 !important;
}

/* Total grande */
.total-num {
    font-size: 3rem;
    font-weight: bold;
    color: #012143;
}

/* Texto pequeño */
.estadistica-card p {
    transition: color 0.3s ease;
}
</style>

@props([
    'titulo',
    'subtitulo',
    'items' => [],
    'total',
    'cols' => 'col-md-4', // para controlar columnas
    'bg' => null
])

<section class="py-5 {{ $bg }}">
    <div class="container">

        <h2 class="fw-bold text-center mb-5">{{ $titulo }}</h2>
        <p class="text-center text-muted">{{ $subtitulo }}</p>

        <div class="row g-4 mt-3">

            @foreach($items as $item)
                <div class="{{ $cols }}">
                    <div class="card estadistica-card p-4 text-center">
                        <h3 class="numero">{{ $item['num'] }}</h3>
                        <p class="text-muted small">{{ $item['nombre'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- total --}}
        <div class="text-center mt-5">
            <h2 class="total-num">{{ $total }}</h2>
            <p class="text-muted">Total de estudiantes</p>
        </div>

    </div>
</section>