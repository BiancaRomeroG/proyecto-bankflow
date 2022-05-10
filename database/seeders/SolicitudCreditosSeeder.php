<?php

namespace Database\Seeders;

use App\Models\solicitud_credito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolicitudCreditosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// cliente 1 :: u9     
//1   
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '5000';
        $solicitud->tiempo = '2020-01-20 10:25:00';
        $solicitud->motivo = 'Compra de insumos para su empresa';
        $solicitud->id_cliente = 1;
        $solicitud->id_tipo_credito = 2;
        $solicitud->id_carpeta_credito = 1;
        $solicitud->id_credito_detalle = 1;
        $solicitud->save();     
//2        
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '9000';
        $solicitud->tiempo = '2022-01-20 10:04:00';
        $solicitud->motivo = 'Construccion de nuevo almacen';
        $solicitud->id_cliente = 1;
        $solicitud->id_tipo_credito = 1;
        $solicitud->id_carpeta_credito = 2;
        $solicitud->id_credito_detalle = 2;
        $solicitud->save();
//3
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '6000';
        $solicitud->tiempo = '2019-01-20 10:30:00';
        $solicitud->motivo = 'Compra de viaticos por situacion de emergencia';
        $solicitud->id_cliente = 1;
        $solicitud->id_tipo_credito = 3;
        $solicitud->id_carpeta_credito = 3;
        $solicitud->id_credito_detalle = 3;        
        $solicitud->save();

//cliente 2 :: u10
//4
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '10000';
        $solicitud->tiempo = '2020-08-20 08:00:00';
        $solicitud->motivo = 'Adquision de camion para exportacion de productos de su empresa';
        $solicitud->id_cliente = 2;
        $solicitud->id_tipo_credito = 2;
        $solicitud->id_carpeta_credito = 4;
        $solicitud->id_credito_detalle = 4;        
        $solicitud->save();
//5
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '20000';
        $solicitud->tiempo = '2022-02-20 09:00:00';
        $solicitud->motivo = 'Adquision de terreno para nuevo establecimiento';
        $solicitud->id_cliente = 2;
        $solicitud->id_tipo_credito = 1;
        $solicitud->id_carpeta_credito = 5;
        $solicitud->id_credito_detalle = 5;        
        $solicitud->save();
//6
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '4000';
        $solicitud->tiempo = '2019-10-20 12:00:00';
        $solicitud->motivo = 'Compra de computadora/laptop mac';
        $solicitud->id_cliente = 2;
        $solicitud->id_tipo_credito = 3;
        $solicitud->id_carpeta_credito = 6;
        $solicitud->id_credito_detalle = 6;        
        $solicitud->save();

//cliente 3 :: u11
//7
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '6000';
        $solicitud->tiempo = '2019-10-20 13:00:00';
        $solicitud->motivo = 'Renovacion de inventario, cargas del exterior';
        $solicitud->id_cliente = 3;
        $solicitud->id_tipo_credito = 2;
        $solicitud->id_carpeta_credito = 7;
        $solicitud->id_credito_detalle = 7;        
        $solicitud->save();
//8
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '10000';
        $solicitud->tiempo = '2019-04-20 10:00:00';
        $solicitud->motivo = 'Compra de bienes y raices';
        $solicitud->id_cliente = 3;
        $solicitud->id_tipo_credito = 1;
        $solicitud->id_carpeta_credito = 8;
        $solicitud->id_credito_detalle = 8;        
        $solicitud->save();
//9
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '3000';
        $solicitud->tiempo = '2019-10-20 10:00:00';
        $solicitud->motivo = 'Adquision de televisor de alta gamma';
        $solicitud->id_cliente = 3;
        $solicitud->id_tipo_credito = 3;
        $solicitud->id_carpeta_credito = 9;
        $solicitud->id_credito_detalle = 9;        
        $solicitud->save();     

//cliente 4 :: u12
//10
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '8000';
        $solicitud->tiempo = '2020-08-20 10:00:00';
        $solicitud->motivo = 'Adquision de nuevos inmuebles para uno de los establecimientos';
        $solicitud->id_cliente = 4;
        $solicitud->id_tipo_credito = 2;
        $solicitud->id_carpeta_credito = 10;
        $solicitud->id_credito_detalle = 10;        
        $solicitud->save();
//11
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '15000';
        $solicitud->tiempo = '2022-02-20 10:00:00';
        $solicitud->motivo = 'Adquision de nuevo establecimiento en el centro';
        $solicitud->id_cliente = 4;
        $solicitud->id_tipo_credito = 1;
        $solicitud->id_carpeta_credito = 11;
        $solicitud->id_credito_detalle = 11;        
        $solicitud->save();
//12
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '6000';
        $solicitud->tiempo = '2019-10-20 10:00:00';
        $solicitud->motivo = 'Compra de pasajes para tour turistico en el exterior';
        $solicitud->id_cliente = 4;
        $solicitud->id_tipo_credito = 3;
        $solicitud->id_carpeta_credito = 12;
        $solicitud->id_credito_detalle = 12;        
        $solicitud->save();


//cliente 5 :: u13
//13
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '8600';
        $solicitud->tiempo = '2020-08-20 10:00:00';
        $solicitud->motivo = 'Mantenimiento de maquinarias de la empresa';
        $solicitud->id_cliente = 5;
        $solicitud->id_tipo_credito = 2;
        $solicitud->id_carpeta_credito = 13;
        $solicitud->id_credito_detalle = 13;        
        $solicitud->save();
//14
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '20000';
        $solicitud->tiempo = '2020-02-20 10:00:00';
        $solicitud->motivo = 'Compra de bienes y raices, y construccion de casa';
        $solicitud->id_cliente = 5;
        $solicitud->id_tipo_credito = 1;
        $solicitud->id_carpeta_credito = 14;
        $solicitud->id_credito_detalle = 14;        
        $solicitud->save();
//15
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '4500';
        $solicitud->tiempo = '2021-10-20 10:00:00';
        $solicitud->motivo = 'Compra de inmuebles para el hogar';
        $solicitud->id_cliente = 5;
        $solicitud->id_tipo_credito = 3;
        $solicitud->id_carpeta_credito = 15;
        $solicitud->id_credito_detalle = 15;        
        $solicitud->save();

//cliente 6 :: u14
//16
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '10000';
        $solicitud->tiempo = '2020-08-20 10:00:00';
        $solicitud->motivo = 'Compra de cargamento de productos del exterior';
        $solicitud->id_cliente = 6;
        $solicitud->id_tipo_credito = 2;
        $solicitud->id_carpeta_credito = 16;
        $solicitud->id_credito_detalle = 16;        
        $solicitud->save();
//17
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '8000';
        $solicitud->tiempo = '2022-02-20 10:00:00';
        $solicitud->motivo = 'Construccion de casa de dos pisos, con inmuebles';
        $solicitud->id_cliente = 6;
        $solicitud->id_tipo_credito = 1;
        $solicitud->id_carpeta_credito = 17;
        $solicitud->id_credito_detalle = 17;        
        $solicitud->save();
//18
        $solicitud = new solicitud_credito();        
        $solicitud->monto = '5000';
        $solicitud->tiempo = '2019-10-20 10:00:00';
        $solicitud->motivo = 'Compra de nueva motocicleta Honda 0 km';
        $solicitud->id_cliente = 6;
        $solicitud->id_tipo_credito = 3;
        $solicitud->id_carpeta_credito = 18;
        $solicitud->id_credito_detalle = 18;        
        $solicitud->save();

    }
}
