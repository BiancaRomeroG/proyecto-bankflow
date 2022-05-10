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
        'tiempo',
        'motivo',
        'id_cliente',
        'id_tipo_credito',
        'id_carpeta_credito',
        'id_credito_detalle'
    ];
}
