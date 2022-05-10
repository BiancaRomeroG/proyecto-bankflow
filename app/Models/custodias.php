<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custodias extends Model
{
    use HasFactory;

    protected $table = 'custodias';
    protected $fillable = [
        'nombre_cliente',
    ];
}
