<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

class EstudianteController extends Controller
{
    /*public function index()
    {
        return view('estudiantes');
    }*/

    public function informacion() {
        $bachillerato = Informacion::where('seccion', 'estudiantes')
                    ->where('titulo', 'bachillerato')
                    ->get();

        return view('estudiantes', compact('bachillerato'));
    }

}
