<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AspiranteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\ComunidadController;


Route::get('/',[HomeController::class,'index'])->name('home');
//Route::get('/aspirantes',[AspiranteController::class,'index'])->name('aspirantes');
Route::get('/aspirantes', [AspiranteController::class, 'informacion'])->name('aspirantes');

//Route::get('/estudiantes',[EstudianteController::class,'index'])->name('estudiantes');
Route::get('/estudiantes',[EstudianteController::class,'informacion'])->name('estudiantes');


//Route::get('/docentes',[DocenteController::class,'index'])->name('docentes');
Route::get('/docentes',[DocenteController::class,'informacion'])->name('docentes');


//Route::get('/egresados',[EgresadoController::class,'index'])->name('egresados');
Route::get('/egresados',[EgresadoController::class,'informacion'])->name('egresados');

//Route::get('/comunidad',[ComunidadController::class,'index'])->name('comunidad');
Route::get('/comunidad',[ComunidadController::class,'informacion'])->name('comunidad');

Route::get('/noticias',[NoticiaController::class,'index'])->name('noticias');
Route::get('/noticias/{id}',[NoticiaController::class,'show'])->name('noticias.show');
Route::get('/carreras',[CarreraController::class,'index'])->name('carreras');

Route::get('/contacto',[ContactoController::class,'index'])->name('contacto');


/* Rutas nuestra Facultad */
Route::prefix('fca-nuestra-facultad')->group(function () {
    //Acerca de Nosotros
    Route::get('/acerca-de-nosotros', function () {
        return view('facultad.acerca');
    })->name('facultad.acerca');

    //Centro de Innovación Pedagógica
    Route::get('/centro-de-innovacion-pedagogica', function () {
        return view('facultad.innovacion');
    })->name('facultad.innovacion');

    //Directorio
    Route::get('/directorio', function () {
        return view('facultad.directorio');
    })->name('facultad.directorio');

    //Historia
    Route::get('/historia', function () {
        return view('facultad.historia');
    })->name('facultad.historia');

    //Matrícula
    Route::get('/matricula', function () {
        return view('facultad.matricula');
    })->name('facultad.matricula');

    //Organización
    Route::get('/organizacion', function () {
        return view('facultad.organizacion');
    })->name('facultad.organizacion');

    //Plan de Desarrollo
    Route::get('/plan-de-desarrollo', function () {
        return view('facultad.plan');
    })->name('facultad.plan');

});

/* Rutas oferta educativa */
Route::prefix('fca-oferta-educativa')->group(function () {

    // oferta educativa
    Route::get('/oferta-educacion-continua', function () {
        return view('ofEdu.ofeduCo');
    })->name('ofEdu.ofeduCo');

    //licenciatura
    Route::get('/programas-licenciatura', function () {
        return view('ofEdu.proLin');
    })->name('ofEdu.proLin');

    //posgrado
    Route::get('/programas-posgrado', function () {
        return view('ofEdu.proPos');
    })->name('ofEdu.proPos');

});
