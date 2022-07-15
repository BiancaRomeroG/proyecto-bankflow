<?php

namespace App\Http\Controllers;

use App\Models\carpeta_credito;
use App\Models\documentos;
use App\Models\solicitud_credito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $carpeta = carpeta_credito::find($id);
        $documentos = documentos::where('id_carpeta', $id)->where('tipo', 'normal')->get();
        return view('tenant.procesos.documentos.index', compact('documentos', 'carpeta'))->with('i');
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
        $img = $request->file('archivo_ruta')->store('public');
        $url = Storage::url($img);

        documentos::create([
            'descripcion' => $request->descripcion,
            'formato' => $request->formato,
            'archivo_ruta' => $url,
            'id_carpeta' => $request->id_carpeta,
            'tipo' => 'normal',
        ]);

        $solicitud = solicitud_credito::where('solicitud_creditos.id_carpeta_credito', $request->id_carpeta)->first();
        $solicitud->estado = 'En revision';
        $solicitud->save();

        return redirect()->route('creditos.documentos.index', [tenant('id') , $request->id_carpeta]);
    }

    public function descargar($id){
        $documento = documentos::find($id);
        if($documento->archivo_ruta != null){
            $path = public_path($documento->archivo_ruta);
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
    public function show($carpeta, $documento)
    {
        $documento = documentos::findOrFail($documento);
        $carpeta = carpeta_credito::findOrFail($carpeta);
        return view('tenant.procesos.documentos.show', compact('documento', 'carpeta'));
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
    public function destroy($carpeta, $documento)
    {
        $documento = documentos::findOrFail($documento);
        $documento->delete();
        return redirect()->route('creditos.documentos.index', [tenant('id') , $carpeta]);
    }
}
