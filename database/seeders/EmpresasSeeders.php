<?php

namespace Database\Seeders;

use App\Models\empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = new empresa();       
        $empresa->nombre = 'Banco Sol';
        $empresa->direccion = 'Santa Cruz - Av. Paragua';
        $empresa->cant_trabajadores = 25;
        $empresa->save();

        $empresa = new empresa();       
        $empresa->nombre = 'Banco Fassil';
        $empresa->direccion = 'Santa Cruz - Av. Charcas';
        $empresa->cant_trabajadores = 28;
        $empresa->save();

        $empresa = new empresa();       
        $empresa->nombre = 'Banco Prodem';
        $empresa->direccion = 'Santa Cruz - Av. German Bush';
        $empresa->cant_trabajadores = 30;
        $empresa->save();


    }
}
