<x-app-layout>
    <h1>Roles uWu</h1>
    <div>
        <x-jet-button>
            <a href="{{ route('roles.create') }}">Crear nuevo Rol</a>
        </x-jet-button>
    </div>
    <div>
        @if (count($roles) > 0)
            <table>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Descripcion</th> 
                    <th>Acciones</th>
                </tr>
                @foreach ($roles as $rol)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $rol->nombre }}</td>
                        <td>{{ $rol->descripcion }}</td>
                        <td>
                            <a href="{{ route('roles.show', $rol->id) }}">Ver</a>
                            <a href="{{ route('roles.edit', $rol->id) }}">Editar</a>
                            <a href="#">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </table>            
        @else
            <div>
                No hay nada xD
            </div>
        @endif
        
    </div>
    
</x-app-layout>
