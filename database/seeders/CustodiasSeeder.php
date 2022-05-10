<?php

namespace Database\Seeders;

use App\Models\custodias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustodiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//1
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Julio Miranda';
        $custodia->save();
//2
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Clara Flores';
        $custodia->save();
//3
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Lia Cespede';
        $custodia->save();
//4
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Mark Alvarez';
        $custodia->save();
//5
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Alejandro Rodriguez';
        $custodia->save();
//6
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Joel Guiterrez';
        $custodia->save();


    }
}
