<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use App\Models\gestion_credito;
use App\Models\solicitud_credito;
use Illuminate\Http\Request;

class AsociadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $proceso = solicitud_credito::find($id);
        //$asociados = $proceso->empleados;

        $asociados = empleados::join('gestion_creditos', 'gestion_creditos.id_empleado', 'empleados.id')
        ->where('gestion_creditos.id_solicitud_credito', $id)
        ->select(
                'empleados.id_usuario',
                'gestion_creditos.condicion as condicion',
        )->get();

        $empleados = empleados::get();
        return view('tenant.procesos.asociados.index', compact('asociados', 'empleados', 'id'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gestion = new gestion_credito();
        $gestion->id_empleado = (int) $request->id_empleado;
        $gestion->id_solicitud_credito = (int) $request->id_solicitud_credito;
        $gestion->save();
        
        return redirect()->route('creditos.asociados.index', [tenant('id'), $request->id_solicitud_credito]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
