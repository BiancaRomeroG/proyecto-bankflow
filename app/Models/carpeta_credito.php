<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carpeta_credito extends Model
{
    use HasFactory;

    protected $table = 'carpeta_creditos';
    protected $fillable = [
        'info_cliente',
        'requisito_prestamo',
    ];
}
