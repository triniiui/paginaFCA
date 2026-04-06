<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

class AspiranteController extends Controller
{
    /*public function index()
    {
        return view('aspirantes');
    }*/
    
    public function informacion() {
        $becas = Informacion::where('seccion', 'aspirantes')
                    ->where('titulo', 'becas')
                    ->get();

        $paginas = Informacion::where('seccion', 'aspirantes')
                    ->where('titulo', 'paginassugeridas')
                    ->get();

        $preguntas = Informacion::where('seccion', 'aspirantes')
                    ->where('titulo', 'preguntasfrecuentes')
                    ->get();

        return view('aspirantes', compact('becas', 'paginas', 'preguntas'));
    }    

}
