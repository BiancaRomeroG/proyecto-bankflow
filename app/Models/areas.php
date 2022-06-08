<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
