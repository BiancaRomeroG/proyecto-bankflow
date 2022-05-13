<x-app-layout>
    <h1>Usuario</h1>
   
    <div>
        @if (count($usuarios) > 0)
            <table>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Apellido</th> 
                    <th>Carnet Identidad</th> 
                </tr>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->ap_paterno.' '.$usuario->ap_materno}}</td>
                        <td>{{ $usuario->ci }}</td>
                        <td>
                            <a href="{{ route('usuarios.show', $usuario->id) }}">Ver</a>
                            <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                            <a href="#">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </table>            
        @else
            <div>
                
            </div>
        @endif
        
    </div>
</x-app-layout>