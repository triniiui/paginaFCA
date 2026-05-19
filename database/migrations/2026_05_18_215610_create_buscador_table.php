<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buscador', function (Blueprint $table) {
            $table->id();

            // texto que aparecerá en la búsqueda
            $table->string('titulo');

            // nombre de la ruta Laravel
            $table->string('ruta');

            // id HTML del título
            $table->string('identificador');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buscador');
    }
};