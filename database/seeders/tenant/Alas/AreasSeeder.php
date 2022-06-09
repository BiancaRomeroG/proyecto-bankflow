<?php

namespace Database\Seeders\Tenant\Alas;

use App\Models\areas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $area = new areas() ;
        $area->nombre = 'Area Administrativa';
        $area->descripcion = 'Area encargada de todos los movimientos de la empresa' ;
        $area->save();

        $area = new areas() ;
        $area->nombre = 'Area de Finanzas';
        $area->descripcion = 'Area especializada en el flujo de dinero' ;
        $area->save();

        $area = new areas() ;
        $area->nombre = 'Area de Riesgo';
        $area->descripcion = 'Area dedicada al analisis profundo de procesos crediticios con riesgo' ;
        $area->save();
  
        $area = new areas() ;
        $area->nombre = 'Area Legal';
        $area->descripcion = 'Area Especializada en soluciones de creditos hipotecarios u otros' ;
        $area->save();
    }
}
