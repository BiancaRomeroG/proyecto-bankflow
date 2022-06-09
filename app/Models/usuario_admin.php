<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario_admin extends Model
{
    use HasFactory;

    protected $table = "usuario_admin";
    protected $fillable = [
        'name',
        'ap_paterno',
        'ap_materno',
        'telefono',
        'email',
    ];
}
