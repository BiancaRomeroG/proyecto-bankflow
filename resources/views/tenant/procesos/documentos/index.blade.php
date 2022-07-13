@section('title', 'Documentos')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row justify-content-between">
                    <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <h4 class="text-dark" class="card-title">Documentos Presentados</h4>
                        <p class="mb-0">{{ $carpeta->info_cliente }}</p>
                        <p>{{ $carpeta->requisito_prestamo }}</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-auto col-lg-3 col-xl-3">
                        {{-- <a href="{{ route('creditos.index', tenant('id')) }}" class="btn btn-sm btn-dark"><i
                                class="fas fa-arrow-left"></i>Atras</a> --}}
                        &nbsp;
                        @can('Crear documentos digitales')
                            <a href="{{ route('creditos.documentos.create', [tenant('id'), $carpeta->id]) }}"
                                class="btn btn-sm btn-dark">Agregar nuevo documento</a>
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
            <div class="card-body">
                <div class="card bg-gray-200 shadow-lg">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" id="tabla">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Formato</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Descripcion</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Opcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documentos as $documento)
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
                                                    <h6 class="mb-0 text-xs">{{ $documento->formato }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $documento->descripcion }}
                                            </p>
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('creditos.documentos.show', [tenant('id'), $carpeta->id, $documento->id]) }}">
                                                <button class="btn btn-icon btn-sm btn-info m-auto" type="button"
                                                    title="Ver documento">
                                                    <span><i class="far fa-eye"></i></span>
                                                </button>
                                            </a>

                                            @can('Descargar documentos digitales')
                                                <a
                                                    href="{{ route('documentos.descargar', [tenant('id'), $documento->id]) }}">
                                                    <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                        title="Descargar documento">
                                                        <span class="material-icons">sim_card_download</span>
                                                    </button>
                                                </a>
                                            @endcan
                                            @can('Eliminar documentos digitales')
                                                <a>
                                                    <button class="btn btn-icon btn-sm btn-primary m-auto" type="submit"
                                                        form="formDelete" title="Eliminar documento">
                                                        <span class="material-icons">delete</span>
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
    <form action="{{ route('creditos.documentos.destroy', [tenant('id'), $carpeta->id, $documento->id]) }}"
        method="POST" id="formDelete">
        @csrf
        @method('DELETE')
    </form>
</x-app-tenant-layout>
