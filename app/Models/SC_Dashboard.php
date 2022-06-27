<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SC_Dashboard extends Model
{

    public function recaudado(){
        $empresas = empresa::get();
        $recaudado = 0;
        foreach($empresas as $empresa){
            $recaudado = $recaudado + (int) $empresa->plan->detalle->precio;
        }
        return $recaudado;
    }

    public function num_empresas(){
        $cant = empresa::count();
        return $cant;
    }

    public function num_usuarios(){
        $cant = User::count();
        return $cant;
    }

}
