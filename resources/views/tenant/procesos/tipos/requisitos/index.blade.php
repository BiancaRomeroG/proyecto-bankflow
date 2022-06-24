@section('title', 'Requistos')
<x-app-tenant-layout>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('tipos.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i>
                        Atrás</button>
                </a>
                <div style="display: inline-block">
                    <h5 class="col font-weight-bolder mt-3">&nbsp;&nbsp; Requisitos para: <span
                            class="text-warning">{{ $tipo->nombre }}</span></h5>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="row">
                    @foreach ($requisitos as $requisito)
                        <div class="col-md-4 mb-4">
                            <div class="card card-frame mb-2 bg-gray-100">
                                <div class="card-header p-2 bg-gray-300">
                                    <h6 class="mb-0 text-xs">{{ ++$i . '. ' . $requisito->nombre }}</h6>
                                </div>
                                <hr class="m-0 bg-warning">
                                <div class="card-body m-2 p-2">
                                    <p class="text-xs font-weight-bold mb-2">
                                        {{ $requisito->descripcion }}
                                    </p>
                                    <a href="{{ route('requisitos.edit', [tenant('id'), $requisito->id]) }}">
                                        <button class="btn btn-icon btn-sm btn-info m-auto" type="button"
                                            title="Documentos">
                                            <span class="material-icons">edit</span>
                                        </button>
                                    </a>
                                    {{-- <a href="{{ route('tipos.edit',[ tenant('id'), $tipo->id]) }}">
                                        <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                            title="Modelo de presentación">
                                            <span class="material-icons">insert_drive_file</span>
                                        </button>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-4 mb-4">
                        <div class="card card-frame mb-2 bg-gray-100">
                            <div class="card-header p-2 bg-gray-300">
                                <h6 class="mb-0 text-xs">Agregar requisito...</h6>
                            </div>
                            <div class="card-body m-2 p-2 mb-3 text-center">
                                <a href="{{ route('requisitos.create', [tenant('id'), $tipo->id]) }}">
                                    <button class="btn btn-icon btn-rounded btn-sm btn-success" type="button"
                                        title="Documentos">
                                        <span class="material-icons">add</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
