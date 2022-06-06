<x-app-layout>
    <h1>Vista de un area en especifico</h1>
    <h3>Aqui se podra ver todos los usuarios que forman parte de esta area</h3>
    <div>
        Usuario: {{ $usuario->name.' '.$usuario->ap_paterno.' '.$usuario->ap_materno }}
    </div>
    <div>
        @if (count($usuarios) > 0)
            <table>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Apellidos</th> 
                    <th>Carnet de Identidad</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->ap_paterno.' '.$empleado->ap_materno }}</td>
                        <td>{{ $usuarip->ci }}</td>
                        <td>{{ $usuarip->fecha_nac }}</td>
                        <td>{{ $usuarip->telefono }}</td>
                        <td>{{ $usuarip->email }}</td>
                        <td>
                            <a href="#">Ver</a>
                            <a href="#">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </table>            
        @endif
        
    </div>
</x-app-layout>