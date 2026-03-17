<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
    {

        $noticias = Noticia::where('tipo', 'noticia')->get();
        $agenda = Noticia::where('tipo', 'agendaDigitalUniversitaria')->get();
        return view('home', compact('noticias', 'agenda'));

        /*$noticias = [
            ['titulo' => 'ENTRE RAÍCES Y CAMINOS DEL MAYAB', 'imagen' => 'noticia1.jpg'],
            ['titulo' => 'INICIA EL PROGRAMA DE INDUCCIÓN', 'imagen' => 'noticia2.jpg'],
            ['titulo' => 'CLAUSURAN TALLERES ARTÍSTICOS', 'imagen' => 'noticia3.jpg'],
            ['titulo' => 'NOCHE DE ORGULLO EN FCA', 'imagen' => 'noticia4.jpg'],
        ];

        return view('home', compact('noticias'));*/
    }
}