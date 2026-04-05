@props(['titulo', 'imagen', 'resumen' => ''])

<div class="col-lg-3 col-md-6 mb-4">
    <div class="card noticia-card h-100 border-0 shadow-sm"
         data-bs-toggle="modal" 
         data-bs-target="#modal{{ Str::slug($titulo) }}">

        {{-- Imagen --}}
        <div class="overflow-hidden">
            <img src="{{ asset($imagen) }}" 
                 class="card-img-top noticia-img" 
                 alt="{{ $titulo }}">
        </div>

        {{-- Contenido --}}
        <div class="card-body d-flex flex-column">
            {{-- Título más grande (h5) --}}
            <h5 class="fw-bold mb-2 text-dark">{{ $titulo }}</h5>
            
            <p class="text-muted small flex-grow-1">
                {{ Str::limit($resumen, 90) }}
            </p>

            {{-- Botón más "gordo" usando py-2 (relleno vertical) y fw-bold --}}
            <span class="btn btn-outline-primary btn-sm mt-auto fw-bold py-2 px-3 border-2">
                Leer más →
            </span>
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="modal{{ Str::slug($titulo) }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">{{ $titulo }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <img src="{{ asset($imagen) }}" 
                     class="img-fluid rounded mb-3 shadow-sm">

                <p class="text-muted">
                    {{ $resumen }}
                </p>
            </div>

        </div>
    </div>
</div>

{{-- ESTILOS --}}
<style>
.noticia-card {
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 12px;
}

.noticia-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.noticia-img {
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.noticia-card:hover .noticia-img {
    transform: scale(1.05);
}

/* Ajuste extra para que el botón se vea más robusto */
.btn-outline-primary {
    border-width: 2px; /* Borde un poco más grueso */
    text-transform: uppercase; /* Opcional: le da un toque más serio */
    font-size: 0.8rem;
}
</style>