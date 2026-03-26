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
Route::get('/aspirantes',[AspiranteController::class,'index'])->name('aspirantes');
Route::get('/estudiantes',[EstudianteController::class,'index'])->name('estudiantes');
Route::get('/docentes',[DocenteController::class,'index'])->name('docentes');
Route::get('/egresados',[EgresadoController::class,'index'])->name('egresados');
Route::get('/comunidad',[ComunidadController::class,'index'])->name('comunidad');

Route::get('/noticias',[NoticiaController::class,'index'])->name('noticias');
Route::get('/noticias/{id}',[NoticiaController::class,'show'])->name('noticias.show');

Route::get('/carreras',[CarreraController::class,'index'])->name('carreras');

Route::get('/contacto',[ContactoController::class,'index'])->name('contacto');