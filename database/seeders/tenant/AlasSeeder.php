<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Tenant\Alas;

class AlasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Alas\RolesSeeder::class);
        $this->call(Alas\UsersSeeder::class);
        $this->call(Alas\AreasSeeder::class);
        $this->call(Alas\EmpleadosSeeder::class);
        $this->call(Alas\ClientesSeeder::class);
        $this->call(Alas\TipoCreditosSeeder::class);
        $this->call(Alas\CarpetaCreditosSeeder::class);
        $this->call(Alas\CreditoDetallesSeeder::class);
        $this->call(Alas\SolicitudCreditosSeeder::class);
        $this->call(Alas\GestionCreditosSeeder::class);
        $this->call(Alas\DocumentosSeeder::class);
    }
}