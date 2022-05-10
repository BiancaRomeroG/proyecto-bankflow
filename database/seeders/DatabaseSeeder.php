<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmpresasSeeders::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(TipoCreditosSeeder::class);
        $this->call(CarpetaCreditosSeeder::class);
        $this->call(CustodiasSeeder::class);
        $this->call(CreditoDetallesSeeder::class);
        $this->call(SolicitudCreditosSeeder::class);
        $this->call(GestionCreditosSeeder::class);
        $this->call(BitacorasSeeder::class);
        $this->call(ReportesSeeder::class);
        $this->call(DocumentosSeeder::class); 
        
    }
}
