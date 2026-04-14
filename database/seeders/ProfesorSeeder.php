<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // Tiempo completo
        Profesor::factory()->count(20)->create([
            'tipo' => 'tiempo_completo'
        ]);

        // Medio tiempo
        Profesor::factory()->count(10)->create([
            'tipo' => 'medio_tiempo'
        ]);

        // Coordinador (solo 1)
         Profesor::factory()->count(1)->create([
            'tipo' => 'coordinador_ingles'
        ]);

        // Asignatura
        Profesor::factory()->count(15)->create([
            'tipo' => 'asignatura'
        ]);
    }
}
