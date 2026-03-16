<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $noticias = [
            ['titulo' => 'ENTRE RAÍCES Y CAMINOS DEL MAYAB', 'imagen' => 'noticia1.jpg'],
            ['titulo' => 'INICIA EL PROGRAMA DE INDUCCIÓN', 'imagen' => 'noticia2.jpg'],
            ['titulo' => 'CLAUSURAN TALLERES ARTÍSTICOS', 'imagen' => 'noticia3.jpg'],
            ['titulo' => 'NOCHE DE ORGULLO EN FCA', 'imagen' => 'noticia4.jpg'],
        ];

        return view('home', compact('noticias'));
    }
}