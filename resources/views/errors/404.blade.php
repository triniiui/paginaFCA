@extends('layouts.vistas')

@section('vistas-content')

<div class="error-container">
    
    <div class="error-card">
        <h1 class="error-code">404</h1>
        <h2 class="error-title">Página no encontrada</h2>
        
        <p class="error-text">
            Lo sentimos, la página que estás buscando no existe o fue movida.
        </p>

        <div class="error-actions">
            <a href="{{ url('/') }}" class="btn-home">
                Volver al inicio
            </a>
        </div>
    </div>

</div>

<style>
/* estilos de página de error */

/* Contenedor principal */
.error-container {
    min-height: 70vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f9fa;
}

/* Tarjeta */
.error-card {
    text-align: center;
    background: white;
    padding: 50px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    max-width: 500px;
    width: 90%;
}

/* Código 404 */
.error-code {
    font-size: 90px;
    font-weight: bold;
    color: #0b2c4d; /* azul tipo UADY */
    margin-bottom: 10px;
}

/* Título */
.error-title {
    font-size: 26px;
    margin-bottom: 15px;
    color: #333;
}

/* Texto */
.error-text {
    color: #666;
    margin-bottom: 30px;
    font-size: 16px;
}

/* Botón */
.btn-home {
    background-color: #c89b3c; /* dorado tipo UADY */
    color: white;
    padding: 12px 25px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-home:hover {
    background-color: #a87e2e;
    color: white;
}
/* termina estilos de página de error */

</style>


@endsection