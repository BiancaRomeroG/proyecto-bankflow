<?php

namespace Database\Seeders;

use App\Models\Planes;
use Database\Seeders\Tenant\Nuvia\EmpresasSeeders;
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
        $this->call(UserSeeder::class);
        $this->call(DetalleSeeder::class);
        $this->call(PlanesSeeder::class);
        $this->call(Usuario_Admin::class);
        $this->call(EmpresaSeeder::class);
        $this->call(tenantSeeder::class);
    }
}
