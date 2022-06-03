<?php

namespace App\Http\Controllers;

use App\Models\areas;
use App\Models\empleados;
use App\Models\roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$empleados = empleados::join('users', 'empleados.id_usuario','users.id')
        //->join('areas', 'empleados.id_area', 'areas.id')
        //->select('users.name', 'users.ap_paterno','users.ci', 'users.email', 'users.id_rol as rol', 'users.telefono', 'areas.nombre as area');

        $rol = roles::findOrFail(Auth::user()->id_rol)->nombre;
        $empleados = empleados::where('id_empresa', '=', EmpleadosController::id_empresa())->paginate(6);
        return view('empleados.index', compact('empleados', 'rol'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=roles::where('id_empresa', '=', EmpleadosController::id_empresa())->get();
        $areas=areas::where('id_empresa', '=', EmpleadosController::id_empresa())->get();
        return view('empleados.create',compact('roles', 'areas'));
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
        //return $usuario;
        $empleado = new empleados();
        $empleado->id_usuario = $usuario->id;
        $empleado->id_area = $request->id_area;
        $empleado->save();

        //registrar en bitacora esta accion
        BitacoraController::create(Auth::user()->id, 'Creación de empleado',
            'El usuario con id: '.Auth::user()->id.' creó el empleado: '.$empleado->nombre.' '.$empleado->ap_paterno.' '.$empleado->ap_materno.' con id: '.$empleado->id);

        return redirect()->route('empleados.index')->with('info', 'El aprobado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleado)
    {
        return view('empleados.show', compact('empleado'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(empleados $empleado)
    {
        $roles=roles::where('id_empresa', '=', EmpleadosController::id_empresa())->get();
        $areas=areas::where('id_empresa', '=', EmpleadosController::id_empresa())->get();
        return view('empleados.edit', compact('empleado', 'roles', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleados $empleados)
    {
        $usuario = User::find($request->id_usuario);
        $usuario->name = $request->name;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->ci = $request->ci;
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->id_rol = $request->id_rol;
        $usuario->update();
        //return $usuario;
        $empleado = empleados::find($request->id);
        $empleado->id_usuario = $usuario->id;
        $empleado->id_area = $request->id_area;
        $empleado->update();

        //registrar en bitacora esta accion
        BitacoraController::create(Auth::user()->id, 'Edición de empleado',
            'El usuario con id: '.Auth::user()->id.' editó los datos del empleado: '.$usuario->name.' '.$usuario->ap_paterno.' '.$usuario->ap_materno.' con id: '.$empleado->id);
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = empleados::find($id);
        $empleado->delete();
        return redirect('empleados.index');
    }

    public static function findBy($campo, $value){
        return Empleados::where($campo,'=', $value)->first();
    }

    private static function id_empresa() {
        return Auth::user()->id_empresa;
    }
}
