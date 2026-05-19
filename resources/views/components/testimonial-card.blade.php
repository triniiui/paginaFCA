<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-4">

    <div class="testimonial-mini h-100">

        <!-- Imagen -->
        <div class="text-center">
            <img 
                src="{{ $image }}" 
                alt="{{ $name }}"
                class="testimonial-mini-img"
                onerror="this.src='https://via.placeholder.com/300x300.png?text=Foto';"
            >
        </div>

        <!-- Contenido -->
        <div class="p-3 text-center">

            <h6 class="fw-bold mb-1 testimonial-name">
                {{ $name }}
            </h6>

            <p class="testimonial-career mb-2">
                {{ $career }}
            </p>

            <p class="testimonial-text mb-0">
                {{ $text }}
            </p>

        </div>

    </div>

</div>