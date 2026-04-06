@props(['id', 'imagenes'])

<div id="{{ $id }}" class="carousel slide carousel-fade" data-bs-ride="carousel">

    {{-- Indicadores --}}
    <div class="carousel-indicators">
        @foreach($imagenes as $index => $imagen)
            <button type="button" data-bs-target="#{{ $id }}" 
                data-bs-slide-to="{{ $index }}"
                class="{{ $index == 0 ? 'active' : '' }}">
            </button>
        @endforeach
    </div>

    {{-- Slides --}}
    <div class="carousel-inner">

        @foreach($imagenes as $index => $imagen)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                {{-- Imagen grande tipo HERO --}}
                <img src="{{ asset($imagen['url']) }}" 
                     class="d-block w-100 hero-img" 
                     alt="{{ $imagen['alt'] ?? 'Imagen' }}">

                {{-- Overlay oscuro --}}
                <div class="overlay"></div>

                {{-- Texto estilo moderno --}}
                <div class="carousel-caption text-start hero-caption">
                    <h1 class="fw-bold">{{ $imagen['titulo'] }}</h1>

                    @if(isset($imagen['subtitulo']))
                        <p>{{ $imagen['subtitulo'] }}</p>
                    @endif

                </div>

            </div>
        @endforeach

    </div>

    {{-- Controles --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

{{-- ESTILOS --}}
<style>
.hero-img {
    height: 80vh;
    object-fit: cover;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
}

.hero-caption {
    bottom: 20%;
    left: 10%;
    max-width: 500px;
}

.hero-caption h1 {
    font-size: 2.5rem;
    color: white;
}

.hero-caption p {
    color: white;
}

.carousel-indicators [data-bs-target] {
    width: 10px;
    height: 10px;
    border-radius: 50%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(1);
}
</style>