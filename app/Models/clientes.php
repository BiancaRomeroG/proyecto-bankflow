<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $fillable = [
        'id_usuario',
        'id_empresa'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'id_usuario', 'id');
    }

    public function creditos(){
        return $this->hasMany('App\Models\solicitud_credito', 'id_cliente', 'id');
    }    
}
