@props(['tipo' => 'texto', 'contenido' => '', 'color' => 'azul', 'imagen' => ''])

@php
    $bg = $color == 'dorado' ? '#b58d1b' : '#012143';
@endphp

<div class="cuadro shadow-sm {{ $tipo === 'imagen' ? 'p-0' : 'p-3' }}"
     style="background: {{ $tipo === 'imagen' ? 'transparent' : $bg }};">

    @if($tipo === 'imagen')
        <img src="{{ asset($imagen) }}" class="img-cuadro" alt="Imagen">
    @else
        <span class="texto-cuadro">
            {{ $contenido }}
        </span>
    @endif

</div>

<style>
.cuadro {
    height: 180px; 
    border-radius: 15px;
    color: white;
    font-weight: bold;
    transition: all 0.3s ease;
    cursor: pointer;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.cuadro:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.img-cuadro {
    width: 100%;
    height: 100%;
    object-fit: cover; 
}

.texto-cuadro {
    font-size: 1.2rem;
    line-height: 1.2;
    padding: 10px;
}
</style>