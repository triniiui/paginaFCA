@props(['id', 'titulo'])

<style>
    .accordion-button:not(.collapsed) {
        background-color: #c9a227 !important;
        color: white !important;
        box-shadow: none !important;
    }

    .accordion-button:not(.collapsed):hover {
        background-color: #b58e1d !important;
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
    }

    .accordion-button.collapsed::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23666'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
    }

    .accordion-item:has(.accordion-button:not(.collapsed)) {
        border-color: #c9a227 !important;
    }
</style>

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