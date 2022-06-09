<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;

    protected $table = 'planes';
    protected $fillable = [
        'nombre',
        'tipo_plan',
        'id_detalle'
    ];
}
