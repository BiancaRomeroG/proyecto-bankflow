@section('title', 'Areas')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row justify-content-between">
                    <div class="col col-sm-6">
                        <h4 class="text-dark" class="card-title">Areas</h4>
                    </div>
                    <div class="col-6 col-md-auto col-sm-6">
                        @can('Crear areas')
                            <a href="{{ route('areas.create', tenant('id')) }}" class="btn btn-sm btn-dark">Agregar nueva área</a>
                        @endcan
                    </div>
                    <div class="col-12 col-lg-3 col-sm-12 col-md-12 col-xl-3">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="text" id="buscar"
                                    class="border border-gray-400 form-control bg-gray-100" placeholder="&nbsp;Buscar" />
                            </div>
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-100 shadow-lg">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" id="tabla">
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
                                            @can('Editar areas')
                                                <a href="{{ route('areas.edit', [tenant('id'), $area->id]) }}">
                                                    <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                        title="Editar">
                                                        <i class="fas fa-pen m-auto"></i>
                                                    </button>
                                                </a>
                                            @endcan
                                            @can('Ver areas')
                                                <a href="{{ route('areas.show', [tenant('id'), $area->id]) }}">
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
                        <div class="">
                            {{ $areas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
