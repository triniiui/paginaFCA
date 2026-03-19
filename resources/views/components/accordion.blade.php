@props(['id', 'titulo'])

<div class="accordion mb-5" id="{{ $id }}">
    <div class="accordion-item shadow-sm border-0">
        <h2 class="accordion-header" id="heading-{{ $id }}">
            <button class="accordion-button bg-white text-dark fw-bold" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#collapse-{{ $id }}" 
                    aria-expanded="true" aria-controls="collapse-{{ $id }}">
                {{ $titulo }}
            </button>
        </h2>
        <div id="collapse-{{ $id }}" class="accordion-collapse collapse show" 
             aria-labelledby="heading-{{ $id }}" data-bs-parent="#{{ $id }}">
            <div class="accordion-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>