<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspiranteController extends Controller
{
    public function index()
    {
        return view('aspirantes');
    }

}
