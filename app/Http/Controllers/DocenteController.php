<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

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

        return view('docentes', compact('cgsb', 'preguntasfrecuentes', 'pied'));
    }
}
