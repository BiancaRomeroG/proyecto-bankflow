<?php

namespace Database\Seeders;

use App\Models\clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//1 :: u9
        $cliente = new clientes();
        $cliente->id_usuario = 9;
        $cliente->save();
//2 :: u10
        $cliente = new clientes();
        $cliente->id_usuario = 10;
        $cliente->save();
//3 :: u11
        $cliente = new clientes();
        $cliente->id_usuario = 11;
        $cliente->save();
//4 :: u12
        $cliente = new clientes();
        $cliente->id_usuario = 12;
        $cliente->save();
//5 :: u13
        $cliente = new clientes();
        $cliente->id_usuario = 13;
        $cliente->save();
//6 :: u14
        $cliente = new clientes();
        $cliente->id_usuario = 14;
        $cliente->save();
    }
}
