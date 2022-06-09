<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
            'name' => 'Jhoel Flores Sarmiento',
            'ap_paterno' => 'Flores',
            'ap_materno' => 'Sarmiento',
            'ci' => '12345678',
            'fecha_nac' => '2001-01-01',
            'telefono' => '74321431',
            'email' => 'jhoel@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Edson Alain Sacaca Flores',
            'ap_paterno' => 'Flores',
            'ap_materno' => 'Sarmiento',
            'ci' => '12345678',
            'fecha_nac' => '2001-01-01',
            'telefono' => '69172849',
            'email' => 'edson3103a@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Bianca',
            'ap_paterno' => 'Romero',
            'ap_materno' => 'Guzman',
            'ci' => '12345678',
            'fecha_nac' => '2001-01-01',
            'telefono' => '72332452',
            'email' => 'bianca@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Pedro Enrique',
            'ap_paterno' => 'Characayo',
            'ap_materno' => 'Villegas',
            'ci' => '12345678',
            'fecha_nac' => '2001-01-01',
            'telefono' => '75468374',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Jhasmany J.',
            'ap_paterno' => 'Fernandez',
            'ap_materno' => 'Ortega',
            'ci' => '12345645',
            'fecha_nac' => '2001-01-01',
            'telefono' => '75784473',
            'email' => 'jhasmany@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
