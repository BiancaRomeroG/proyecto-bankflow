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
        return view('tenant.bitacora.index',compact('acciones'))->with('i');
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function registrar($id_user, $accion, $descripcion)
    {   
        $user = UsuariosController::find($id_user);
  
        $bitacora = new bitacora();
        $bitacora->funcionalidad = $accion;
        $bitacora->info_detalle = $descripcion;
        $bitacora->id_usuario = $user->id;
        $bitacora->save();    
    }

    public static function registrarCentral($id_user, $accion, $descripcion)
    {   
        $user = UsuariosController::find($id_user);
  
        $bitacora = new bitacora();
        $bitacora->funcionalidad = $accion;
        $bitacora->info_detalle = $descripcion;
        if($id_user != null)
            $bitacora->id_usuario = $user->id;
        else
            $bitacora->id_usuario = null;
        $bitacora->save();    
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
