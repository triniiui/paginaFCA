@props(['imagen', 'titulo'])

<section class="position-relative">
    <div class="hero-container" style="overflow: hidden; max-height: 450px;">
        <img src="{{ asset($imagen) }}" 
             alt="Banner FCA" 
             class="w-100 img-fluid" 
             style="object-fit: cover; min-height: 300px;">
        
        <div class="position-absolute bottom-0 w-100 bg-uady-blue py-3 text-center text-white" 
             style="background-color: rgba(0, 45, 85, 0.85);">
            <h2 class="h5 mb-0 fw-light text-uppercase">{{ $titulo }}</h2>
        </div>
    </div>
</section>