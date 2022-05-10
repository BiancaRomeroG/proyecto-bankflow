<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentos extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = [
        'archivo_ruta',
        'formato',
        'descripcion',
        'id_carpeta',
    ];
}
