<x-app-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Areas</h4>
                    </div>
                    <div class="d-md-flex justify-content-md-end col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="{{ route('areas.create') }}" class="btn btn-sm btn-dark">Agregar</a>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-100 shadow-lg">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Descripcion</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $area)
                                    <tr>
                                        <td class="align-center text-center">
                                            <div class="d-flex px-2 py-1">
                                                <span
                                                    class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ ++$i }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h4 class="mb-0 text-xs">{{ $area->nombre }}
                                                       </h4>
                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">{{ $area->descripcion }}</p>
                                        </td>
            
                                        <td class="align-middle text-center">
                                            <a href="{{ route('areas.edit', $area->id) }}">
                                                <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                    title="Editar">
                                                    <i class="fas fa-pen m-auto"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('areas.show', $area->id) }}">
                                                <button class="btn btn-icon btn-sm btn-info m-auto" type="button"
                                                    title="Ver informacion">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="">
                            {{$areas->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
{{--
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
</x-app-layout> --}}
