<?php

namespace Database\Seeders;

use App\Models\credito_detalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreditoDetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//1
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2020-01-20';
        $credito_d->fecha_fin = '2020/01/27';
        $credito_d->descripcion = 'Insumos traidos directamente de brasil';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 4920.00;
        $credito_d->pago_estado = 'Cancelado';
        $credito_d->numero_cuotas = 7;
        $credito_d->id_custodia = 1;
        $credito_d->save();
//2
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2022-01-20';
        $credito_d->fecha_fin = '2022/01/28';
        $credito_d->descripcion = 'Almacen para inventario excesivo';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 9000;
        $credito_d->pago_estado = 'Cancelado';
        $credito_d->numero_cuotas = 13;
        $credito_d->id_custodia = 1;
        $credito_d->save();
//3
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2019-01-20';
        $credito_d->fecha_fin = '2019/02/02';
        $credito_d->descripcion = 'Viaticos para viajar a La Paz';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.07;
        $credito_d->capital = 6000;
        $credito_d->pago_estado = 'Cancelado';
        $credito_d->numero_cuotas = 9;
        $credito_d->id_custodia = 1;
        $credito_d->save();
//--------------------------------------------------------------------
//4
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2020-08-20';
        $credito_d->fecha_fin = '2020/08/28';
        $credito_d->descripcion = 'Camion toyota Modelo x';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 10000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 13;
        $credito_d->id_custodia = 2;
        $credito_d->save();
//5
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2022-02-20';
        $credito_d->fecha_fin = '2022/02/28';
        $credito_d->descripcion = 'Establecimiento para expandir el negocio de ventas';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.05;
        $credito_d->capital = 20000;
        $credito_d->pago_estado = 'Cancelado';
        $credito_d->numero_cuotas = 24;
        $credito_d->id_custodia = 2;
        $credito_d->save();
//6
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2019-10-20';
        $credito_d->fecha_fin = '2019/11/07';
        $credito_d->descripcion = 'Computadora mac para estudios de carrera de diseños';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 4000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 6;
        $credito_d->id_custodia = 2;
        $credito_d->save();
//--------------------------------------------------------------------
//7
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2019-10-20';
        $credito_d->fecha_fin = '2019/11/11';
        $credito_d->descripcion = 'Inventario traido desde china';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 6000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 8;
        $credito_d->id_custodia = 3;
        $credito_d->save();
//8
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2019-04-20';
        $credito_d->fecha_fin = '2019/04/30';
        $credito_d->descripcion = 'Terreno y casa ubicado en Zona centro';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.07;
        $credito_d->capital = 10000;
        $credito_d->pago_estado = 'Cancelado';
        $credito_d->numero_cuotas = 15;
        $credito_d->id_custodia = 3;
        $credito_d->save();
//9
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2020-10-20';
        $credito_d->fecha_fin = '2020/10/29';
        $credito_d->descripcion = 'Televisor Samsung modelo HD4K';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 3000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 6;
        $credito_d->id_custodia = 3;
        $credito_d->save();
//--------------------------------------------------------------------
//10
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2020-08-20';
        $credito_d->fecha_fin = '2020/09/02';
        $credito_d->descripcion = 'Cubiculos y sillas de la empresa Hamiun';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 8000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 10;
        $credito_d->id_custodia = 4;
        $credito_d->save();
        
//11
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2022-02-20';
        $credito_d->fecha_fin = '2022/02/27';
        $credito_d->descripcion = 'Establecimiento de medidas x,y con cosntruccion de cuarto';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.07;
        $credito_d->capital = 15000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 16;
        $credito_d->id_custodia = 4;
        $credito_d->save();
        
//12
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2019-10-20';
        $credito_d->fecha_fin = '2019/11/12';
        $credito_d->descripcion = 'Pasajes para vaciones a Cancum';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 6000;
        $credito_d->pago_estado = 'Cancelado';
        $credito_d->numero_cuotas = 8;
        $credito_d->id_custodia = 4;
        $credito_d->save();
//--------------------------------------------------------------------
//13
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2020-08-20';
        $credito_d->fecha_fin = '2020/08/24';
        $credito_d->descripcion = 'Mantenimiento de Camion Toyota modelo SW2';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 8600;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 9;
        $credito_d->id_custodia = 5;
        $credito_d->save();

//14
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2020-02-20';
        $credito_d->fecha_fin = '2020/03/10';
        $credito_d->descripcion = 'Construccion de 2 pisos y terreno de medidas x,y';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 20000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 15;
        $credito_d->id_custodia = 5;
        $credito_d->save();

//15
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2021-10-20';
        $credito_d->fecha_fin = '2021/11/02';
        $credito_d->descripcion = 'Sillas y mesas de roble';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.05;
        $credito_d->capital = 4500;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 8;
        $credito_d->id_custodia = 5;
        $credito_d->save();
//--------------------------------------------------------------------
//16
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2020-08-20';
        $credito_d->fecha_fin = '2020/09/01';
        $credito_d->descripcion = 'Cargamentos de Japon';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.07;
        $credito_d->capital = 10000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 11;
        $credito_d->id_custodia = 6;
        $credito_d->save();

//17
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2022-02-20';
        $credito_d->fecha_fin = '2022/03/10';
        $credito_d->descripcion = 'Casa de medidas x,y con Sofa y armario';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.06;
        $credito_d->capital = 8000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 7;
        $credito_d->id_custodia = 6;
        $credito_d->save();

//18
        $credito_d = new credito_detalle();
        $credito_d->fecha_inicio = '2019-10-20';
        $credito_d->fecha_fin = '2019/10/30';
        $credito_d->descripcion = 'Motocicleta Honda modelo XR5';
        $credito_d->estado = 'Aprobado';
        $credito_d->interes = 0.05;
        $credito_d->capital = 5000;
        $credito_d->pago_estado = 'En proceso';
        $credito_d->numero_cuotas = 6;
        $credito_d->id_custodia = 6;
        $credito_d->save();

    }
}
