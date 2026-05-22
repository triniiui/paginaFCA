<div class="col-lg-3 col-md-6">

    <div class="career-card h-100 d-flex flex-column">

        <div class="career-icon mx-auto">
            <i class="bi {{ $icono }}"></i>
        </div>

        <h5 class="fw-bold mt-4 text-center">
            {{ $titulo }}
        </h5>

        <p class="text-muted text-center flex-grow-1">
            {{ $descripcion }}
        </p>

        <div class="d-flex flex-wrap justify-content-center gap-2 mt-3 mb-4">

            @foreach($badges as $badge)
                <span class="badge badge-soft">
                    {{ $badge }}
                </span>
            @endforeach

        </div>

        <div class="mt-auto">
            <button 
                class="btn btn-uady w-100"
                data-bs-toggle="collapse"
                data-bs-target="#{{ $target }}">
                Ver más
            </button>
        </div>

    </div>

</div>