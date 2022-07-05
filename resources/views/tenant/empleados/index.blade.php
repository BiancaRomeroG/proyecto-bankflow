@section('title', 'Empleados')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row justify-content-between">
                    <div class="col col-sm-6">
                        <h4 class="text-dark" class="card-title">Empleados</h4>
                    </div>
                    <div class="col-6 col-md-auto col-sm-6">
                        @can('Crear empleados')
                            <a href="{{ route('empleados.create', tenant('id')) }}" class="btn btn-sm btn-dark">Agregar
                                nuevo empleado</a>
                        @endcan
                    </div>
                    <div class="col-12 col-lg-3 col-sm-12 col-md-12 col-xl-3">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="text" id="buscar"
                                    class="border border-gray-400 form-control bg-gray-100" placeholder="Buscar" />
                            </div>
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
            <hr class="m-0">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                        <label>Numero de registros</label>
                        <select class="form-control border border-gray-400" id="opcion" name="opcion">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="-1">Todos</option>
                        </select>
                    </div>
                    <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8">

                    </div>
                </div>
            </div>

            <div class="card-body container">
                <div class="card bg-gray-200 shadow-lg">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" id="tabla">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre-Correo</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Rol-Area</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ci</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Telefono</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleados as $empleado)
                                    <tr>
                                        <td class="align-center text-center">
                                            <div class="d-flex px-2 py-1">
                                                <span
                                                    class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ ++$i }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                                        class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs">{{ $empleado->user->name }}
                                                        {{ $empleado->user->ap_paterno }}</h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $empleado->user->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{-- <p class="text-xs font-weight-bold mb-0">
                                                {{ $empleado->user->rol->nombre }}
                                            </p> --}}
                                            <p class="text-xs text-secondary mb-0">{{ $empleado->area->nombre }}</p>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $empleado->user->ci }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $empleado->user->telefono }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            @can('Editar empleados')
                                                <a href="{{ route('empleados.edit', [tenant('id'), $empleado->id]) }}">
                                                    <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                        title="Editar">
                                                        <i class="fas fa-pen m-auto"></i>
                                                    </button>
                                                </a>
                                            @endcan
                                            @can('Ver empleados')
                                                <a href="{{ route('empleados.show', [tenant('id'), $empleado->id]) }}">
                                                    <button class="btn btn-icon btn-sm btn-info m-auto" type="button"
                                                        title="Ver informacion">
                                                        <i class="far fa-eye"></i>
                                                    </button>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
