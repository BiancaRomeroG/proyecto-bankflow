<?php

namespace Database\Seeders\Tenant\Alas;

use App\Models\empleados;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleados::create([
            'id_usuario' => 1,
            'id_area' => 1,
        ]);

        empleados::create([
            'id_usuario' => 2,
            'id_area' => 1,
        ]);

        empleados::create([
            'id_usuario' => 3,
            'id_area' => 2,
        ]);

        empleados::create([
            'id_usuario' => 4,
            'id_area' => 2,
        ]);

        empleados::create([
            'id_usuario' => 5,
            'id_area' => 3,
        ]);

        empleados::create([
            'id_usuario' => 6,
            'id_area' => 3,
        ]);

        empleados::create([
            'id_usuario' => 7,
            'id_area' => 4,
        ]);

        empleados::create([
            'id_usuario' => 8,
            'id_area' => 4,
        ]);
    }
}
