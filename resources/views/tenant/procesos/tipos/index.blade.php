@section('title', 'Procesos Crediticios')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Tipos de creditos</h4>
                    </div>
                    <div class="d-md-flex justify-content-md-end col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="{{ route('tipos.create', tenant('id')) }}" class="btn btn-sm btn-dark">Agregar</a>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                    @foreach ($tipos as $tipo)
                        <div class="card card-frame mb-2 bg-gray-100">
                            <div class="card-header p-2 bg-gray-300">
                                <h6 class="mb-0 text-xs">{{ ++$i . '. ' . $tipo->nombre }}</h6>
                            </div>
                            <hr class="m-0 bg-danger">
                            <div class="card-body m-2 p-2">
                                <p class="text-xs font-weight-bold mb-2">
                                    {{ $tipo->descripcion }}
                                </p>
                                <a href="{{ route('tipos.edit', [tenant('id'), $tipo->id]) }}">
                                    <button class="btn btn-icon btn-sm btn-info m-auto" type="button"
                                        title="Documentos">
                                        <span class="material-icons">edit</span>
                                    </button>
                                </a>
                                <a href="{{ route('requisitos.index',[ tenant('id'), $tipo->id]) }}">
                                    <button class="btn btn-icon btn-sm btn-warning m-auto" type="button"
                                        title="Lista de Requisitos">
                                        <span class="material-icons">list_alt</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-tenant-layout>
