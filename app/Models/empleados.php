<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    protected $fillable = [
        'id_usuario',
        'id_area',
    ];
}
