<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profesor extends Model
{
    use HasFactory; // 👈 ESTO SOLUCIONA TODO

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'tipo',
    ];
}
