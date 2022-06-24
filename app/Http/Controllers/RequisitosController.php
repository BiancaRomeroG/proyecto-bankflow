<?php

namespace App\Http\Controllers;

use App\Models\requisitos;
use App\Models\tipo_credito;
use Illuminate\Http\Request;

class RequisitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tipo = tipo_credito::find($id);
        $requisitos = $tipo->requisitos;
        return view('tenant.procesos.tipos.requisitos.index', compact('tipo', 'requisitos'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $tipo = tipo_credito::find($id);
        return view('tenant.procesos.tipos.requisitos.create', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requisito = new requisitos();
        $requisito->nombre = $request->nombre;
        $requisito->descripcion = $request->descripcion;
        $requisito->id_tipo_credito = $request->id_tipo_credito;
        $requisito->save();
        return redirect()->route('requisitos.index', [tenant('id'), $request->id_tipo_credito]);
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
        $requisito = requisitos::find($id);
        return view('tenant.procesos.tipos.requisitos.edit', compact('requisito'));
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
        $requisito = requisitos::find($id);
        $requisito->nombre = $request->nombre;
        $requisito->descripcion = $request->descripcion;
        $requisito->id_tipo_credito = $request->id_tipo_credito;
        $requisito->update();
        return redirect()->route('requisitos.index', [tenant('id'), $request->id_tipo_credito]);
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
