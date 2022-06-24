<?php

namespace App\Http\Controllers;

use App\Models\carpeta_credito;
use App\Models\documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $documentos = documentos::where('id_carpeta', $id)->where('formato', 'legal')->get();
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
        try {
            DB::beginTransaction();
            documentos::store($request);
            DB::commit();
            return redirect()->route('legalizacion.index', [tenant('id') ,$request->id_carpeta]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('legalizacion.index', [tenant('id') ,$request->id_carpeta]);
        }
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