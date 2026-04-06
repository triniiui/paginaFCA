@props(['items'])

<section class="oferta-section">
    <div class="container-fluid p-0">
        <div class="row g-0">

            @foreach($items as $item)
                <div class="col-lg-3 col-md-6">
                    {{-- Convertimos la tarjeta en un enlace completo para mejor experiencia --}}
                    <a href="{{ url($item['link']) }}" class="oferta-card-link">
                        <div class="oferta-card">

                            <img src="{{ asset($item['imagen']) }}" class="oferta-img">

                            <div class="overlay"></div>

                            <div class="oferta-content">
                                <h2>{{ $item['titulo'] }}</h2>
                                <span class="ver-mas">Ver más →</span>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>

<style>
/* Quitar subrayado del enlace contenedor */
.oferta-card-link {
    text-decoration: none;
    display: block;
}

.oferta-card {
    position: relative;
    height: 400px;
    overflow: hidden;
    cursor: pointer;
}

.oferta-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.oferta-card:hover .oferta-img {
    transform: scale(1.1);
}

/* overlay oscuro */
.overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.4);
    transition: background 0.3s ease;
}

/* contenido */
.oferta-content {
    position: absolute;
    bottom: 30px;
    left: 20px;
    color: white;
}

.oferta-content h2 {
    font-weight: bold;
    margin-bottom: 5px;
}

.oferta-card:hover .overlay {
    background: rgba(0,0,0,0.6);
}

.ver-mas {
    color: #ff7a00; /* estilo anahuac */
    text-decoration: none;
    font-weight: bold;
    display: inline-block;
}

.oferta-card:hover .ver-mas {
    text-decoration: underline;
    color: #ff9533; /* Un poquito más brillante al pasar el mouse */
}
</style>