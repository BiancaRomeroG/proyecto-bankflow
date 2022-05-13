<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//1
        $rol = new roles();
        $rol->nombre = 'Asesor de Credito';
        $rol->descripcion = 'Encaragdo de administrar recibir los creditos';
        $rol->save();
//2        
        $rol = new roles();
        $rol->nombre = 'Oficial de Credito';
        $rol->descripcion = 'Encargado de Asesorar al asesor de creditos en caso de ser necesario';
        $rol->save();
//3       
        $rol = new roles();
        $rol->nombre = 'Comite de Credito';
        $rol->descripcion = 'Encargado de aprobar creditos grandes';
        $rol->save();
//4       
        $rol = new roles();
        $rol->nombre = 'Departamento de Legal';
        $rol->descripcion = 'Encargado de la aprobacion de creditos vinculados con temas legales';
        $rol->save();
//5
        $rol = new roles();
        $rol->nombre = 'Cliente';
        $rol->descripcion = 'Persona común, funte principal de ingresos';
        $rol->save();
//6
        $rol = new roles();
        $rol->nombre = 'Administrador';
        $rol->descripcion = 'Super usuario dueño de Saas y de gestionarlo';
        $rol->save();    
//7
        $rol = new roles();
        $rol->nombre = 'Administrador de empresa';
        $rol->descripcion = 'Persona que solicita tiene acceso al sistema';
        $rol->save();
    }
}
