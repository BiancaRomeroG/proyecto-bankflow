<x-app-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title"> {{ $area->nombre }}</h4>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 ">
                        <h6 class="text-gray" class="card-title"> {{ $area->descripcion }}</h6>
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
                                        Nombre-Correo</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Rol</th>
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
                                                    <h6 class="mb-0 text-xs">{{ $empleado->name }}
                                                        {{ $empleado->ap_paterno }}</h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $empleado->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $empleado->nombre_rol }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $empleado->ci }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $empleado->telefono }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('empleados.edit', $empleado) }}">
                                                <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                    title="Editar">
                                                    <i class="fas fa-pen m-auto"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('empleados.show', $empleado) }}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
