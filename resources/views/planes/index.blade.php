
<x-app-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Planes</h4>
                    </div>
                    <div class="d-md-flex justify-content-md-end col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="{{ route('planes.create') }}" class="btn btn-sm btn-dark">Agregar</a>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9">Nº
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9">
                                        Nombre</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9">
                                        Tipo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-9">
                                        Precio</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-9">
                                        Storage</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-9">
                                        Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($planes as $plan)
                                    <tr>
                                        <td class="align-center text-center">
                                            <div class="d-flex px-2 py-1">
                                                <span
                                                    class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ ++$i }}</span>
                                            </div>
                                        </td>
                                        <td class="align-center text-center">
                                            <div class="d-flex px-2 py-1">
                                                <span
                                                    class="text-secondary text-xs font-weight-normal">{{ $plan->nombre }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $plan->tipo_plan }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $plan->detalle->precio }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $plan->detalle->storage }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('planes.edit', $plan->id) }}">
                                                <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                    title="Editar">
                                                    <i class="fas fa-pen m-auto"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('planes.show', $plan->id) }}">
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
