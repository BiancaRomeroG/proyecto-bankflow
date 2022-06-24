<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index() {
        $roles = Role::paginate();
        return view('tenant.roles.index', compact('roles'))->with('i');
    }

    public function show(Role $role) {
        $permissions = ModelsPermission::all();
        $role_permissions = $role->permissions;

        for ($i=0; $i < count($role_permissions); $i++) 
            $permissions[$role_permissions[$i]->id - 1]->estado = 1; 

        return view('tenant.roles.show', compact('role', 'permissions'))->with('i');
    }

    public function create() {
        $permissions = ModelsPermission::all();
        return view('tenant.roles.create', compact('permissions'));
    }

    public function store(Request $request) {
        $role = Role::create(['name' => $request->nombre]);
        $permissions = $request->permissions2;
        for ($i=0; $i < count($permissions); $i++) { 
            $permission = ModelsPermission::findById($permissions[$i]);
            $permission->assignRole($role);
        }
        BitacoraController::registrar(Auth::user()->id, 'Creación de rol', 
        'Se creó el rol: '.$request->nombre);
        return redirect()->route('roles.index', tenant('id'))->with('info', 'Nuevo Rol registrado');
    }

    public function edit(Role $role) {
        $permissions = ModelsPermission::all();
        $role_permissions = $role->permissions;
        
        for ($i=0; $i < count($role_permissions); $i++) 
            $permissions[$role_permissions[$i]->id - 1]->estado = 1;
        //return $permissions;

        return view('tenant.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role) {
        $role->name = $request->nombre;
        $role->save();
        $permissions = $request->permissions2;
        $permissions_all = ModelsPermission::all();

        for ($i=0; $i < count($permissions); $i++) 
            $permissions_all[$permissions[$i] - 1]->estado = 1;
        
        for ($i=0; $i < count($permissions_all); $i++) { 
            $permission_elem = $permissions_all[$i];
            if ($permission_elem->estado == 1)
                $permission_elem->assignRole($role);
            else
                $permission_elem->removeRole($role);
        }
        
        BitacoraController::registrar(Auth::user()->id, 'Edición de rol',
        'Se editó el rol: '.$role->name);
        return redirect()->route('roles.index', tenant('id'));
    }
}
