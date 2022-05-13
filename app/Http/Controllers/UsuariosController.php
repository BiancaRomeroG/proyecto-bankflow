<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariosEmpleado = User::join('empleados', 'empleados.id_usuario', 'users.id')
        ->select('users.id', 'users.name', 'users.ap_paterno', 'users.email', 'users.ci', 'users.created_at', 'users.id_rol');

        $usuarios = User::join('clientes', 'clientes.id_usuario', 'users.id')
        ->union($usuariosEmpleado)
        ->select('users.id', 'users.name', 'users.ap_paterno', 'users.email', 'users.ci', 'users.created_at', 'users.id_rol')
        ->get();

        return view('usuarios.index',compact('usuarios'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
        //     DB::transaction(function () use ($request) {
        //         $usuario = user::create([
        //             'name' => $request->nombre,
        //             'ap_paterno' => $request->ap_paterno,
        //             'ap_materno' => $request->ap_materno,
        //             'ci' => $request->ci,
        //             'fecha_nac' => $request->fecha_nac,
        //             'telefono' => $request->telefono,
        //             'email' => $request->email,
        //         ]);
        //         $usuario->save();
        //     });     
        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     //retorna una vista indicando hubo algun error
        // }

        // return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        // $usuario = user::findOrFail($usuarios);
        // try {
        //     $usuarios = User::join('empleados', 'empleados.id_usuario', 'users.id')
        //                     ->join('clientes', 'clientes.id_usuario', 'users.id')
        //                     ->join('roles', 'users.id_rol', 'roles.id')
        //                     ->select('users.name', 'users.ap_paterno', 'users.ap_materno', 'users.ci', 'roles.nombre As nombre_rol')
        //                     ->get();
        // } catch (\Exception $e) {
        //     //retornar alerta de ha ocurrido un error
        // }
        // return view('usuarios.show')->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuarios)
    {
        // $usuario = user::findOrFail($usuarios);
        // return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuarios)
    {
        // try {
        //     $usuario = user::findOrFail($usuarios);   
        //     $usuario->name = $request->nombre;
        //     $usuario->ap_paterno = $request->ap_paterno;
        //     $usuario->ap_materno = $request->ap_materno;
        //     $usuario->ci = $request->ci;
        //     $usuario->fecha_nac = $request->fecha_nac;
        //     $usuario->telefono = $request->telefono;
        //     $usuario->email = $request->email;                 
        //     $usuario->save();

        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     return "Ocurrio un error :(, aqui va una alerta y retorna a la vista index";
        // }

        // return redirect()->route('usuarios.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // user::find($id)->delete();
         
    }

    public static function find($id){
        return User::find($id);
    }



}
