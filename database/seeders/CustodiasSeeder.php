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
        $custodia->id_empresa = 1;
        $custodia->save();
//2
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Clara Flores';
        $custodia->id_empresa = 1;
        $custodia->save();
//3
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Lia Cespede';
        $custodia->id_empresa = 1;
        $custodia->save();
//4
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Mark Alvarez';
        $custodia->id_empresa = 1;
        $custodia->save();
//5
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Alejandro Rodriguez';
        $custodia->id_empresa = 1;
        $custodia->save();
//6
        $custodia = new custodias();
        $custodia->nombre_cliente = 'Joel Guiterrez';
        $custodia->id_empresa = 1;
        $custodia->save();






        //1
        $custodia = new custodias();
        $custodia->nombre_cliente = 'xxx';
        $custodia->id_empresa = 2;
        $custodia->save();
        //2
        $custodia = new custodias();
        $custodia->nombre_cliente = 'xxx';
        $custodia->id_empresa = 2;
        $custodia->save();
        //3
        $custodia = new custodias();
        $custodia->nombre_cliente = 'xxx';
        $custodia->id_empresa = 2;
        $custodia->save();
        //4
        $custodia = new custodias();
        $custodia->nombre_cliente = 'xxx';
        $custodia->id_empresa = 2;
        $custodia->save();
        //5
        $custodia = new custodias();
        $custodia->nombre_cliente = 'xxx';
        $custodia->id_empresa = 2;
        $custodia->save();
        //6
        $custodia = new custodias();
        $custodia->nombre_cliente = 'xxx';
        $custodia->id_empresa = 2;
        $custodia->save();


    }
}
