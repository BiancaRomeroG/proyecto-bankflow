<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class documentos extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = [
        'archivo_ruta',
        'formato',
        'descripcion',
        'id_carpeta',
        'id_empresa',
    ];

    public static function store($request){
        $documento = new documentos();
        $documento->descripcion = $request->descripcion;
        $documento->formato = $request->formato;

            $extension = $request->archivo_ruta->extension();
            $nombre = round(microtime(true)) . '.' . $extension;
            Storage::disk('public')->putFileAs('documentos', $request->archivo_ruta, $nombre);
            $path = 'documentos/' . $nombre;
            $documento->archivo_ruta = $path;

        $documento->id_carpeta = (int) $request->id_carpeta;
        $documento->id_empresa = (int) $request->id_empresa;
        $documento->save();
    }
}
