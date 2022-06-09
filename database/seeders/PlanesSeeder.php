<?php

namespace Database\Seeders;

use App\Models\Planes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Planes::create([
            'nombre' => 'Starter',
            'tipo_plan' => 'Plan inicial',
            'id_detalle' => 1,
        ]);

        Planes::create([
            'nombre' => 'Premium',
            'tipo_plan' => 'Plan intermedio',
            'id_detalle' => 2,
        ]);

        Planes::create([
            'nombre' => 'Corporativo',
            'tipo_plan' => 'Plan avanzado',
            'id_detalle' => 3,
        ]);
    }
}
