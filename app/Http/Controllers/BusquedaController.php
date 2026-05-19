<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buscador;

class BusquedaController extends Controller
{
    //
    public function buscar(Request $request)
    {
        $q = $request->q;

        $resultados = Buscador::where('titulo', 'LIKE', "%{$q}%")
            ->get()
            ->map(function ($item) {

                return [

                    'titulo' => $item->titulo,

                    'url' => route($item->ruta) . '#' . $item->identificador
                ];
            });

        return response()->json($resultados);
    }
}