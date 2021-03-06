<?php

namespace App\Http\Controllers;

use App\Models\tipo_credito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\at;

class TipoCreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = tipo_credito::get();
        return view('tenant.procesos.tipos.index', compact('tipos'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenant.procesos.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $tipo = tipo_credito::create([
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                ]);
                $tipo->save();
            });     
            DB::commit();
            BitacoraController::registrar(Auth::user()->id, 'Creación',
            'Se creó el tipo de crédito: ' . $request->nombre);
        } catch (\Exception $e) {
            DB::rollBack();
            BitacoraController::registrar(Auth::user()->id, 'Error',
            'Se intentó crear el tipo de crédito: ' . $request->nombre);
            //retorna una vista indicando hubo algun error
        }
        return redirect()->route('tipos.index', tenant('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_credito  $tipo_credito
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_credito $tipo_credito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_credito  $tipo_credito
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = tipo_credito::find($id);
        return view('tenant.procesos.tipos.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo_credito  $tipo_credito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_credito $tipo_credito)
    {
        try {
            $tipo = tipo_credito::findOrFail($request->id);   
            $tipo->nombre = $request->nombre;
            $tipo->descripcion = $request->descripcion;
            $tipo->update();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return "Ocurrio un error :(, aqui va una alerta y retorna a la vista index";
        }

        return redirect()->route('tipos.index',tenant('id')); //con una alerta que se hizo todo chido
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_credito  $tipo_credito
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_credito $tipo_credito)
    {
        //
    }
}
