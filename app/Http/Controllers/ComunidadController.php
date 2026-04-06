<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

class ComunidadController extends Controller
{
    /*public function index()
    {
        return view('comunidad');
    }*/
    
    public function informacion() {
        $ciafeme = Informacion::where('seccion', 'comunidad')
                    ->where('titulo', 'ciafeme')
                    ->get();
        
        $preguntasfrecuentes = Informacion::where('seccion', 'comunidad')
                    ->where('titulo', 'preguntasfrecuentes')
                    ->get();
        
        $cil = Informacion::where('seccion', 'comunidad')
                    ->where('titulo', 'cil')
                    ->get();

        return view('comunidad', compact('ciafeme', 'preguntasfrecuentes', 'cil'));
    }
}