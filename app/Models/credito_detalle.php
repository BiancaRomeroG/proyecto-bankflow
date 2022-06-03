<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credito_detalle extends Model
{
    use HasFactory;

    protected $table = 'credito_detalles';
    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'descripcion',
        'estado',
        'interes',
        'capital',
        'pago_estado',
        'numero_cuotas',
        'id_custodia'
    ];

    public function custodia(){
        return $this->belongsTo('App\Models\custodias', 'id_custodia', 'id');
    }
    
}
