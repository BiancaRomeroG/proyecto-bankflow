<?php

namespace Database\Seeders\Tenant\Alas;

use App\Models\tipo_credito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoCreditosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//1
        $tipo_C = new tipo_credito() ;
        $tipo_C->nombre = 'Creditos hipotecarios';
        $tipo_C->descripcion = 'Credito para adquisicion de una propiedad, construccion de viviendas, locales comerciales y otros bienes raíces';
        $tipo_C->save();
//2
        $tipo_C = new tipo_credito() ;
        $tipo_C->nombre = 'Creditos Comerciales';
        $tipo_C->descripcion = 'Credito otorgado a empresas que buscan satisfacer necesidades de capital de trabajo o cualquier financiamiento en sus operaciones';
        $tipo_C->save();
//3
        $tipo_C = new tipo_credito() ;
        $tipo_C->nombre = 'Creditos de Consumo';
        $tipo_C->descripcion = 'Credito para facilitar pago de bienes o servicios';
        $tipo_C->save();
    }
}
