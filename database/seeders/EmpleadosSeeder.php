<?php

namespace Database\Seeders;

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
//1 - Asesor de credito
        $empleado = new empleados() ;
        $empleado->id_usuario = 1;
        $empleado->id_area = 1;
        $empleado->save();
//2 - Asesor de credito
        $empleado = new empleados() ;
        $empleado->id_usuario = 2;
        $empleado->id_area = 1;
        $empleado->save();
//3 - Comite de credito
        $empleado = new empleados() ;
        $empleado->id_usuario = 3;
        $empleado->id_area = 3;
        $empleado->save();
//4 - Departamento legal
        $empleado = new empleados() ;
        $empleado->id_usuario = 4;
        $empleado->id_area = 4;
        $empleado->save();
//5 -Asesor de credito
        $empleado = new empleados() ;
        $empleado->id_usuario = 5;
        $empleado->id_area = 1;
        $empleado->save();
//6 - Asesor de credito
        $empleado = new empleados() ;
        $empleado->id_usuario = 6;
        $empleado->id_area = 1;
        $empleado->save();
//7 - Comite de credito
        $empleado = new empleados() ;
        $empleado->id_usuario = 7;
        $empleado->id_area = 3;
        $empleado->save();
//8 - Departamento legal
        $empleado = new empleados() ;
        $empleado->id_usuario = 8;
        $empleado->id_area = 4;
        $empleado->save();
    }
}
