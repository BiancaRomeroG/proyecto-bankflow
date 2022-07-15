<?php

namespace Database\Seeders\Tenant\Nuvia;

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
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 1,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 1,
            'id_credito_detalle' => 1,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 1,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 2,
            'id_credito_detalle' => 2,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 2,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 3,
            'id_credito_detalle' => 3,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 2,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 4,
            'id_credito_detalle' => 4,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 3,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 5,
            'id_credito_detalle' => 5,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 3,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 6,
            'id_credito_detalle' => 6,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 4,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 7,
            'id_credito_detalle' => 7,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 4,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 8,
            'id_credito_detalle' => 8,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 5,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 9,
            'id_credito_detalle' => 9,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 5,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 10,
            'id_credito_detalle' => 10,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 6,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 11,
            'id_credito_detalle' => 11,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 6,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 12,
            'id_credito_detalle' => 12,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 7,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 13,
            'id_credito_detalle' => 13,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 7,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 14,
            'id_credito_detalle' => 14,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 8,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 15,
            'id_credito_detalle' => 15,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 8,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 16,
            'id_credito_detalle' => 16,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 9,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 17,
            'id_credito_detalle' => 17,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 9,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 18,
            'id_credito_detalle' => 18,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 10,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 19,
            'id_credito_detalle' => 19,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 10,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 20,
            'id_credito_detalle' => 20,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 11,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 21,
            'id_credito_detalle' => 21,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 11,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 22,
            'id_credito_detalle' => 22,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 12,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 23,
            'id_credito_detalle' => 23,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 12,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 24,
            'id_credito_detalle' => 24,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 13,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 25,
            'id_credito_detalle' => 25,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 13,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 26,
            'id_credito_detalle' => 26,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 14,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 27,
            'id_credito_detalle' => 27,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 14,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 28,
            'id_credito_detalle' => 28,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 15,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 29,
            'id_credito_detalle' => 29,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 15,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 30,
            'id_credito_detalle' => 30,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 16,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 31,
            'id_credito_detalle' => 31,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 16,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 32,
            'id_credito_detalle' => 32,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 17,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 33,
            'id_credito_detalle' => 33,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 17,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 34,
            'id_credito_detalle' => 34,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 18,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 35,
            'id_credito_detalle' => 35,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 18,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 36,
            'id_credito_detalle' => 36,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 19,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 37,
            'id_credito_detalle' => 37,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 19,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 38,
            'id_credito_detalle' => 38,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 20,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 39,
            'id_credito_detalle' => 39,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 20,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 40,
            'id_credito_detalle' => 40,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 21,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 41,
            'id_credito_detalle' => 41,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 21,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 42,
            'id_credito_detalle' => 42,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 22,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 43,
            'id_credito_detalle' => 43,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 22,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 44,
            'id_credito_detalle' => 44,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 23,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 45,
            'id_credito_detalle' => 45,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 23,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 46,
            'id_credito_detalle' => 46,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 24,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 47,
            'id_credito_detalle' => 47,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 24,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 48,
            'id_credito_detalle' => 48,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 25,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 49,
            'id_credito_detalle' => 49,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 25,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 50,
            'id_credito_detalle' => 50,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 26,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 51,
            'id_credito_detalle' => 51,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 26,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 52,
            'id_credito_detalle' => 52,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 27,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 53,
            'id_credito_detalle' => 53,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 27,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 54,
            'id_credito_detalle' => 54,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 28,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 55,
            'id_credito_detalle' => 55,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 28,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 56,
            'id_credito_detalle' => 56,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 29,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 57,
            'id_credito_detalle' => 57,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 29,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 58,
            'id_credito_detalle' => 58,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 30,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 59,
            'id_credito_detalle' => 59,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 30,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 60,
            'id_credito_detalle' => 60,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 31,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 61,
            'id_credito_detalle' => 61,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 31,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 62,
            'id_credito_detalle' => 62,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 32,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 63,
            'id_credito_detalle' => 63,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 32,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 64,
            'id_credito_detalle' => 64,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 33,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 65,
            'id_credito_detalle' => 65,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 33,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 66,
            'id_credito_detalle' => 66,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 34,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 67,
            'id_credito_detalle' => 67,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 34,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 68,
            'id_credito_detalle' => 68,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 35,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 69,
            'id_credito_detalle' => 69,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 35,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 70,
            'id_credito_detalle' => 70,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 36,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 71,
            'id_credito_detalle' => 71,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 36,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 72,
            'id_credito_detalle' => 72,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 37,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 73,
            'id_credito_detalle' => 73,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 37,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 74,
            'id_credito_detalle' => 74,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 38,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 75,
            'id_credito_detalle' => 75,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 38,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 76,
            'id_credito_detalle' => 76,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 39,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 77,
            'id_credito_detalle' => 77,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 39,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 78,
            'id_credito_detalle' => 78,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 40,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 79,
            'id_credito_detalle' => 79,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 40,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 80,
            'id_credito_detalle' => 80,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 41,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 81,
            'id_credito_detalle' => 81,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 41,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 82,
            'id_credito_detalle' => 82,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 42,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 83,
            'id_credito_detalle' => 83,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 7000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 42,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 84,
            'id_credito_detalle' => 84,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 43,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 85,
            'id_credito_detalle' => 85,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 43,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 86,
            'id_credito_detalle' => 86,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 44,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 87,
            'id_credito_detalle' => 87,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 44,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 88,
            'id_credito_detalle' => 88,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 45,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 89,
            'id_credito_detalle' => 89,
            'estado' => 'En documentacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 45,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 90,
            'id_credito_detalle' => 90,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 46,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 91,
            'id_credito_detalle' => 91,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 46,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 92,
            'id_credito_detalle' => 92,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 47,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 93,
            'id_credito_detalle' => 93,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 15000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 47,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 94,
            'id_credito_detalle' => 94,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 48,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 95,
            'id_credito_detalle' => 95,
            'estado' => 'Desembolsado',
        ]);
        
        solicitud_credito::create([
            'monto' => 3000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 48,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 96,
            'id_credito_detalle' => 96,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 49,
            'id_tipo_credito' => 1,
            'id_carpeta_credito' => 97,
            'id_credito_detalle' => 97,
            'estado' => 'En proceso',
        ]);
        
        solicitud_credito::create([
            'monto' => 10000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 49,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 98,
            'id_credito_detalle' => 98,
            'estado' => 'Legalizacion',
        ]);
        
        solicitud_credito::create([
            'monto' => 6000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 50,
            'id_tipo_credito' => 3,
            'id_carpeta_credito' => 99,
            'id_credito_detalle' => 99,
            'estado' => 'En revision',
        ]);
        
        solicitud_credito::create([
            'monto' => 4000,
            'motivo' => 'Compra y venta de insumos',
            'id_cliente' => 50,
            'id_tipo_credito' => 2,
            'id_carpeta_credito' => 100,
            'id_credito_detalle' => 100,
            'estado' => 'Desembolsado',
        ]);
    }
}
