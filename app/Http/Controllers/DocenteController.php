<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;
use App\Models\Profesor;

class DocenteController extends Controller
{
    /*public function index()
    {
        return view('docentes');
    }*/
    
    public function informacion() {
        $cgsb = Informacion::where('seccion', 'docentes')
                    ->where('titulo', 'cgsb')
                    ->get();
        
        $preguntasfrecuentes = Informacion::where('seccion', 'docentes')
                    ->where('titulo', 'preguntasfrecuentes')
                    ->get();
        
        $pied = Informacion::where('seccion', 'docentes')
                    ->where('titulo', 'pied')
                    ->get();

        // NUEVO (PROFESORES)
        $tiempoCompleto = Profesor::where('tipo', 'tiempo_completo')->orderBy('apellidos')->get();
        $medioTiempo = Profesor::where('tipo', 'medio_tiempo')->orderBy('apellidos')->get();
        $coordinador = Profesor::where('tipo', 'coordinador_ingles')->first();
        $asignatura = Profesor::where('tipo', 'asignatura')->orderBy('apellidos')->get();

        return view('docentes', compact(
        'cgsb',
        'preguntasfrecuentes',
        'pied',
        'tiempoCompleto',
        'medioTiempo',
        'coordinador',
        'asignatura'
        ));

        
    }
}
