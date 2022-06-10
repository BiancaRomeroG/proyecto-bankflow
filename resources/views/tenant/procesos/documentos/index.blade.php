@section('title', 'Documentos')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Documentos Presentados</h4>
                    </div>
                    <div class="d-md-flex justify-content-md-end col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="{{ route('documentos.create', [tenant('id'), $carpeta->id]) }}" class="btn btn-sm btn-dark">Agregar</a>
                    </div>
                    <p class="mb-0">{{$carpeta->info_cliente}}</p>
                    <p>{{$carpeta->requisito_prestamo}}</p>
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
                                                {{ $documento->descripcion}}
                                            </p>
                                        </td>
                                        <td>
                                            <a type="button" title="Descargar documento"
                                                class="btn btn-danger btn-sm"
                                                href="{{ route('documentos.descargar', $documento->id) }}">
                                                <span class="material-icons">sim_card_download</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="">
                            {{$creditos->links()}}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
