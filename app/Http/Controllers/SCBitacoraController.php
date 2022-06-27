<?php

namespace App\Http\Controllers;

use App\Models\Sc_Bitacora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SCBitacoraController extends Controller
{

    public function __invoke($request, $next)
    {
        $this->registrar(Auth::user()->id, 'Inicio de sesión', 
        'Inicio de sesión exitoso en el sistema del usuario');

        return $next($request);
    }
    
    public function index()
    {   //get all accion in descentent orden of bitacora model
        $acciones = Sc_Bitacora::orderBy('id', 'desc')->paginate(10);
        return view('bitacora.index',compact('acciones'))->with('i');
    }

    public static function registrar($id_user, $accion, $descripcion)
    {   
        $user = UsuariosController::find($id_user);
  
        $bitacora = new Sc_Bitacora();
        $bitacora->accion = $accion;
        $bitacora->descripcion = $descripcion;
        $bitacora->id_usuario = $user->id;
        $bitacora->save();    
    }


}
