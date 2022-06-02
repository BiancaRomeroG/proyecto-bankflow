<?php

namespace App\Http\Controllers;

use App\Models\areas;
use App\Models\User;
use App\Models\usuarios;
use Illuminate\Http\Request;
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
        $areas = areas::paginate(8);
        return view('areas.index', compact('areas'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
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
            });     
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            //retorna una vista indicando hubo algun error
        }

        return redirect()->route('areas.index');
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
            $empleados = User::join('empleados', 'empleados.id_usuario', 'users.id')
                            ->join('roles', 'users.id_rol', 'roles.id')
                            ->join('areas', 'empleados.id_area', 'areas.id')
                            ->where('areas.id', '=', $area->id)
                            ->select('empleados.id as id','users.name', 'users.ap_paterno', 'users.ap_materno','users.telefono','users.email','users.ci', 'roles.nombre As nombre_rol')
                            ->get();
        } catch (\Exception $e) {
            //retornar alerta de ha ocurrido un error
        }
        return view('areas.show', compact('empleados', 'area'))->with('i');
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
        return view('areas.edit', compact('area'));
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
        } catch (\Exception $e) {
            DB::rollBack();
            return "Ocurrio un error :(, aqui va una alerta y retorna a la vista index";
        }

        return redirect()->route('areas.index'); //con una alerta que se hizo todo chido
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
