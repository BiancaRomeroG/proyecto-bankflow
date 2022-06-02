<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\User;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = roles::paginate(8);
        return view('roles.index', compact('roles'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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
                $roles = roles::create([
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                ]);
                $roles->save();
            });     
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            //retorna una vista indicando hubo algun error
        }
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show($rol)
    {
        $rol = roles::findOrFail($rol);      
        $usuarios = DB::table('users')->where('users.id_rol', '=', $rol->id)->paginate(6); 

        return view('roles.show', compact('rol', 'usuarios'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($rol)
    {
        $rol = roles::findOrFail($rol);  
        return view('roles.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rol)
    {
        try {
            $rol = roles::findOrFail($rol);   
            $rol->nombre = $request->nombre;
            $rol->descripcion = $request->descripcion;
            $rol->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return "Ocurrio un error :(, aqui va una alerta y retorna a la vista index";
        }

        return redirect()->route('roles.index'); //con una alerta que se hizo todo chido
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy($roles)
    {
        //
    }
}
