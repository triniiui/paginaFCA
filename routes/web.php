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

/* Rutas Investigación */
Route::prefix('fca-investigacion')->group(function () {

    // Coordinación de Investigación 
    Route::get('/coordinacion-de-investigacion', function () {
        return view('investigacion.coordinacionInvestigacion');
    })->name('investigacion.coordinacionInvestigacion');

    // Cuerpos académicos
    Route::get('/cuerpos-academicos', function () {
        return view('investigacion.cuerposAcademicos');
    })->name('investigacion.cuerposAcademicos');

    // Indicadores económicos del Estado de Yucatán
    Route::get('/indicadores-economicos-del-estado-de-yucatan', function () {
        return view('investigacion.indicadoresEconomicos');
    })->name('investigacion.indicadoresEconomicos');

    // Publicación Científica 
    Route::get('/publicacion-cientifica', function () {
        return view('investigacion.publicacionesCientificas');
    })->name('investigacion.publicacionesCientificas');

});

/* Rutas Vinculación */
Route::prefix('fca-vinculacion')->group(function () {

    // centro de desarrollo de negocios
    Route::get('/centro-de-desarollo-de-negocios', function () {
        return view('vinculacion.centroDesarrolloNegocios');
    })->name('vinculacion.centroDesarrolloNegocios');

    // coordinacion de vinculacion estrategica
    Route::get('/coordinacion-de-vinculacion-estrategica', function () {
        return view('vinculacion.coordinacionVinculacionEstrategica');
    })->name('vinculacion.coordinacionVinculacionEstrategica');

    // modulo de atencion fiscal
    Route::get('/modulo-de-atencion-fiscal', function () {
        return view('vinculacion.moduloAtencionFiscal');
    })->name('vinculacion.moduloAtencionFiscal');

    // Programa padrino académico
    Route::get('/programa-padrino-academico', function () {
        return view('vinculacion.programaPadrinoAcademico');
    })->name('vinculacion.programaPadrinoAcademico');

});

/* Rutas Internacionalización */
Route::prefix('fca-internacionalizacion')->group(function () {

    // International Entrepreneurship-Lab Smart Money
    Route::get('/international-entrepreneurship-lab-smart-money', function () {
        return view('internacionalizacion.internationalEntrepreneurshipLab');
    })->name('internacionalizacion.internationalEntrepreneurshipLab');

    // Movilidad Internacional
    Route::get('/movilidad-internacional', function () {
        return view('internacionalizacion.movilidadInternacional');
    })->name('internacionalizacion.movilidadInternacional');

});