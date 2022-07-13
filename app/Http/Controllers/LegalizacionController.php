<?php

namespace App\Http\Controllers;

use App\Models\carpeta_credito;
use App\Models\documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LegalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $carpeta = carpeta_credito::find($id);
        $documentos = documentos::where('id_carpeta', $id)->where('tipo', 'legal')->get();
        return view('tenant.procesos.documentos.legales.index', compact('documentos', 'carpeta'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('tenant.procesos.documentos.legales.create', compact('id'));
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
            'tipo' => 'legal',
        ]);

        return redirect()->route('creditos.legalizacion.index', [tenant('id'), $request->id_carpeta]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($carpeta, $documento)
    {
        $documento = documentos::findOrFail($documento);
        $carpeta = carpeta_credito::findOrFail($carpeta);
        return view('tenant.procesos.documentos.legales.show', compact('documento', 'carpeta'));
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
    public function destroy($carpeta, $documento)
    {
        $documento = documentos::findOrFail($documento);
        $documento->delete();
        return redirect()->route('creditos.legalizacion.index', [tenant('id'), $carpeta]);
    }
}
