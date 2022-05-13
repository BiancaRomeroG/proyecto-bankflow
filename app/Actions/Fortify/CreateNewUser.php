<?php

namespace App\Actions\Fortify;

use App\Models\empresa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'telefono' => ['required'],
            'fecha_nac' => ['required'],
            'ap_paterno' => ['required'],
            'ap_materno' => ['required'],
            'ci'=> ['required'],
            'id_rol' => ['required']
        ])->validate();

        $usuario = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'telefono' => $input['telefono'],
            'fecha_nac' => $input['fecha_nac'],
            'ap_paterno' => $input['ap_paterno'],
            'ap_materno' => $input['ap_materno'],
            'ci'=> $input['ci'],
            'id_rol' => $input['id_rol']
        ]);
        $usuario->save();
        $empresa = new empresa();
        $empresa->nombre = $input['nombre'];
        $empresa->direccion = $input['direccion'];
        $empresa->cant_trabajadores = $input['cant_trabajadores'];
        $empresa->id_admin = $usuario->id;
        $empresa->save();
        return $usuario;
    }
}
