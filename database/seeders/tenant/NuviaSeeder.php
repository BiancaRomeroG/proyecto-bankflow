<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Tenant\Nuvia ;

class Nuviaseeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Nuvia\RolesSeeder::class);
        $this->call(Nuvia\UsersSeeder::class);
        $this->call(Nuvia\AreasSeeder::class);
        $this->call(Nuvia\EmpleadosSeeder::class);
        $this->call(Nuvia\ClientesSeeder::class);
        $this->call(Nuvia\TipoCreditosSeeder::class);
        $this->call(Nuvia\CarpetaCreditosSeeder::class);
        $this->call(Nuvia\CreditoDetallesSeeder::class);
        $this->call(Nuvia\SolicitudCreditosSeeder::class);
        $this->call(Nuvia\GestionCreditosSeeder::class);
        $this->call(Nuvia\RequisitosSeeder::class);
        $this->call(Nuvia\DocumentosSeeder::class);
    }
}