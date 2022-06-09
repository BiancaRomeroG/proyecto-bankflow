<?php

namespace Database\Seeders\Tenant\Alas;

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
        credito_detalle::create([
                'fecha_inicio' => '2022-6-10',
                'fecha_fin' => '2024-10-5',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Aprobado',
                'tasa_interes' => 2.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 12,
                'id_carpeta' => 1
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-27',
                'fecha_fin' => '2024-11-5',
                'descripcion' => 'Sillas y mesas de roble',
                'estado' => 'Aprobado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 19,
                'id_carpeta' => 2
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-8',
                'fecha_fin' => '2024-7-19',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'Aprobado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 22,
                'id_carpeta' => 3
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-10',
                'fecha_fin' => '2024-8-18',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Aprobado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 14,
                'id_carpeta' => 4
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-28',
                'fecha_fin' => '2024-8-10',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 23,
                'id_carpeta' => 5
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-23',
                'fecha_fin' => '2024-11-11',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Aprobado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 14,
                'id_carpeta' => 6
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-10',
                'fecha_fin' => '2024-9-17',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Rechazado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 20,
                'id_carpeta' => 7
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-12',
                'fecha_fin' => '2024-12-22',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Aprobado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 25,
                'id_carpeta' => 8
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-17',
                'fecha_fin' => '2024-10-11',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'En revision',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 25,
                'id_carpeta' => 9
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-18',
                'fecha_fin' => '2024-12-28',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'Rechazado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 20,
                'id_carpeta' => 10
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-7',
                'fecha_fin' => '2024-11-23',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Congelado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 13,
                'id_carpeta' => 11
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-21',
                'fecha_fin' => '2024-8-7',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Aprobado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 20,
                'id_carpeta' => 12
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-10',
                'fecha_fin' => '2024-8-28',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 25,
                'id_carpeta' => 13
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-23',
                'fecha_fin' => '2024-11-20',
                'descripcion' => 'Motocicleta Honda modelo XR5',
                'estado' => 'Aprobado',
                'tasa_interes' => 2.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 10,
                'id_carpeta' => 14
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-4',
                'fecha_fin' => '2024-10-13',
                'descripcion' => 'Sillas y mesas de roble',
                'estado' => 'En revision',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 18,
                'id_carpeta' => 15
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-14',
                'fecha_fin' => '2024-9-27',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Aprobado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 21,
                'id_carpeta' => 16
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-24',
                'fecha_fin' => '2024-11-2',
                'descripcion' => 'Motocicleta Honda modelo XR5',
                'estado' => 'Congelado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 17,
                'id_carpeta' => 17
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-2',
                'fecha_fin' => '2024-12-20',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Aprobado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 14,
                'id_carpeta' => 18
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-12',
                'fecha_fin' => '2024-11-17',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 10,
                'id_carpeta' => 19
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-27',
                'fecha_fin' => '2024-8-14',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Rechazado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 22,
                'id_carpeta' => 20
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-22',
                'fecha_fin' => '2024-11-11',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 20,
                'id_carpeta' => 21
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-8',
                'fecha_fin' => '2024-11-6',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 18,
                'id_carpeta' => 22
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-13',
                'fecha_fin' => '2024-10-22',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Rechazado',
                'tasa_interes' => 2.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 23,
                'id_carpeta' => 23
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-2',
                'fecha_fin' => '2024-11-2',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 19,
                'id_carpeta' => 24
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-19',
                'fecha_fin' => '2024-12-8',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'Congelado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 12,
                'id_carpeta' => 25
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-8',
                'fecha_fin' => '2024-10-28',
                'descripcion' => 'Terreno y casa ubicado en zona centro',
                'estado' => 'Aprobado',
                'tasa_interes' => 2.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 24,
                'id_carpeta' => 26
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-22',
                'fecha_fin' => '2024-8-17',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Rechazado',
                'tasa_interes' => 2.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 19,
                'id_carpeta' => 27
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-8',
                'fecha_fin' => '2024-8-28',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 12,
                'id_carpeta' => 28
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-28',
                'fecha_fin' => '2024-8-4',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Aprobado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 13,
                'id_carpeta' => 29
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-20',
                'fecha_fin' => '2024-10-24',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'Rechazado',
                'tasa_interes' => 2.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 10,
                'id_carpeta' => 30
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-8',
                'fecha_fin' => '2024-10-5',
                'descripcion' => 'Establecimiento para expandir el negocio de ventas',
                'estado' => 'Congelado',
                'tasa_interes' => 2.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 18,
                'id_carpeta' => 31
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-5',
                'fecha_fin' => '2024-11-16',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 11,
                'id_carpeta' => 32
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-14',
                'fecha_fin' => '2024-10-13',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 10,
                'id_carpeta' => 33
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-7',
                'fecha_fin' => '2024-10-24',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'En revision',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 11,
                'id_carpeta' => 34
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-22',
                'fecha_fin' => '2024-7-8',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 17,
                'id_carpeta' => 35
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-7',
                'fecha_fin' => '2024-12-28',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 21,
                'id_carpeta' => 36
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-21',
                'fecha_fin' => '2024-12-28',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 14,
                'id_carpeta' => 37
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-21',
                'fecha_fin' => '2024-7-13',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 14,
                'id_carpeta' => 38
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-26',
                'fecha_fin' => '2024-9-16',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Aprobado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 11,
                'id_carpeta' => 39
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-17',
                'fecha_fin' => '2024-9-19',
                'descripcion' => 'Establecimiento para expandir el negocio de ventas',
                'estado' => 'Aprobado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 16,
                'id_carpeta' => 40
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-24',
                'fecha_fin' => '2024-8-26',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Aprobado',
                'tasa_interes' => 2.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 17,
                'id_carpeta' => 41
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-26',
                'fecha_fin' => '2024-12-13',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'En revision',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 20,
                'id_carpeta' => 42
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-25',
                'fecha_fin' => '2024-8-17',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Congelado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 23,
                'id_carpeta' => 43
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-4',
                'fecha_fin' => '2024-8-13',
                'descripcion' => 'Motocicleta Honda modelo XR5',
                'estado' => 'Aprobado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 25,
                'id_carpeta' => 44
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-21',
                'fecha_fin' => '2024-9-28',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Rechazado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 15,
                'id_carpeta' => 45
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-5',
                'fecha_fin' => '2024-7-15',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Congelado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 12,
                'id_carpeta' => 46
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-1',
                'fecha_fin' => '2024-10-12',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'Congelado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 21,
                'id_carpeta' => 47
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-7',
                'fecha_fin' => '2024-8-19',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 18,
                'id_carpeta' => 48
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-5',
                'fecha_fin' => '2024-9-25',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'En revision',
                'tasa_interes' => 2.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 21,
                'id_carpeta' => 49
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-14',
                'fecha_fin' => '2024-9-3',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'Congelado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 15,
                'id_carpeta' => 50
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-28',
                'fecha_fin' => '2024-9-26',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Aprobado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 20,
                'id_carpeta' => 51
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-26',
                'fecha_fin' => '2024-11-4',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'En revision',
                'tasa_interes' => 4.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 12,
                'id_carpeta' => 52
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-26',
                'fecha_fin' => '2024-9-13',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 20,
                'id_carpeta' => 53
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-20',
                'fecha_fin' => '2024-12-6',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'Aprobado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 23,
                'id_carpeta' => 54
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-18',
                'fecha_fin' => '2024-7-13',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Aprobado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 14,
                'id_carpeta' => 55
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-21',
                'fecha_fin' => '2024-7-1',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'En revision',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 12,
                'id_carpeta' => 56
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-16',
                'fecha_fin' => '2024-10-20',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'En revision',
                'tasa_interes' => 4.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 18,
                'id_carpeta' => 57
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-20',
                'fecha_fin' => '2024-7-16',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'En revision',
                'tasa_interes' => 4.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 24,
                'id_carpeta' => 58
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-28',
                'fecha_fin' => '2024-7-1',
                'descripcion' => 'Terreno y casa ubicado en zona centro',
                'estado' => 'Congelado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 20,
                'id_carpeta' => 59
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-15',
                'fecha_fin' => '2024-11-22',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 17,
                'id_carpeta' => 60
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-20',
                'fecha_fin' => '2024-11-17',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Rechazado',
                'tasa_interes' => 2.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 12,
                'id_carpeta' => 61
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-21',
                'fecha_fin' => '2024-10-23',
                'descripcion' => 'Terreno y casa ubicado en zona centro',
                'estado' => 'Aprobado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 17,
                'id_carpeta' => 62
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-8',
                'fecha_fin' => '2024-8-26',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Congelado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 21,
                'id_carpeta' => 63
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-5',
                'fecha_fin' => '2024-8-1',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Congelado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 16,
                'id_carpeta' => 64
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-13',
                'fecha_fin' => '2024-7-8',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 23,
                'id_carpeta' => 65
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-14',
                'fecha_fin' => '2024-11-7',
                'descripcion' => 'Establecimiento para expandir el negocio de ventas',
                'estado' => 'Congelado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 21,
                'id_carpeta' => 66
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-9',
                'fecha_fin' => '2024-9-10',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'En revision',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 18,
                'id_carpeta' => 67
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-4',
                'fecha_fin' => '2024-8-1',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Rechazado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 10,
                'id_carpeta' => 68
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-21',
                'fecha_fin' => '2024-10-18',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Rechazado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 16,
                'id_carpeta' => 69
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-6',
                'fecha_fin' => '2024-7-20',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'En revision',
                'tasa_interes' => 2.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 18,
                'id_carpeta' => 70
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-3',
                'fecha_fin' => '2024-12-20',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Congelado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 21,
                'id_carpeta' => 71
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-27',
                'fecha_fin' => '2024-10-3',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 14,
                'id_carpeta' => 72
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-11',
                'fecha_fin' => '2024-10-3',
                'descripcion' => 'Motocicleta Honda modelo XR5',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 16,
                'id_carpeta' => 73
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-16',
                'fecha_fin' => '2024-9-9',
                'descripcion' => 'Viaticos par viaje',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 25,
                'id_carpeta' => 74
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-9',
                'fecha_fin' => '2024-12-22',
                'descripcion' => 'Sillas y mesas de roble',
                'estado' => 'En revision',
                'tasa_interes' => 2.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 13,
                'id_carpeta' => 75
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-23',
                'fecha_fin' => '2024-7-14',
                'descripcion' => 'Sillas y mesas de roble',
                'estado' => 'Rechazado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 15,
                'id_carpeta' => 76
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-23',
                'fecha_fin' => '2024-9-24',
                'descripcion' => 'Sillas y mesas de roble',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 20,
                'id_carpeta' => 77
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-18',
                'fecha_fin' => '2024-9-9',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Congelado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 20,
                'id_carpeta' => 78
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-23',
                'fecha_fin' => '2024-10-17',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 13,
                'id_carpeta' => 79
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-15',
                'fecha_fin' => '2024-9-18',
                'descripcion' => 'Motocicleta Honda modelo XR5',
                'estado' => 'Aprobado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 12,
                'id_carpeta' => 80
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-6',
                'fecha_fin' => '2024-8-18',
                'descripcion' => 'Camion Toyota Modelo Condor',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 16,
                'id_carpeta' => 81
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-1',
                'fecha_fin' => '2024-10-19',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 22,
                'id_carpeta' => 82
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-24',
                'fecha_fin' => '2024-8-5',
                'descripcion' => 'Computadora Mac para estudios de carrera de diseños',
                'estado' => 'Rechazado',
                'tasa_interes' => 2.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 15,
                'id_carpeta' => 83
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-12',
                'fecha_fin' => '2024-9-14',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Congelado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 23,
                'id_carpeta' => 84
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-4-1',
                'fecha_fin' => '2024-8-7',
                'descripcion' => 'Sillas y mesas de roble',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 18,
                'id_carpeta' => 85
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-6-12',
                'fecha_fin' => '2024-7-10',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'Aprobado',
                'tasa_interes' => 2.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 19,
                'id_carpeta' => 86
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-3',
                'fecha_fin' => '2024-10-8',
                'descripcion' => 'Camion Toyota Modelo Condor',
                'estado' => 'Rechazado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 18,
                'id_carpeta' => 87
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-12',
                'fecha_fin' => '2024-10-14',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Congelado',
                'tasa_interes' => 2.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 20,
                'id_carpeta' => 88
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-19',
                'fecha_fin' => '2024-7-21',
                'descripcion' => 'Establecimiento para expandir el negocio de ventas',
                'estado' => 'Rechazado',
                'tasa_interes' => 2.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 25,
                'id_carpeta' => 89
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-16',
                'fecha_fin' => '2024-12-2',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Aprobado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 19,
                'id_carpeta' => 90
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-16',
                'fecha_fin' => '2024-10-24',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 12,
                'id_carpeta' => 91
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-8',
                'fecha_fin' => '2024-10-20',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Congelado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 21,
                'id_carpeta' => 92
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-21',
                'fecha_fin' => '2024-9-23',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Congelado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 18,
                'id_carpeta' => 93
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-9',
                'fecha_fin' => '2024-8-28',
                'descripcion' => 'Almacen para inventario excesivo',
                'estado' => 'Congelado',
                'tasa_interes' => 1.5,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 23,
                'id_carpeta' => 94
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-3-7',
                'fecha_fin' => '2024-9-9',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'Rechazado',
                'tasa_interes' => 2.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 18,
                'id_carpeta' => 95
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-27',
                'fecha_fin' => '2024-7-3',
                'descripcion' => 'Televisor Samsung 4k',
                'estado' => 'En revision',
                'tasa_interes' => 2.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 17,
                'id_carpeta' => 96
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-10',
                'fecha_fin' => '2024-11-4',
                'descripcion' => 'Pasajes para vacaciones a Cancun',
                'estado' => 'Rechazado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'En espera',
                'numero_cuotas' => 24,
                'id_carpeta' => 97
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-2-4',
                'fecha_fin' => '2024-9-2',
                'descripcion' => 'Muebles para salon de belleza',
                'estado' => 'Congelado',
                'tasa_interes' => 4.0,
                'pago_estado' => 'Desembolsado',
                'numero_cuotas' => 13,
                'id_carpeta' => 98
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-1-2',
                'fecha_fin' => '2024-10-11',
                'descripcion' => 'Inventario traido desde china',
                'estado' => 'Aprobado',
                'tasa_interes' => 3.0,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 13,
                'id_carpeta' => 99
            ]);
            
            credito_detalle::create([
                'fecha_inicio' => '2022-5-9',
                'fecha_fin' => '2024-12-2',
                'descripcion' => 'Insumos traidos directamente de Brasil',
                'estado' => 'Congelado',
                'tasa_interes' => 3.5,
                'pago_estado' => 'En proceso',
                'numero_cuotas' => 22,
                'id_carpeta' => 100
            ]);
    }
}
