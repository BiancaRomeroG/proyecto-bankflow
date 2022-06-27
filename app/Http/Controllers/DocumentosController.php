<?php

namespace App\Http\Controllers;

use App\Models\carpeta_credito;
use App\Models\documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create($id)
    {
        return view('tenant.procesos.documentos.create', compact('id') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        try {
            DB::beginTransaction();
            documentos::store($request);
            DB::commit();
            return redirect()->route('credito.documentos', [tenant('id') ,$request->id_carpeta]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('credito.documentos', [tenant('id') ,$request->id_carpeta]);
        }
    }

    public function descargar($id){
        $documento = documentos::find($id);
        if($documento->archivo_ruta != null){
        $path = storage_path("app/public/".$documento->archivo_ruta);
        BitacoraController::registrar(Auth::user()->id, 'Descargar documento', 
        'El usuario '.Auth::user()->nombre.' '.Auth::user()->ap_paterno.' '.Auth::user()->ap_materno.
        ' descargó el documento con ruta: '.$documento->archivo_ruta);
        return response()->download($path);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(documentos $documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit(documentos $documentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, documentos $documentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(documentos $documentos)
    {
        //
    }
}
