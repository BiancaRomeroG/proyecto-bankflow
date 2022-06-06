<?php

namespace Database\Seeders\Tenant\Nuvia;

use App\Models\gestion_credito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GestionCreditosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// Credito 1 :: Comercial - Insumos
//1        
        $gestion = new gestion_credito();
        $gestion->id_empleado = 1;
        $gestion->id_solicitud_credito = 1;
        $gestion->save();
//2
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 1;
        $gestion->save();

// Credito 2 :: Hipotecario - Almacen
//3
        $gestion = new gestion_credito();
        $gestion->id_empleado = 1;
        $gestion->id_solicitud_credito = 2;
        $gestion->save();
//4
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 2;
        $gestion->save();
//5
        $gestion = new gestion_credito();
        $gestion->id_empleado = 4;
        $gestion->id_solicitud_credito = 2;
        $gestion->save();

// Credito 3 :: Consumo - Viaticos
//6
        $gestion = new gestion_credito();
        $gestion->id_empleado = 5;
        $gestion->id_solicitud_credito = 3;
        $gestion->save();

        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 3;
        $gestion->save();
//---------------------------------------------------
// Credito 4 :: Comercial - Camion
//7
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 4;
        $gestion->save();
//8
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 4;
        $gestion->save();
//9
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 4;
        $gestion->save();

// Credito 5 :: Hipotecario - Terreno
//10
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 5;
        $gestion->save();
//11
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 5;
        $gestion->save();
//12
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 5;
        $gestion->save();

// Credito 6 :: Consumo - Computadora
//13
        $gestion = new gestion_credito();
        $gestion->id_empleado = 5;
        $gestion->id_solicitud_credito = 6;
        $gestion->save();
//14
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 6;
        $gestion->save();
//---------------------------------------------------
// Credito 7 :: Comercial - Inventario
//15
        $gestion = new gestion_credito();
        $gestion->id_empleado = 1;
        $gestion->id_solicitud_credito = 7;
        $gestion->save();
//16
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 7;
        $gestion->save();
//17
        $gestion = new gestion_credito();
        $gestion->id_empleado = 4;
        $gestion->id_solicitud_credito = 7;
        $gestion->save();

// Credito 8 :: Hipotecario - Bienes y raices
//18
        $gestion = new gestion_credito();
        $gestion->id_empleado = 2;
        $gestion->id_solicitud_credito = 8;
        $gestion->save();
//19
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 8;
        $gestion->save();
//20
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 8;
        $gestion->save();

// Credito 9 :: Consumo - televisor
//21
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 9;
        $gestion->save();
//22
        $gestion = new gestion_credito();
        $gestion->id_empleado = 5;
        $gestion->id_solicitud_credito = 9;
        $gestion->save();
//---------------------------------------------------
// Credito 10 :: Comercial - inmuebles
//23
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 10;
        $gestion->save();
//24
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 10;
        $gestion->save();
//25
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 10;
        $gestion->save();

// Credito 11 :: Hipotecario - estableicimiento
//26
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 11;
        $gestion->save();
//27
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 11;
        $gestion->save();
//28
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 11;
        $gestion->save();

// Credito 12 :: Consumo - pasajes tour
//29
        $gestion = new gestion_credito();
        $gestion->id_empleado = 5;
        $gestion->id_solicitud_credito = 12;
        $gestion->save();
//30
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 12;
        $gestion->save();
//---------------------------------------------------
// Credito 13 :: Comercial - matenimiento
//31
        $gestion = new gestion_credito();
        $gestion->id_empleado = 2;
        $gestion->id_solicitud_credito = 13;
        $gestion->save();
//32
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 13;
        $gestion->save();
//34
        $gestion = new gestion_credito();
        $gestion->id_empleado = 4;
        $gestion->id_solicitud_credito = 13;
        $gestion->save();

// Credito 14 :: Hipotecario - bienes y construccion
//35
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 14;
        $gestion->save();
//36
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 14;
        $gestion->save();
//37
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 14;
        $gestion->save();

// Credito 15 :: Consumo - inmubles
//38
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 15;
        $gestion->save();
//39
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 15;
        $gestion->save();
//---------------------------------------------------

// Credito 16 :: Comercial - Cargamento
//40
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 16;
        $gestion->save();
//41
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 16;
        $gestion->save();
//42
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 16;
        $gestion->save();

// Credito 17 :: Hipotecario - Construccion
//43
        $gestion = new gestion_credito();
        $gestion->id_empleado = 6;
        $gestion->id_solicitud_credito = 17;
        $gestion->save();
//44
        $gestion = new gestion_credito();
        $gestion->id_empleado = 7;
        $gestion->id_solicitud_credito = 17;
        $gestion->save();
//45
        $gestion = new gestion_credito();
        $gestion->id_empleado = 8;
        $gestion->id_solicitud_credito = 17;
        $gestion->save();

// Credito 18 :: Consumo - Motocicleta
//46
        $gestion = new gestion_credito();
        $gestion->id_empleado = 5;
        $gestion->id_solicitud_credito = 18;
        $gestion->save();
//47
        $gestion = new gestion_credito();
        $gestion->id_empleado = 3;
        $gestion->id_solicitud_credito = 18;
        $gestion->save();

    }
}
