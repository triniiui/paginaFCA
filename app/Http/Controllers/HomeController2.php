<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Noticia;
use App\Models\Evento;
use App\Models\Carrera;

class HomeController extends Controller
{

    public function index()
    {

        $sliders = Slider::where('activo',1)->get();

        $noticias = Noticia::orderBy('created_at','desc')
                    ->take(4)
                    ->get();

        $eventos = Evento::orderBy('fecha','desc')
                    ->take(3)
                    ->get();

        $carreras = Carrera::all();

        return view('home',compact(
            'sliders',
            'noticias',
            'eventos',
            'carreras'
        ));
    }
}