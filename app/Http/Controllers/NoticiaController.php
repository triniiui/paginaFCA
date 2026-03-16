<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiaController extends Controller
{

    public function index()
    {

        $noticias = Noticia::orderBy('created_at','desc')->paginate(9);

        return view('noticias',compact('noticias'));
    }


    public function show($id)
    {

        $noticia = Noticia::findOrFail($id);

        return view('noticia-detalle',compact('noticia'));
    }

}