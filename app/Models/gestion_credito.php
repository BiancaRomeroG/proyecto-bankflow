<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestion_credito extends Model
{
    use HasFactory;

    protected $table = 'gestion_creditos';
    protected $fillable = [
        'id_empleado',
        'id_solicitud_credito',
    ];
}
