<?php

namespace Database\Seeders\Tenant\Alas;

use App\Models\requisitos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        requisitos::create([
            'nombre'=>'Identificación',
            'descripcion'=>'Carnet de identidad del solicitante',
            'id_tipo_credito' => 1
        ]);

        requisitos::create([
            'nombre'=>'Identificación',
            'descripcion'=>'Carnet de identidad del solicitante',
            'id_tipo_credito' => 2
        ]);

        requisitos::create([
            'nombre'=>'Identificación',
            'descripcion'=>'Carnet de identidad del solicitante',
            'id_tipo_credito' => 3
        ]);
    }
}
