<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_credito extends Model
{
    use HasFactory;

    protected $table = 'solicitud_creditos';
    protected $fillable = [
        'monto',
        'motivo',
        'estado',
        'id_cliente',
        'id_tipo_credito',
        'id_carpeta_credito',
        'id_credito_detalle'
    ];

    public function tipo(){
        return $this->belongsTo('App\Models\tipo_credito', 'id_tipo_credito', 'id');
    }

    public function empleados(){
        return $this->belongsToMany('App\Models\empleados', 'gestion_creditos', 'id_solicitud_credito', 'id_empleado');
    }

    public function cliente(){
        return $this->belongsTo('App\Models\clientes', 'id_cliente', 'id');
    }

    public function detalles(){
        return $this->belongsTo('App\Models\credito_detalle', 'id_credito_detalle', 'id');
    }
}
