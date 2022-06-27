<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;

    protected $table = 'sc_empresas';
    protected $fillable = [
        'nombre',
        'direccion',
        'cant_trabajadores',
        'id_planes',
        'id_usuario_admin'
    ];

    public function plan(){
        return $this->belongsTo('App\Models\Planes', 'id_planes', 'id');
    }

    public function usuario_admin(){
        return $this->belongsTo('App\Models\usuario_admin', 'id_usuario_admin', 'id');
    }
}
