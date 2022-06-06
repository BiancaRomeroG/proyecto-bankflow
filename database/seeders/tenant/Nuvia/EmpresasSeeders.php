<?php

namespace Database\Seeders\Tenant\Nuvia;

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
        $empresa->nombre = 'Banco Nuvias';
        $empresa->direccion = 'Santa Cruz - Av. Paragua';
        $empresa->cant_trabajadores = 25;
//        $empresa->id_admin = 15;
        $empresa->save();

        $empresa = new empresa();       
        $empresa->nombre = 'Banco NNRRO';
        $empresa->direccion = 'Santa Cruz - Av. Charcas';
        $empresa->cant_trabajadores = 28;
//        $empresa->id_admin = 16;
        $empresa->save();

        $empresa = new empresa();       
        $empresa->nombre = 'Banco Alas';
        $empresa->direccion = 'Santa Cruz - Av. German Bush';
        $empresa->cant_trabajadores = 30;
//        $empresa->id_admin = 17;
        $empresa->save();


    }
}
