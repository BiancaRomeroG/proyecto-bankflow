<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

// Empleados::
//1
        $usuario = new User();
        $usuario->name = 'Juan';
        $usuario->ap_paterno = 'Perez';
        $usuario->ap_materno = 'Jarpa';
        $usuario->ci = '8908745';
        $usuario->fecha_nac = '2000/01/12';
        $usuario->telefono = '78451241';
        $usuario->email = 'juan@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 1;
        $usuario->save();
//2
        $usuario = new User();
        $usuario->name = 'Jose';
        $usuario->ap_paterno = 'Torrez';
        $usuario->ap_materno = 'Paco';
        $usuario->ci = '8908746';
        $usuario->fecha_nac = '2000/01/13';
        $usuario->telefono = '78451242';
        $usuario->email = 'jose@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 2;
        $usuario->save();
//3
        $usuario = new User();
        $usuario->name = 'Luis';
        $usuario->ap_paterno = 'Cruz';
        $usuario->ap_materno = 'Chavez';
        $usuario->ci = '8908747';
        $usuario->fecha_nac = '2000/01/14';
        $usuario->telefono = '78451243';
        $usuario->email = 'luis@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 3;
        $usuario->save();
//4
        $usuario = new User();
        $usuario->name = 'Raul';
        $usuario->ap_paterno = 'Paz';
        $usuario->ap_materno = 'Guerra';
        $usuario->ci = '8908748';
        $usuario->fecha_nac = '2000/01/15';
        $usuario->telefono = '78451244';
        $usuario->email = 'raul@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 4;
        $usuario->save();
//5
        $usuario = new User();
        $usuario->name = 'Andres';
        $usuario->ap_paterno = 'Cruz';
        $usuario->ap_materno = 'Aguilar';
        $usuario->ci = '8908749';
        $usuario->fecha_nac = '2000/01/16';
        $usuario->telefono = '78451245';
        $usuario->email = 'andres@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 1;
        $usuario->save();
//6
        $usuario = new User();
        $usuario->name = 'Nancy';
        $usuario->ap_paterno = 'Narvaes';
        $usuario->ap_materno = 'Torrez';
        $usuario->ci = '8908750';
        $usuario->fecha_nac = '2000/01/17';
        $usuario->telefono = '78451246';
        $usuario->email = 'nancy@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 2;
        $usuario->save();
//7     
        $usuario = new User();
        $usuario->name = 'Maria';
        $usuario->ap_paterno = 'Guitierrez';
        $usuario->ap_materno = 'Vasquez';
        $usuario->ci = '8908751';
        $usuario->fecha_nac = '2000/01/18';
        $usuario->telefono = '78451247';
        $usuario->email = 'maria@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 3;
        $usuario->save();
//8
        $usuario = new User();
        $usuario->name = 'Lucia';
        $usuario->ap_paterno = 'Arce';
        $usuario->ap_materno = 'Cruz';
        $usuario->ci = '8908752';
        $usuario->fecha_nac = '2000/01/19';
        $usuario->telefono = '78451248';
        $usuario->email = 'lucia@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 4;
        $usuario->save();


// Clientes::
//9
        $usuario = new User();
        $usuario->name = 'Clara';
        $usuario->ap_paterno = 'Flores';
        $usuario->ap_materno = 'Cabello';
        $usuario->ci = '8908753';
        $usuario->fecha_nac = '2000/01/20';
        $usuario->telefono = '78451249';
        $usuario->email = 'clara@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 5;
        $usuario->save();
//10
        $usuario = new User();
        $usuario->name = 'Julio';
        $usuario->ap_paterno = 'Miranda';
        $usuario->ap_materno = 'Narvaes';
        $usuario->ci = '8908754';
        $usuario->fecha_nac = '2000/01/21';
        $usuario->telefono = '78451250';
        $usuario->email = 'julio@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 5;
        $usuario->save();
//------------------------------------------------------------------        
//11
        $usuario = new User();
        $usuario->name = 'Lia';
        $usuario->ap_paterno = 'Cesepedes';
        $usuario->ap_materno = 'Perez';
        $usuario->ci = '8908755';
        $usuario->fecha_nac = '1999/02/21';
        $usuario->telefono = '78451251';
        $usuario->email = 'lia@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 5;
        $usuario->save();
//12
        $usuario = new User();
        $usuario->name = 'Mark';
        $usuario->ap_paterno = 'Alavarez';
        $usuario->ap_materno = 'Torrez';
        $usuario->ci = '8908756';
        $usuario->fecha_nac = '1998/03/21';
        $usuario->telefono = '78451252';
        $usuario->email = 'mark@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 5;
        $usuario->save();
//13
        $usuario = new User();
        $usuario->name = 'Alejandro';
        $usuario->ap_paterno = 'Rodriguez';
        $usuario->ap_materno = 'Lara';
        $usuario->ci = '8908757';
        $usuario->fecha_nac = '1990/01/21';
        $usuario->telefono = '78451253';
        $usuario->email = 'alejandro@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 5;
        $usuario->save();
//14
        $usuario = new User();
        $usuario->name = 'Joel';
        $usuario->ap_paterno = 'Guiterrez';
        $usuario->ap_materno = 'Chavez';
        $usuario->ci = '8908758';
        $usuario->fecha_nac = '1989/12/21';
        $usuario->telefono = '78451254';
        $usuario->email = 'joel@gmail.com';
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 5;
        $usuario->save();
    }
}
