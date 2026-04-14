@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/vinculacion/v4.png"
    titulo="Programa Padrino Académico"
    subtitulo="Poner el subtítulo correcto"
/>

<div class="container my-5">

    {{-- Logo centrado --}}
    <div class="text-center mb-5">
        <img src="{{ asset('images/logo_padrino.png') }}" alt="Logo Programa Padrino Académico" class="img-fluid" style="max-height:150px;">
    </div>

    {{-- Presentación en bloque destacado --}}
    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <h3 class="fw-bold mb-3">Presentación</h3>
            <p>
                La formación integral de un estudiante comprende aspectos que van más allá de la transmisión de conocimientos. 
                En la Facultad de Contaduría y Administración de la UADY, buscamos generar profesionales con alto perfil ético y humanista, 
                comprometidos con la transformación de las organizaciones, el servicio a la comunidad y el desarrollo sustentable.
            </p>
            <p>
                El Programa Padrino Académico se concibe como un vínculo entre sociedad y alumnado, 
                con el objetivo de que ningún estudiante abandone sus estudios por falta de recursos económicos. 
                Es una relación de oportunidad y solidaridad que permite a los padrinos dejar huella en la vida de un joven futuro profesional.
            </p>
        </div>
    </div>

    {{-- Objetivos en tarjetas --}}
    <h3 class="fw-bold text-center mb-4">Objetivos</h3>
    <div class="row text-center mb-5">
        <div class="col-md-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-bullseye fs-1 text-primary"></i>
                    <h5 class="fw-bold mt-2">Objetivo General</h5>
                    <p>Reducir el índice de deserción escolar de los alumnos de licenciatura por falta de recursos económicos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-people-fill fs-1 text-success"></i>
                    <h5 class="fw-bold mt-2">Objetivos Específicos</h5>
                    <ul class="list-unstyled">
                        <li>Apoyar económicamente a los alumnos “ahijados” para la continuidad de sus estudios.</li>
                        <li>Obtener “Padrinos Académicos” comprometidos con la causa: que nadie se quede sin estudiar por falta de dinero.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Documentos relacionados --}}
    <h3 class="fw-bold text-center mb-4">Documentos del Programa</h3>
    <div class="list-group mb-5">
        <a href="#" class="list-group-item list-group-item-action">Convocatoria enero-junio 2026</a>
        <a href="#" class="list-group-item list-group-item-action">Infografía Programa Padrino Académico</a>
        <a href="#" class="list-group-item list-group-item-action">Carta compromiso</a>
    </div>

</div>

<div class="container my-5">

    {{-- Relación de matrículas en tabla --}}
    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <h3 class="fw-bold mb-3">Relación de matrículas de estudiantes beneficiados</h3>
            <p>Ciclo enero–junio 2026</p>

            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">MATRÍCULA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>22212224</td></tr>
                        <tr><td>2</td><td>22212227</td></tr>
                        <tr><td>3</td><td>25211429</td></tr>
                        <tr><td>4</td><td>24211397</td></tr>
                        <tr><td>5</td><td>18001474</td></tr>
                        <tr><td>6</td><td>24211517</td></tr>
                        <tr><td>7</td><td>21210466</td></tr>
                        <tr><td>8</td><td>22212247</td></tr>
                        <tr><td>9</td><td>17003248</td></tr>
                        <tr><td>10</td><td>21021494</td></tr>
                        <tr><td>11</td><td>21211453</td></tr>
                        <tr><td>12</td><td>24211582</td></tr>
                        <tr><td>13</td><td>21203309</td></tr>
                        <tr><td>14</td><td>22211323</td></tr>
                        <tr><td>15</td><td>18001608</td></tr>
                        <tr><td>16</td><td>20203384</td></tr>
                        <tr><td>17</td><td>21204208</td></tr>
                        <tr><td>18</td><td>24211534</td></tr>
                        <tr><td>19</td><td>18001203</td></tr>
                        <tr><td>20</td><td>19203491</td></tr>
                        <tr><td>21</td><td>22211476</td></tr>
                        <tr><td>22</td><td>19201733</td></tr>
                        <tr><td>23</td><td>22201052</td></tr>
                        <tr><td>24</td><td>20214859</td></tr>
                        <tr><td>25</td><td>18003628</td></tr>
                        <tr><td>26</td><td>24211447</td></tr>
                        <tr><td>27</td><td>25211559</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Coordinación en bloque destacado --}}
    <h3 class="fw-bold text-center mb-4">Coordinación de Becas y Programa Padrino Académico</h3>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <img src="{{ asset('images/coord_ligia.png') }}" alt="Coordinadora" class="img-fluid rounded-circle mb-3" style="max-width:150px;">
                    <h5 class="fw-bold">Dra. Ligia María Río Herrera</h5>
                    <p class="text-muted">Coordinadora</p>
                    <p>
                        <a href="mailto:ligia.rio@correo.uady.mx" class="text-decoration-none">
                            ligia.rio@correo.uady.mx
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection