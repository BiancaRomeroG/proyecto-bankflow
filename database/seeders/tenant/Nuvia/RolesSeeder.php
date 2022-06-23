<?php

namespace Database\Seeders\Tenant\Nuvia;

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

        //Banner Permisos
        Permission::create(['name' => 'SideBar Usuarios'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'SideBar Empresa'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'SideBar Requisitos'])->assignRole([$role1, $role2, $role3, $role4, $role5, $role6]);
        Permission::create(['name' => 'SideBar Mis Procesos'])->assignRole([$role6]);
        Permission::create(['name' => 'SideBar Procesos Crediticios'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'SideBar Bitacora'])->assignRole([$role1]);

        //Vista Permisos
        Permission::create(['name' => 'Ver lista de empleados'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Crear empleados'])->assignRole([$role1, $role5]);
        Permission::create(['name' => 'Editar empleados'])->assignRole([$role1, $role5]);
        Permission::create(['name' => 'Ver empleados'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Eliminar empleados'])->assignRole([$role1, $role5]);


        Permission::create(['name' => 'Ver lista de clientes'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Crear clientes'])->assignRole([$role1, $role2]);
        Permission::create(['name' => 'Editar clientes'])->assignRole([$role1, $role2]);
        Permission::create(['name' => 'Ver clientes'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Eliminar clientes'])->assignRole([$role1, $role5]);


        Permission::create(['name' => 'Ver lista de areas'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Crear areas'])->assignRole([$role1]);
        Permission::create(['name' => 'Editar areas'])->assignRole([$role1]);
        Permission::create(['name' => 'Ver areas'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Eliminar areas'])->assignRole([$role1]);


        Permission::create(['name' => 'Ver lista de roles'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Crear roles'])->assignRole([$role1]);
        Permission::create(['name' => 'Editar roles'])->assignRole([$role1]);
        Permission::create(['name' => 'Ver roles'])->assignRole([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Eliminar roles'])->assignRole([$role1]);
    }
}
