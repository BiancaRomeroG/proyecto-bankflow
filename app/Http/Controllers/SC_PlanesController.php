<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Planes;
use Illuminate\Http\Request;

class SC_PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = Planes::get();
        return view('planes.index', compact('planes'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = new Detalle();
        $detalle->precio =  $request->precio;
        $detalle->miembros =  $request->miembros;
        $detalle->fecha_suscripcion =  $request->fecha_suscripcion;
        $detalle->storage =  $request->storage;
        $detalle->comprobante_pago =  $request->comprobante_pago;
        $detalle->save();

        $plan = new Planes();
        $plan->nombre = $request->nombre;
        $plan->tipo_plan = $request->tipo_plan;
        $plan->id_detalle = $detalle->id;
        $plan->save();
        
        return redirect()->route('planes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Planes::find($id);
        return view('planes.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Planes::find($id);
        return view('planes.edit', compact('plan'));
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
        $plan = Planes::find($request->id);
        $plan->nombre = $request->nombre;
        $plan->tipo_plan = $request->tipo_plan;
        $plan->update();
        $detalle = Detalle::find($plan->id_detalle);
        $detalle->precio =  $request->precio;
        $detalle->miembros =  $request->miembros;
        $detalle->fecha_suscripcion =  $request->fecha_suscripcion;
        $detalle->storage =  $request->storage;
        $detalle->comprobante_pago =  $request->comprobante_pago;
        $detalle->update();
        return redirect()->route('planes.index');
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
