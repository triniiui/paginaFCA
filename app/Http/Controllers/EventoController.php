<?php

namespace App\Http\Controllers;

use App\Models\Evento;

class EventoController extends Controller
{

    public function index()
    {

        $eventos = Evento::orderBy('fecha','desc')->paginate(6);

        return view('eventos',compact('eventos'));
    }

}