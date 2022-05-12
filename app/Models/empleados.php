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

    public function user(){
        return $this->belongsTo('App\Models\User', 'id_usuario', 'id');
    }

    public function area(){
        return $this->belongsTo('App\Models\areas', 'id_area', 'id');
    }
}
