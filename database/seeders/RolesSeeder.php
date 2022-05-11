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
        $rol->descripcion = 'Encargado de bla bla bla bla bla bla';
        $rol->save();
//2        
        $rol = new roles();
        $rol->nombre = 'Oficial de Credito';
        $rol->descripcion = 'Encargado de bla bla bla bla bla bla';
        $rol->save();
//3       
        $rol = new roles();
        $rol->nombre = 'Comite de Credito';
        $rol->descripcion = 'Encargado de bla bla bla bla bla bla';
        $rol->save();
//4       
        $rol = new roles();
        $rol->nombre = 'Departamento de Legal';
        $rol->descripcion = 'Encargado de bla bla bla bla bla bla';
        $rol->save();
//5
        $rol = new roles();
        $rol->nombre = 'Cliente';
        $rol->descripcion = 'Encargado de bla bla bla bla bla bla';
        $rol->save();
    }
}
