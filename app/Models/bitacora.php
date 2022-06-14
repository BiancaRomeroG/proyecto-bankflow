<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    use HasFactory;

    protected $table = 'bitacoras';
    protected $fillable = [
        'accion',
        'descripcion',
        'id_area',
        'id_usuario',
    ];


    public function area()
    {
        return $this->belongsTo('App\Models\areas', 'id_area');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario');
    }
}
