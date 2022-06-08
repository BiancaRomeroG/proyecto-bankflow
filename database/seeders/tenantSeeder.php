<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;
use Database\Seeders\Tenant\NuviaSeeder;

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
        $empresa1->save();

        //seed the tenant
        $empresa1->run( function(){
            $this->call(NuviaSeeder::class);
        });
        

        $empresa2 = Tenant::create([
            'id' => 'alas',
            'name' => 'Banco Alas',
        ]);

        $empresa2->run(function() {
            $this->call(NuviaSeeder::class);
        });

    }
}
