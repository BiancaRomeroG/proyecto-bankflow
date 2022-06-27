<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Planes;
use Illuminate\Http\Request;

class SC_EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = empresa::get();
        return view('empresas.index', compact('empresas'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes = Planes::get();
        return view('empresas.create', compact('planes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = new empresa();
        $empresa->nombre = $request->nombre;
        $empresa->cant_trabajadores = $request->cant_trabajadores;
        $empresa->direccion = $request->direccion;
        $empresa->id_planes = $request->id_planes;
        $empresa->id_usuario_admin = 1; //corregir despues
        $empresa->save();
        
        return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = empresa::find($id);
        $usuario = $empresa->usuario_admin;
        $plan = $empresa->plan;
        return view('empresas.show', compact('empresa', 'usuario', 'plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planes = Planes::get();
        $empresa = empresa::find($id);
        return view('empresas.edit', compact('empresa', 'planes'));
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
        $empresa = empresa::find($request->id);
        $empresa->nombre = $request->nombre;
        $empresa->cant_trabajadores = $request->cant_trabajadores;
        $empresa->direccion = $request->direccion;
        $empresa->id_planes = $request->id_planes;
        $empresa->update();
        return redirect()->route('empresas.index');
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
