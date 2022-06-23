<?php

namespace App\Http\Controllers;

use App\Models\areas;
use App\Models\empleados;
use App\Models\User;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = DB::table('areas')->get();
        $areas = areas::paginate(8);
        return view('tenant.areas.index', compact('areas'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenant.areas.create');
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
                $areas = areas::create([
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                ]);
                $areas->save();
                BitacoraController::create(Auth::user()->id, 'Creación de area', 
                'El usuario con id: '.Auth::user()->id.' creó el area: '.$areas->nombre.' con id: '.$areas->id);
            });     
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            BitacoraController::create(Auth::user()->id, 'Error al crear', 
            'Error al intentar crear el area: '.$request->nombre.'por el usuario con id: '.Auth::user()->id);
            //retorna una vista indicando hubo algun error
        }
        //registrar esta accion en bitacora
        return redirect()->route('areas.index', tenant('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function show($area)
    {
        $area = areas::findOrFail($area);
        try {
            $empleados = empleados::where('id_area', $area->id)->get();
        } catch (\Exception $e) {
            //retornar alerta de ha ocurrido un error
        }
        return view('tenant.areas.show', compact('empleados', 'area'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit($area)
    {
        $area = areas::findOrFail($area);
        return view('tenant.areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $area)
    {
        try {
            $area = areas::findOrFail($area);   
            $area->nombre = $request->nombre;
            $area->descripcion = $request->descripcion;
            $area->save();

            DB::commit();

            //se guarda en bitacora esta accion
            BitacoraController::create(Auth::user()->id, 'Edición de area',
            'El usuario con id: '.Auth::user()->id.' editó el area: '.$area->nombre.' con id: '.$area->id);
        } catch (\Exception $e) {
            DB::rollBack();
            BitacoraController::create(Auth::user()->id, 'Error al editar',
            'Error al intentar editar el area: '.$area->nombre.'por el usuario con id: '.Auth::user()->id);
            return "Ocurrio un error :(, aqui va una alerta y retorna a la vista index";
        }

        return redirect()->route('areas.index', tenant('id')); //con una alerta que se hizo todo chido
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(areas $areas)
    {
        //
    }


}
