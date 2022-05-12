<x-app-layout>
    <h1>Areas uWu</h1>
    <div>
        <x-jet-button>
            <a href="{{ route('areas.create') }}">Crear nueva area</a>
        </x-jet-button>
    </div>
    <div>
        @if (count($areas) > 0)
            <table>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Descripcion</th> 
                    <th>Acciones</th>
                </tr>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $area->nombre }}</td>
                        <td>{{ $area->descripcion }}</td>
                        <td>
                            <a href="{{ route('areas.show', $area->id) }}">Ver</a>
                            <a href="{{ route('areas.edit', $area->id) }}">Editar</a>
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