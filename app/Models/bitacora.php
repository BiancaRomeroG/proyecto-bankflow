<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    use HasFactory;

    protected $table = 'bitacoras';
    protected $fillable = [
        'accion',
        'descripcion',
        'id_area',
        'id_empresa'
    ];
}
