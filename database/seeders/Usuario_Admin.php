<?php

namespace Database\Seeders;

use App\Models\usuario_admin as ModelsUsuario_admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Usuario_Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = ModelsUsuario_admin::create([
            'name' => 'Alma',
            'ap_paterno' => 'Marcela',
            'ap_materno' => 'Gozo',
            'telefono' => 79080657,
            'email' => 'admin_nuvia@gmail.com',
        ]);

        $user = ModelsUsuario_admin::create([
            'name' => 'Alma',
            'ap_paterno' => 'Marcela',
            'ap_materno' => 'Gozo',
            'telefono' => 79080657,
            'email' => 'admin_alas@gmail.com',
        ]);
    }
}
