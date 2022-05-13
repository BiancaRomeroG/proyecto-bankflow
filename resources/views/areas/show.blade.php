<x-app-layout>
    <h1>Vista de un area en especifico</h1>
    <h3>Aqui se podra ver todos los usuarios que forman parte de esta area</h3>
    <div>
        Area: {{ $area->nombre }}
        <br>
        Descripcion: {{ $area->descripcion }}
    </div>
    <div>
        @if (count($empleados) > 0)
            <table>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Apellidos</th> 
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $empleado->name }}</td>
                        <td>{{ $empleado->ap_paterno.' '.$empleado->ap_materno }}</td>
                        <td>{{ $empleado->nombre_rol }}</td>
                        <td>
                            <a href="#">Ver</a>
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