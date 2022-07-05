@section('title', 'Empleado')
<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('empleados.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Editando Empleado</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                {!! Form::model($empleado, ['route' => ['empleados.update', [tenant('id'), $empleado]], 'method' => 'put']) !!}
                <input hidden type="text" name="id_usuario" value="{{ $empleado->id_usuario }}">
                <input hidden type="text" name="id" value="{{ $empleado->id }}">
                <div class="row mt-3">
                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <label>Nombres</label>
                            <input name="name" class="form-control" type="text"
                                value="{{ $empleado->user->name }}" />
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <label>Apellido Paterno</label>
                            <input name="ap_paterno" class="form-control" type="text"
                                value="{{ $empleado->user->ap_paterno }}" />
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <label>Apellido Materno</label>
                            <input name="ap_materno" class="form-control" type="text"
                                value="{{ $empleado->user->ap_materno }}" />
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <label>Cedula de identidad</label>
                            <input name="ci" class="form-control" type="number"
                                value="{{ $empleado->user->ci }}" />
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <label>Area: </label>
                        <select class="form-select mi-selector" name="id_area">
                            <option value=""></option>
                            @foreach ($areas as $area)
                                @if ($empleado->id_area == $area->id)
                                    <option selected value="{{ $area->id }}">{{ $area->nombre }}</option>
                                @else
                                    <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <label>Telefono</label>
                            <input name="telefono" class="form-control" placeholder="+591" type="number"
                                value="{{ $empleado->user->telefono }}" />
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <label>Fecha de Nacimiento</label>
                            <input name="fecha_nac" type="date" class="form-control"
                                value="{{ $empleado->user->fecha_nac }}">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <label>Email</label>
                            <input name="email" class="form-control" type="email" placeholder="ejemplo@gmail.com"
                                value="{{ $empleado->user->email }}" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-12 mt-sm-0 mb-3">
                        <div class="input-group input-group-static my-2">
                            <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp; Roles</h5>
                            @foreach ($roles as $role)
                                <div class="container">
                                    <label>                                       
                                        <input type="checkbox" name="roles2[]" value="{{ $role->id }}" <?php if ($role->estado == 1) echo "checked"?>>
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="button-row d-flex mt-4 d-md-flex justify-content-md-end">
                        {!! Form::submit('Guardar', ['class' => 'btn bg-gradient-dark mb-0 js-btn-prev']) !!}
                    </div>
                </div>
                
                {!! Form::close() !!}

            </div>
        </div>
    </section>
</x-app-tenant-layout>
