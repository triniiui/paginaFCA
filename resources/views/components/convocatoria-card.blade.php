@props(['url' => '#', 'titulo' => ''])

<a href="{{ $url }}" target="_blank" class="card-convocatoria d-flex align-items-center p-3 shadow-sm text-decoration-none">
    <div class="icon-container me-3">
        <i class="bi bi-box-arrow-up-right"></i> </div>
    <span class="text-dark fw-medium">{{ $titulo }}</span>
</a>
<style>
    
    .section-convocatorias-uady {
        background-color: #003366 !important; 
        border-radius: 8px;
        padding: 50px 20px;
        color: white !important;
    }

    .card-convocatoria {
        background-color: white !important;
        border-radius: 5px;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 15px;
        text-decoration: none !important;
        color: #333 !important;
        transition: transform 0.2s;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .card-convocatoria span {
    color: blue !important;
    }

    .card-convocatoria:hover {
        transform: translateY(-5px);
        background-color: #f8f9fa !important;
    }

    .titulo-seccion-blanco {
        color: white !important;
        text-transform: uppercase;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
        letter-spacing: 1px;
    }
</style>