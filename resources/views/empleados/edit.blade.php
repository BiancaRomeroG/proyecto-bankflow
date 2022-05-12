<form action="{{ route('empleados.update', $empleado->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <input hidden type="text" name="id"  value="{{ $empleado->id}}">
    <input hidden type="text" name="id_usuario"  value="{{ $empleado->id_usuario}}">
    <input type="text" name="name" placeholder="nombre"  value="{{ $empleado->user->name }}"><br>
    <input type="text" name="ap_paterno" placeholder="apellido_paterno"  value="{{ $empleado->user->ap_paterno }}"><br>
    <input type="text" name="ap_materno" placeholder="apellido_materno"  value="{{ $empleado->user->ap_materno }}"><br>
    <input type="text" name="ci" placeholder="carnet_identidad" value="{{ $empleado->user->ci }}"><br>
    <input type="date" name="fecha_nac" placeholder="fecha_nacimiento" value="{{ $empleado->user->fecha_nac }}"><br>
    <input type="text" name="telefono" placeholder="telefono" value="{{ $empleado->user->telefono }}"><br>
    <input type="timestamp" name="email" placeholder="email" value="{{ $empleado->user->email }}"><br>
    <label>Rol: </label>
                                    <select name="id_rol">
                                        @foreach ($roles as $rol)
                                            @if ($empleado->user->id_rol == $rol->id)
                                            <option selected value="{{$rol->id}}">{{$rol->nombre}}</option>
                                            @else
                                            <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
    <label>Area: </label>
        <select name="id_area">
                                        @foreach ($areas as $area)
                                        @if ($empleado->id_area == $area->id)
                                            <option selected value="{{$area->id}}">{{$area->nombre}}</option>
                                            @else
                                            <option value="{{$area->id}}">{{$area->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <input type="submit" value="Editar">

</form>
