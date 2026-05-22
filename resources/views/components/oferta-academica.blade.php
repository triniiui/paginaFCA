@props(['items'])

<section class="oferta-section">
    <div class="container-fluid p-0">
        <div class="row g-0 oferta-container">

            @foreach($items as $item)
                <div class="col-lg-3 col-md-6">
                    {{-- Convertimos la tarjeta en un enlace completo para mejor experiencia --}}
                    <a href="{{ url($item['link']) }}" class="oferta-card-link">
                        <div class="oferta-card">

                            <img src="{{ asset($item['imagen']) }}" class="oferta-img">

                            <div class="overlay"></div>

                            <div class="oferta-content">
                                <h2>{{ $item['titulo'] }}</h2>
                                <span class="btn-uady-ver-mas">Ver más →</span>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>

<style>
.oferta-card-link {
    text-decoration: none;
    display: block;
    overflow: visible;
}

.oferta-card {
    position: relative;
    height: 400px;
    overflow: hidden;
    cursor: pointer;
    background: #000;
    
    transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1), 
                box-shadow 0.4s ease, 
                opacity 0.4s ease, 
                filter 0.4s ease;
    
    z-index: 1;
}
.oferta-container:hover .oferta-card {
    opacity: 0.45;             
    filter: grayscale(40%);    
}


.oferta-container .oferta-card:hover {
    opacity: 1 !important;      
    filter: grayscale(0%) !important; 
    transform: translateY(-8px) scale(1.02); 
    box-shadow: 0 20px 38px rgba(0, 0, 0, 0.5); 
    z-index: 5;   
}


.oferta-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease, filter 0.5s ease;
    filter: brightness(0.9); /* Un pelín más oscura por defecto */
}

.oferta-card:hover .oferta-img {
    transform: scale(1.12); 
    filter: brightness(1.25); 
}

.overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.1) 20%, rgba(0,0,0,0.85) 100%);
    transition: opacity 0.4s ease;
}


.oferta-content {
    position: absolute;
    bottom: 35px;
    left: 25px;
    right: 25px; 
    color: white;
    z-index: 6;
}

.oferta-content h2 {
    font-weight: bold;
    margin-bottom: 15px;
    font-size: 1.8rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.6); 
}

.btn-uady-ver-mas {
    display: inline-block;
    background-color: #F2B822; 
    color: #002E5F !important; 
    font-weight: bold;
    font-size: 0.9rem;
    padding: 8px 20px;
    border-radius: 50px; /* Botón ovalado moderno */
    box-shadow: 0 4px 10px rgba(242, 184, 34, 0.3);
    transition: all 0.3s ease;
}

.oferta-card:hover .btn-uady-ver-mas {
    background-color: #ffffff; 
    color: #002E5F !important;
    box-shadow: 0 6px 15px rgba(255, 255, 255, 0.4);
    transform: translateX(4px); 
}
</style>