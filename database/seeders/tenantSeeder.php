<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Tenant;
use Database\Seeders\Tenant as databaseTenant;

class tenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa1 = Tenant::create([
            'id' => 'nuvia',
            'name' => 'Banco Nuvia',
        ]);

        //seed the tenant
        $empresa1->run( function(){
            $this->call(databaseTenant\NuviaSeeder::class);
        });
        

        $empresa2 = Tenant::create([
            'id' => 'alas',
            'name' => 'Banco Alas',
        ]);

    }
}
