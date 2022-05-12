<form action="{{ route('empleados.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="nombre" id="nombre"><br>
    <input type="text" name="ap_paterno" placeholder="apellido_paterno" id="nombre"><br>
    <input type="text" name="ap_materno" placeholder="apellido_materno" id="nombre"><br>
    <input type="text" name="ci" placeholder="carnet_identidad" id="nombre"><br>
    <input type="date" name="fecha_nac" placeholder="fecha_nacimiento" id="nombre"><br>
    <input type="text" name="telefono" placeholder="telefono" id="nombre"><br>
    <input type="timestamp" name="email" placeholder="email" id="nombre"><br>
    <input type="text" name="password" placeholder="contrasenia" id="nombre"><br>
    <label>Rol: </label>
                                    <select name="id_rol">
                                        @foreach ($roles as $rol)
                                            <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                                        @endforeach
                                    </select>
    <label>Area: </label>
        <select name="id_area">
                                        @foreach ($areas as $area)
                                            <option value="{{$area->id}}">{{$area->nombre}}</option>
                                        @endforeach
                                    </select>

                                    <input type="submit" value="Guardar datos">

</form>
