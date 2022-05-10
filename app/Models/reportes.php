<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportes extends Model
{
    use HasFactory;

    protected $table = 'reportes';
    protected $fillable = [
        'nombre',
        'tipo_reporte',
        'formato_reporte',
        'id_area',
    ];
}
