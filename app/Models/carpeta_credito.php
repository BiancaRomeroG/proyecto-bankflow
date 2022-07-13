<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carpeta_credito extends Model
{
    use HasFactory;

    protected $table = 'carpeta_creditos';
    protected $fillable = [
        'id_cliente',
        'requisito_prestamo',
    ];

    public function cliente() {
        return $this->belongsTo('App\Models\clientes', 'id_cliente');
    }
}
