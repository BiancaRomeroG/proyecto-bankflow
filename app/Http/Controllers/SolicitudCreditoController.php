<?php

namespace App\Http\Controllers;

use App\Models\carpeta_credito;
use App\Models\clientes;
use App\Models\credito_detalle;
use App\Models\custodias;
use App\Models\documentos;
use App\Models\empleados;
use App\Models\gestion_credito;
use App\Models\solicitud_credito;
use App\Models\tipo_credito;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SolicitudCreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditos = solicitud_credito::join('gestion_creditos', 'solicitud_creditos.id', 'gestion_creditos.id_solicitud_credito')
        ->where('gestion_creditos.id_empleado', Auth::user()->id)->paginate(8);
        return view('tenant.procesos.index', compact('creditos'))->with('i');
    }

    public function documentos($id){
        $carpeta = carpeta_credito::find($id);
        $documentos = documentos::where('id_carpeta', $id)->get();
        return view('tenant.procesos.documentos.index', compact('documentos', 'carpeta'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = clientes::get();
        $tipos = tipo_credito::get();
        return view('tenant.procesos.create', compact('clientes', 'tipos'));
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
            $empresa = Auth::user()->id_empresa;

            $proceso = new solicitud_credito();
            $proceso->id_cliente = (int) $request->id_cliente;
            $proceso->id_tipo_credito = (int) $request->id_tipo_credito;
            $proceso->monto = $request->monto;
            $proceso->motivo = $request->motivo;
            $proceso->tiempo = now();

            $carpeta = new carpeta_credito();
            $carpeta->info_cliente = $request->info_cliente;
            $carpeta->requisito_prestamo = $request->requisito_prestamo;
            $carpeta->save();

            $detalle = new credito_detalle();
            $detalle->fecha_inicio = now();
            $detalle->fecha_fin = $request->fecha_fin;
            $detalle->descripcion = $request->descripcion;
            $detalle->estado = $request->estado;            
            $detalle->pago_estado = $request->estado;
            $detalle->interes = (float) $request->interes;
            $detalle->capital = (float) $request->capital;
            $detalle->numero_cuotas = (int) $request->numero_cuotas;
            $detalle->save();
            
            $proceso->id_carpeta_credito = $carpeta->id;
            $proceso->id_credito_detalle = $detalle->id;
            
            //dd($proceso);
            $proceso->save();
            
            $empleado = empleados::find(Auth::user()->id);
            $pro_empl = new gestion_credito();
            $pro_empl->id_empleado = $empleado->id;
            $pro_empl->id_solicitud_credito = $proceso->id;
            $pro_empl->save();

            DB::commit();
            BitacoraController::registrar(Auth::user()->id, 'Solicitud Credito',
        'Se creo una solicitud de credito para el cliente '.$request->id_cliente);
        } catch (\Exception $e) {
            DB::rollBack();
            return "Ocurrio un error :(, aqui va una alerta y retorna a la vista index";
        }
        return redirect()->route('creditos.index',tenant('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solicitud_credito  $solicitud_credito
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitud_credito = solicitud_credito::find($id);
        return view('tenant.procesos.show', compact('solicitud_credito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solicitud_credito  $solicitud_credito
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = clientes::get();
        $tipos = tipo_credito::get();
        $proceso = solicitud_credito::find($id);
        return view('tenant.procesos.edit', compact('proceso', 'tipos', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solicitud_credito  $solicitud_credito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solicitud_credito $solicitud_credito)
    {
        try {
            $proceso = solicitud_credito::find($request->id);
           
            $proceso->id_cliente = (int) $request->id_cliente;
            $proceso->id_tipo_credito = (int) $request->id_tipo_credito;
            $proceso->monto = $request->monto;
            $proceso->motivo = $request->motivo;
            //dd($proceso);
            $proceso->update();
            DB::commit();
            BitacoraController::registrar(Auth::user()->id, 'Actualización',
            'Actualización de solicitud de credito para el cliente '.$request->id_cliente);
        } catch (\Exception $e) {
            DB::rollBack();
            return "Ocurrio un error :(, aqui va una alerta y retorna a la vista index";
        }

        return redirect()->route('creditos.index', tenant('id')); //con una alerta que se hizo todo chido
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solicitud_credito  $solicitud_credito
     * @return \Illuminate\Http\Response
     */
    public function destroy(solicitud_credito $solicitud_credito)
    {
        //
    }
}
