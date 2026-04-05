@props(['titulo', 'beneficios'])

<section class="py-5 bg-light">
    <div class="container">

        <h2 class="fw-bold mb-4 text-center">{{ $titulo }}</h2>

        <div class="row g-4">
            @foreach($beneficios as $item)
                <div class="col-md-4">
                    <div class="card info-card h-100 p-4 border-0 shadow-sm">
                        <h5 class="fw-bold text-dark">{{ $item['titulo'] }}</h5>
                        <p class="text-muted small mb-0">
                            {{ $item['descripcion'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Slot para el texto largo --}}
        <div class="mt-5 texto-largo">
            {{ $slot }}
        </div>

    </div>
</section>

<style>
    .info-card {
        transition: transform 0.3s ease;
        border-left: 5px solid #003366; 
        background: white;
    }
    .info-card:hover {
        transform: translateY(-5px);
    }
    .texto-largo {
        color: #555;
        line-height: 1.8;
    }
</style>