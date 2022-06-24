<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requisitos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'id_tipo_credito'];

}
