<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sc_Bitacora extends Model
{
    use HasFactory;

    protected $table = 'sc_bitacoras';
    protected $fillable = [
        'fecha',
        'accion',
        'descripcion',
        'id_usuario'
    ];
}
