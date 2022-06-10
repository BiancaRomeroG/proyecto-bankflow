<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Tenant;
use App\Models\User;
use App\Models\usuario_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RegistrarController extends Controller
{
    public $in;

    public function index($id)
    {
        return view('auth.register', compact('id'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        if (Tenant::find($input['identificador']) == null) {
            $tenant = Tenant::create([
                'id' => $input['identificador'],
                'name' => $input['nombre'],
            ]);

            $admin = usuario_admin::create([
                'name' => $input['name'],
                'ap_paterno' => $input['ap_paterno'],
                'ap_materno' => $input['ap_materno'],
                'ci' => $input['ci'],

                'telefono' => $input['telefono'],
                'email' => $input['email'],

            ]);

            empresa::create([
                'nombre' => $input['nombre'],
                'direccion' => $input['direccion'],
                'cant_trabajadores' => $input['cant_trabajadores'],
                'id_planes' => (int) $input['id_plan'],
                'id_usuario_admin' => $admin->id
            ]);
            $this->in = $input;

            $tenant->run(function () {
                $input = $this->in;
                $rol = Role::create([
                    'name' => 'Admin',
                ]);

                Permission::create([
                    'name' => 'home'
                ])->syncRoles([$rol]);

                User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    'telefono' => $input['telefono'],
                    'fecha_nac' => $input['fecha_nac'],
                    'ap_paterno' => $input['ap_paterno'],
                    'ap_materno' => $input['ap_materno'],
                    'ci' => $input['ci'],
                    'id_rol' => $rol->id
                ]);
            });

            return redirect(url($input['identificador'] . '/login'));
        }
        return redirect()->route('registrar.index', $input['id_plan']);
    }
}
