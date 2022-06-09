<?php

namespace Database\Seeders\Tenant\Alas;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles

        $role1 = Role::create([
                'name' => 'Admin', 
        ]);

        $role2 = Role::create([
                'name' => 'Asesor de Credito', 
        ]);

        $role3 = Role::create([
                'name' => 'Oficial de Credito', 
        ]);

        $role4 = Role::create([
                'name' => 'Comité de Credito', 
        ]);

        $role5 = Role::create([
                'name' => 'Departamento Legal', 
        ]);

        $role6 = Role::create([
                'name' => 'Cliente', 
        ]);

        //Permisos

        Permission::create([
                'name' => 'home' 
        ])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);

    }
}
