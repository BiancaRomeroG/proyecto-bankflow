<?php

namespace Database\Seeders;

use App\Models\empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empresa::create([
            'nombre' => 'Banco Nuvia',
            'direccion' => 'Av. Santa Cruz Calle los olivos #100',
            'cant_trabajadores' => 10,
            'id_usuario_admin' => 1,
            'id_planes' => 2
        ]);

        empresa::create([
            'nombre' => 'Banco Alas',
            'direccion' => 'Av. San Martin Calle Los pinos #69',
            'cant_trabajadores' => 10,
            'id_usuario_admin' => 2,
            'id_planes' => 2
        ]);
    }
}
