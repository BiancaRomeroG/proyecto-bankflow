<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\solicitud_credito;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = clientes::paginate(20);
        return view('tenant.clientes.index', compact('clientes'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tenant.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosClientes = request()->except('_token');

        $usuario = User::create($datosClientes);

        $cliente = new clientes;
        $cliente->id_usuario= $usuario->id;

        $cliente->save();


        //registrar la accion en la bitacora
        BitacoraController::create(Auth::user()->id,'Creación de cliente',
         'Se creó el cliente: '.$cliente->nombre.' '.$cliente->ap_paterno.' '.$cliente->ap_materno.' con id: '.$cliente->id);

        return redirect()->route('clientes.create', tenant('id'))->with('info', 'El aprobado');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $cliente)
    {
        $creditos = solicitud_credito::where('id_cliente', $cliente->id)->paginate(5);
        return view('tenant.clientes.show', compact('cliente', 'creditos'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $cliente)
    {
        return view('tenant.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $clientes)
    {
        $usuario = User::find($request->id_usuario);
        $usuario->name = $request->name;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->ci = $request->ci;
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->update();

        $cliente = clientes::find($request->id);
        $cliente->id_usuario = $usuario->id;
        $cliente->update();

        //registrar en bitacora esta accion
        BitacoraController::create(Auth::user()->id,'Edición de Cliente',
        'Se editó datos del cliente: '.$cliente->nombre.' '.$cliente->ap_paterno.' '.$cliente->ap_materno.' con id: '.$cliente->id);

        return redirect()->route('clientes.index', tenant('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes)
    {
        //
    }

}
