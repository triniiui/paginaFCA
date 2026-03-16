@props(['titulo', 'imagen', 'resumen' => ''])

<div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100 border-0 shadow-sm" 
         style="cursor: pointer;" 
         data-bs-toggle="modal" 
         data-bs-target="#modal{{ Str::slug($titulo) }}">
        
        <div class="bg-uady-blue p-2 text-center">
            <small class="text-white fw-bold d-block text-uppercase" style="font-size: 0.75rem;">
                {{ $titulo }}
            </small>
        </div>
        
        <img src="{{ asset($imagen) }}" 
             class="card-img-bottom" 
             alt="{{ $titulo }}" 
             style="height: 180px; object-fit: cover;">
    </div>
</div>

<div class="modal fade" id="modal{{ Str::slug($titulo) }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-uady-blue text-white">
                <h5 class="modal-title">{{ $titulo }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset($imagen) }}" class="img-fluid rounded mb-3 shadow">
                <p class="text-muted mt-3">{{ $resumen }}</p>
            </div>
        </div>
    </div>
</div>