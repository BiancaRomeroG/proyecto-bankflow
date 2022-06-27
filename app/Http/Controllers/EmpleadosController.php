<?php

namespace App\Http\Controllers;

use App\Models\areas;
use App\Models\empleados;
use App\Models\roles;
use App\Models\solicitud_credito;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = empleados::paginate(6);
        return view('tenant.empleados.index', compact('empleados'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas=areas::get();
        return view('tenant.empleados.create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datosEmpleados = request()->except('_token', 'id_area');
        $usuario = User::create($datosEmpleados);
         
        $empleado = new empleados();
        $empleado->id_usuario = $usuario->id;
        $empleado->id_area = $request->id_area;
        $empleado->save();

        //registrar en bitacora esta accion
        BitacoraController::registrar(Auth::user()->id, 'Creación de empleado',
            'Se creó el empleado: '.$empleado->nombre.' '.$empleado->ap_paterno.' '.$empleado->ap_materno);

        return redirect()->route('empleados.index', tenant('id'))->with('info', 'El aprobado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleado)
    {
        $creditos = solicitud_credito::join('gestion_creditos', 'solicitud_creditos.id', 'gestion_creditos.id_solicitud_credito')
        ->where('gestion_creditos.id_empleado', $empleado->id)->paginate(5);
        return view('tenant.empleados.show', compact('empleado', 'creditos'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(empleados $empleado)
    {
        $roles = Role::all();
        $rolesEmpleado = $empleado->user->roles;
        
        for ($i=0; $i < count($rolesEmpleado); $i++) 
            $roles[$rolesEmpleado[$i]->id - 1]->estado = 1;

        $areas = areas::get();
        return view('tenant.empleados.edit', compact('empleado', 'areas', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleados $empleado)
    {
        $usuario = User::find($request->id_usuario);
        $usuario->name = $request->name;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->ci = $request->ci;
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->update();
        $empleado = empleados::find($request->id);
        $empleado->id_usuario = $usuario->id;
        $empleado->id_area = $request->id_area;
        $empleado->update();

        $usuario->roles()->sync($request->roles2);

        //registrar en bitacora esta accion
        BitacoraController::registrar(Auth::user()->id, 'Edición de empleado',
            'Se editó los datos del empleado: '.$usuario->name.' '.$usuario->ap_paterno.' '.$usuario->ap_materno);
        return redirect()->route('empleados.edit', [tenant('id'), $empleado])->with('info', 'Se edito correctamente el usuario, aumentar JS xD');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = User::find($id);
        $empleado->delete();
        //registrar en bitacora esta accion
        BitacoraController::registrar(Auth::user()->id, 'Eliminación de empleado',
            'Se eliminó el empleado: '.$empleado->nombre.' '.$empleado->ap_paterno.' '.$empleado->ap_materno);
        return redirect('tenant.empleados.index');
    }

    public static function findBy($campo, $value){
        return Empleados::where($campo,'=', $value)->first();
    }

    public static function existRol($roles1, $role2) {
        foreach ($roles1 as $role1) {
            if ($role1->id == $role2->id) return true;
        }
        return false;
    }
}
