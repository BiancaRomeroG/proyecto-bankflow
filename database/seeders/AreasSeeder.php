<?php

namespace Database\Seeders;

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
//1
        $area = new areas() ;
        $area->nombre = 'Area Administrativa';
        $area->descripcion = 'Area encargada de todos los movimientos de la empresa' ;
        $area->id_empresa = 1;
        $area->save();
//2
        $area = new areas() ;
        $area->nombre = 'Area de Finanzas';
        $area->descripcion = 'Area especializada en el flujo de dinero' ;
        $area->id_empresa = 1;
        $area->save();
//3
        $area = new areas() ;
        $area->nombre = 'Area de Riesgo';
        $area->descripcion = 'Area dedicada al analisis profundo de procesos crediticios con riesgo' ;
        $area->id_empresa = 1;
        $area->save();
//4    
        $area = new areas() ;
        $area->nombre = 'Area Legal';
        $area->descripcion = 'Area Especializada en soluciones de creditos hipotecarios u otros' ;
        $area->id_empresa = 1;
        $area->save();




        //1
        $area = new areas() ;
        $area->nombre = 'Area Administrativa';
        $area->descripcion = 'Area encargada de todos los movimientos de la empresa' ;
        $area->id_empresa = 2;
        $area->save();
//2
        $area = new areas() ;
        $area->nombre = 'Area de Finanzas';
        $area->descripcion = 'Area especializada en el flujo de dinero' ;
        $area->id_empresa = 2;
        $area->save();
//3
        $area = new areas() ;
        $area->nombre = 'Area de Riesgo';
        $area->descripcion = 'Area dedicada al analisis profundo de procesos crediticios con riesgo' ;
        $area->id_empresa = 2;
        $area->save();
//4    
        $area = new areas() ;
        $area->nombre = 'Area Legal';
        $area->descripcion = 'Area Especializada en soluciones de creditos hipotecarios u otros' ;
        $area->id_empresa = 2;
        $area->save();
    }
}
