<?php

namespace Database\Seeders\Tenant\Nuvia;

use App\Models\carpeta_credito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarpetaCreditosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//cliente 1 ::9
//1
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Clara Flores - Insumos para empresa';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
//2
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Clara Flores - Nuevo almacen';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
//3
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Clara Flores - Viaticos emergentes';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

//Cliente 2 ::10
//4
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Julio Miranda - Camion para exportacion';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
//5
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Julio Miranda - Nuevo establecimiento';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
//6
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Julio Miranda - Bienes de lujo';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

//Cliente 3 ::11
//7
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Lia Cespedes - Renovacion de inventario';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
//8
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Lia Cespedes - Bienes y raíces';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
//9
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Lia Cespedes - Televisor';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

//Cliente 4 ::12
//10
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Mark Alvarez - Nuevos inmuebles';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
//11
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Mark Alvarez - Nuevo establecimiento';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
//12
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Mark Alvarez - Pasajes turisticos';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

//Cliente 5 ::13
//13
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Alejandro Rodriguez - Mantenimiento';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
//14
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Alejandro Rodriguez - Construccion y bienes y raices';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
//15
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Alejandro Rodriguez - Inmuebles para hogar';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

//Cliente 6 ::14
//16
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Joel Guiterrez - Productos del exterior';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
//17
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Joel Guiterrez - Construccion';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
//18
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Joel Guiterrez - Compra motocicleta';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();










        //cliente 1 ::9
        //1
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Clara Flores - Insumos para empresa';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
        //2
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Clara Flores - Nuevo almacen';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
        //3
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Clara Flores - Viaticos emergentes';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

        //Cliente 2 ::10
        //4
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Julio Miranda - Camion para exportacion';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
        //5
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Julio Miranda - Nuevo establecimiento';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
        //6
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Julio Miranda - Bienes de lujo';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

        //Cliente 3 ::11
        //7
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Lia Cespedes - Renovacion de inventario';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
        //8
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Lia Cespedes - Bienes y raíces';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
        //9
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Lia Cespedes - Televisor';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

        //Cliente 4 ::12
        //10
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Mark Alvarez - Nuevos inmuebles';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
        //11
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Mark Alvarez - Nuevo establecimiento';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
        //12
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Mark Alvarez - Pasajes turisticos';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

        //Cliente 5 ::13
        //13
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Alejandro Rodriguez - Mantenimiento';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
        //14
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Alejandro Rodriguez - Construccion y bienes y raices';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
        //15
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Alejandro Rodriguez - Inmuebles para hogar';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();

        //Cliente 6 ::14
        //16
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Joel Guiterrez - Productos del exterior';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, informacion financiera, cerditos recientes';
        $carpeta->save();
        //17
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Joel Guiterrez - Construccion';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, de propiedad, financiera y de ubicacion de la empresa';
        $carpeta->save();
        //18
        $carpeta = new carpeta_credito();
        $carpeta->info_cliente = 'Joel Guiterrez - Compra motocicleta';
        $carpeta->requisito_prestamo = 'Documentos de informacion de identidad, ubicacion, y de respaldo o garantias de la persona';
        $carpeta->save();
    }
}
