<?php

namespace App\Http\Controllers;

use App\Models\bitacora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //get all accion in descentent orden of bitacora model
        $acciones = bitacora::orderBy('id', 'desc')->paginate(10);
        return view('bitacora.index',compact('acciones'))->with('i');
    }

    public function __invoke($request, $next)
    {
        $this->create(Auth::user()->id, 'Inicio de sesión', 
        'Inicio de sesión exitoso en el sistema del usuario: '. Auth::user()->name.' '.Auth::user()->ap_paterno.' '.Auth::user()->ap_materno.' con id: '.Auth::user()->id, Auth::user()->id_empresa );

        return $next($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create($id_user, $accion, $descripcion)
    {   
        $user = UsuariosController::find($id_user);
        $empleado = EmpleadosController::findBy('id_usuario', $user->id);
        if($empleado){
        $bitacora = new bitacora();
        $bitacora->accion = $accion;
        $bitacora->descripcion = $descripcion;
        $bitacora->id_area = $empleado->id_area;
        $bitacora->id_empresa = $empleado->id_empresa;
        $bitacora->save();
        }
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function show(bitacora $bitacora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit(bitacora $bitacora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bitacora $bitacora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy(bitacora $bitacora)
    {
        //
    }


    

}
