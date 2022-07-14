<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\solicitud_credito;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class creditoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cliente = clientes::where('clientes.id_usuario', Auth::user()->id)->first();
        $creditos = solicitud_credito::where('solicitud_creditos.id_cliente', $cliente->id)
        ->select(
            'solicitud_creditos.id',
            'solicitud_creditos.monto',
            'solicitud_creditos.motivo',
            'solicitud_creditos.estado',
            'solicitud_creditos.id_cliente',
            'solicitud_creditos.id_tipo_credito',
            'solicitud_creditos.id_credito_detalle',
            'solicitud_creditos.id_carpeta_credito',
        )->orderBy('solicitud_creditos.updated_at', 'ASC')->get();
    return view('tenant.credito.index', compact('creditos'))->with('i');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitud_credito = solicitud_credito::find($id);
        return view('tenant.credito.show', compact('solicitud_credito'));
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
