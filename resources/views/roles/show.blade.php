<x-app-layout>
    <h1>Vista de un rol en especifico</h1>
    <h3>Aqui se podra ver todos los usuarios que forman parte de ese rol</h3>
    <div>
        Rol: {{ $rol->nombre }}
        <br>
        Descripcion: {{ $rol->descripcion }}
    </div>
    <div>
        @if (count($usuarios) > 0)
            <table>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Apellidos</th> 
                    <th>Nro telefono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->ap_paterno.' '.$usuario->ap_materno }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a href="#">Ver</a>
                            <a href="#">Editar</a>
                            <a href="#">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </table>            
        @else
            <div>
                No hay nada de usuarios xD &nbsp;
                Rellene mas 
                <x-jet-button><a href="#">Ingresar mas usuarios</a></x-jet-button>
                {{-- Ruta del "a" que llevara al area para poder ingresar nuevos usuarios
                a ese rol indicado --}}
            </div>
        @endif
        
    </div>
</x-app-layout>