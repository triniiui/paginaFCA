<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ContactoController;



Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/noticias',[NoticiaController::class,'index'])->name('noticias');
Route::get('/noticias/{id}',[NoticiaController::class,'show'])->name('noticias.show');

Route::get('/carreras',[CarreraController::class,'index'])->name('carreras');

Route::get('/contacto',[ContactoController::class,'index'])->name('contacto');