@props(['id', 'imagenes'])

<div id="{{ $id }}" class="carousel slide shadow-sm overflow-hidden" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($imagenes as $index => $imagen)
            <button type="button" data-bs-target="#{{ $id }}" data-bs-slide-to="{{ $index }}" 
                class="{{ $index == 0 ? 'active' : '' }}" aria-current="true"></button>
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach($imagenes as $index => $imagen)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="5000">
                {{-- Imagen con altura ajustable para que se vea como la original --}}
                <img src="{{ asset($imagen['url']) }}" class="d-block w-100" alt="{{ $imagen['alt'] ?? 'Imagen' }}" 
                     style="height: 300px; object-fit: cover;">
                
                @if(isset($imagen['titulo']))
                    {{-- Barra Azul inferior estilo UADY --}}
                    <div class="carousel-caption d-none d-md-block w-100" 
                         style="left: 0; bottom: 0; background: rgba(1, 33, 67, 0.9); padding: 8px 0;">
                        <h5 class="m-0 text-white fw-bold">{{ $imagen['titulo'] }}</h5>
                        @if(isset($imagen['subtitulo']))
                            <p class="m-0 small">{{ $imagen['subtitulo'] }}</p>
                        @endif
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<style>
    .carousel-indicators [data-bs-target] {
        width: 8px;
        height: .7px;
        background-color: #fff;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        filter: invert(1) grayscale(100); /* Flechas más discretas */
    }
</style>