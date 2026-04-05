@props(['id', 'titulo'])

<div class="accordion mb-3">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-{{ $id }}">
                
                {{ $titulo }}
            </button>
        </h2>

        <div id="collapse-{{ $id }}" class="accordion-collapse collapse">
            <div class="accordion-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>