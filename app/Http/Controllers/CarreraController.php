<?php

namespace App\Http\Controllers;

use App\Models\Carrera;

class CarreraController extends Controller
{

    public function index()
    {

        $carreras = Carrera::all();

        return view('carreras',compact('carreras'));
    }

}