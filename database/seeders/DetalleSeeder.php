<?php

namespace Database\Seeders;

use App\Models\Detalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle::create([
            'precio' => 29,
            'miembros' => 2,
            'fecha_suscripcion' => '2022-06-09',
            'storage' => 20,
            'comprobante_pago' => null
        ]);

        Detalle::create([
            'precio' => 39,
            'miembros' => 10,
            'fecha_suscripcion' => '2022-06-09',
            'storage' => 40,
            'comprobante_pago' => null
        ]);

        Detalle::create([
            'precio' => 59,
            'miembros' => 15,
            'fecha_suscripcion' => '2022-06-09',
            'storage' => 60,
            'comprobante_pago' => null
        ]);
    }
}
