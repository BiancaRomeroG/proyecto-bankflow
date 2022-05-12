<h1>Roles uWu</h1>
    <div>
        <x-jet-button>
            <a href="{{ route('empleados.create') }}">Agregar Empleado</a>
        </x-jet-button>
    </div>
    <div>

            <table>
                <tr>
                    <th>Nº</th>
                    <th>Nombre°</th>
                    <th>Apellido</th>
                    <th>Ci</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Telefono</th>
                    <th>Area</th>
                </tr>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $empleado->user->name }}</td>
                        <td>{{ $empleado->user->ap_paterno }}</td>
                        <td>{{ $empleado->user->ci }}</td>
                        <td>{{ $empleado->user->email }}</td>
                        <td>{{ $empleado->user->rol->nombre }}</td>
                        <td>{{ $empleado->user->telefono }}</td>
                        <td>{{ $empleado->area->nombre }}</td>
                        <td>
                            <a href="#"">Ver</a>
                            <a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
                            {{-- <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar</button>
                            </form> --}}
                            <a href="#">Eliminar</a>

                        </td>
                    </tr>
                @endforeach
            </table>


    </div>
