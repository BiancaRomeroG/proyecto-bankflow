<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_credito extends Model
{
    use HasFactory;

    protected $table = 'tipo_creditos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'id_empresa'
    ];
}
