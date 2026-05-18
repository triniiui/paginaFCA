<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

class EgresadoController extends Controller
{
    /*public function index()
    {
        return view('egresados');
    }*/
    
    public function informacion() {
        $bolsadetrabajo = Informacion::where('seccion', 'egresados')
                    ->where('titulo', 'bolsadetrabajo')
                    ->get();
        
        $preguntasfrecuentes = Informacion::where('seccion', 'egresados')
                    ->where('titulo', 'preguntasfrecuentes')
                    ->get();
        
        $egel = Informacion::where('seccion', 'egresados')
                    ->where('titulo', 'egel')
                    ->get();

        return view('egresados', compact('bolsadetrabajo', 'preguntasfrecuentes', 'egel'));
    }
}
