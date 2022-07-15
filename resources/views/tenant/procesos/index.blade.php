@section('title', 'Procesos Crediticios')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row justify-content-between">
                    <div class="col col-sm-6">
                        <h4 class="text-dark" class="card-title">Procesos Asignados</h4>
                    </div>
                    <div class="col-6 col-md-auto col-sm-6">
                        @can('Crear procesos')
                            <a href="{{ route('creditos.create', tenant('id')) }}" class="btn btn-sm btn-dark">Agregar nuevo
                                proceso</a>
                        @endcan
                    </div>
                    <div class="col-12 col-lg-3 col-sm-12 col-md-3 col-xl-3">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="text" id="buscar"
                                    class="border border-gray-400 form-control bg-gray-100"
                                    placeholder="&nbsp; Buscar" />
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
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <label>Numero de registros</label>
                        <select class="form-control border border-gray-400" id="opcion" name="opcion">
                            <option value="10"> &nbsp; 10</option>
                            <option value="25"> &nbsp; 25</option>
                            <option value="50"> &nbsp; 50</option>
                            <option value="-1"> &nbsp; Todos</option>
                        </select>
                    </div>
                    <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="check" name="check"
                            @can('Crear procesos') value="EN PROCESO"> @endcan
                            @can('Crear documentos digitales') value="EN DOCUMENTACION"> @endcan
                            @can('Aceptar creditos') value="EN REVISION"> @endcan
                            @can('Crear documentos legales') value="DESEMBOLSADO"> @endcan <label
                            class="form-check-label" for="check">{{ __('  Filtrar por area') }}</label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card bg-gray-100 shadow-lg">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" id="tabla">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tipo de Credito</th>
                                    {{-- <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Monto</th> --}}
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Cliente</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Monto</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Estado</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                    @can('Crear documentos legales')
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Condición de Tarea</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($creditos as $credito)
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
                                                    <h6 class="mb-0 text-xs">{{ $credito->tipo->nombre }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">
                                                {{ $credito->monto }}
                                            </p>
                                        </td> --}}

                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><a
                                                    href="{{ route('clientes.show', [tenant('id'), $credito->cliente->id]) }}">{{ $credito->cliente->user->name }}
                                                    {{ $credito->cliente->user->ap_paterno }} {{ $credito->cliente->user->ap_materno }}</a></span>
                                        </td>

                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $credito->monto.' Bs.' }}</span>
                                        </td>
                                        <td>
                                            @if ($credito->estado == 'En proceso')
                                                <span class="badge"
                                                    style="background-color: blueviolet">{{ $credito->estado }}</span>
                                            @endif
                                            @if ($credito->estado == 'En revision')
                                                <span class="badge"
                                                    style="background-color: rgb(214, 202, 25)">{{ $credito->estado }}</span>
                                            @endif
                                            @if ($credito->estado == 'En documentacion')
                                                <span class="badge"
                                                    style="background-color: rgb(240, 44, 44)">{{ $credito->estado }}</span>
                                            @endif
                                            @if ($credito->estado == 'Legalizacion')
                                                <span class="badge"
                                                    style="background-color: rgb(44, 240, 191)">{{ $credito->estado }}</span>
                                            @endif
                                            @if ($credito->estado == 'Desembolsado')
                                                <span class="badge"
                                                    style="background-color: rgb(28, 218, 28)">{{ $credito->estado }}</span>
                                            @endif
                                        </td>

                                        <td class="align-middle text-center">
                                            @can('Ver lista de documentos digitales')
                                                <a
                                                    href="{{ route('creditos.documentos.index', [tenant('id'), $credito->id_carpeta_credito]) }}">
                                                    <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                        title="Documentos">
                                                        <span class="material-icons ">folder</span>
                                                    </button>
                                                </a>
                                            @endcan
                                            @can('Ver procesos')
                                                <a href="{{ route('creditos.show', [tenant('id'), $credito->id]) }}">
                                                    <button class="btn btn-icon btn-sm btn-info m-auto" type="button"
                                                        title="Ver informacion">
                                                        <i class="far fa-eye"></i>
                                                    </button>
                                                </a>
                                            @endcan
                                            @can('Editar procesos')
                                                <a href="{{ route('creditos.edit', [tenant('id'), $credito->id]) }}">
                                                    <button class="btn btn-icon btn-sm btn-warning m-auto" type="button"
                                                        title="Editar">
                                                        <span class="material-icons">edit</span>
                                                    </button>
                                                </a>
                                            @endcan
                                            @can('Ver lista de documentos legales')
                                                <a
                                                    href="{{ route('creditos.legalizacion.index', [tenant('id'), $credito->id_carpeta_credito]) }}">
                                                    <button class="btn btn-icon btn-sm btn-success m-auto" type="button"
                                                        title="Legalizacion">
                                                        <span class="material-icons">verified_user</span>
                                                    </button>
                                                </a>
                                            @endcan

                                            <a
                                                href="{{ route('creditos.asociados.index', [tenant('id'), $credito->id]) }}">
                                                <button class="btn btn-icon btn-sm btn-secondary m-auto" type="button"
                                                    title="Asociados">
                                                    <span class="material-icons">group</span>
                                                </button>
                                            </a>
                                        </td>
                                        @can('Crear documentos legales')
                                            <td class="text-center">
                                                @if ($credito->condicion == 0)
                                                    <a
                                                        href="{{ route('creditos.marcar', [tenant('id'), $credito->id_gestion]) }}">
                                                        <button class="btn btn-icon btn-sm bg-gradient-primary m-auto"
                                                            type="button" title="Terminar tarea">
                                                            <span class="material-icons">check</span>
                                                        </button>
                                                    </a>
                                                @else
                                                    <a
                                                        href="{{ route('creditos.marcar', [tenant('id'), $credito->id_gestion]) }}">
                                                        <button class="btn btn-icon btn-sm bg-gradient-danger m-auto"
                                                            type="button" title="Marcar no terminado">
                                                            <span class="material-icons">close</span>
                                                        </button>
                                                    </a>
                                                @endif
                                            </td>
                                        @endcan
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
