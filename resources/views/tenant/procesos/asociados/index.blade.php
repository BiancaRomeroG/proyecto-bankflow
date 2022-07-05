@section('title', 'Asociados')
<x-app-tenant-layout>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i>
                        Atrás</button>
                </a>
                <div style="display: inline-block">
                    <h5 class="col font-weight-bolder mt-3">&nbsp;&nbsp; Asociados al proceso: {{-- <span
                            class="text-warning">{{ $tipo->nombre }}</span> --}}</h5>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="row">
                    @foreach ($asociados as $asociado)
                        <div class="col-md-4 mb-4">
                            <div class="card card-frame mb-2 bg-gray-100">
                                <div class="card-header p-2 bg-gray-300">
                                    <h6 class="mb-0 text-xs">
                                        {{ ++$i . '. ' . $asociado->user->name . ' ' . $asociado->user->ap_paterno . ' ' . $asociado->user->ap_materno }}
                                    </h6>
                                </div>
                                <hr class="m-0 bg-warning">
                                <div class="card-body m-2 p-2">
                                    <p class="text-xs font-weight-bold mb-2">
                                        @if (!empty($asociado->user->getRoleNames()))
                                            @foreach ($asociado->user->getRoleNames() as $rolName)
                                                <span class="text-xs text-dark">Rol:</span> {{ $rolName }}
                                            @endforeach
                                        @endif
                                    </p>

                                    <p class="text-xs font-weight-bold mb-2">
                                        <span class="text-xs text-dark">Condicion de tarea:</span>
                                        @if ($asociado->condicion == 0)
                                            {{ 'En proceso' }}
                                        @else
                                            {{ 'Terminado' }}
                                        @endif
                                    </p>

                                    <a href="{{-- {{ route('requisitos.edit', [tenant('id'), $requisito->id]) }} --}}">
                                        <button class="btn btn-icon btn-sm btn-warning m-auto" type="button"
                                            title="Ver perfil">
                                            <span class="material-icons">person</span>
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
                                <h6 class="mb-0 text-xs">Agregar usuario a flujo de trabajo...</h6>
                            </div>
                            <form method="POST" action="{{ route('asociados.store', tenant('id')) }}">
                                @csrf
                                <div class="card-body m-2 p-1 mb-3">
                                    <input name="id_solicitud_credito" class="form-control" type="hidden" value="{{ $id }}" />
                                    <select class="form-select mi-selector" name="id_empleado">
                                        <option value=""></option>
                                        @foreach ($empleados as $empleado)
                                            <option value="{{ $empleado->id }}">
                                                {{ $empleado->user->name . ' ' . $empleado->user->ap_paterno . ' - ' }}
                                                @if (!empty($asociado->user->getRoleNames()))
                                                    @foreach ($asociado->user->getRoleNames() as $rolName)
                                                        {{ $rolName }}
                                                    @endforeach
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="row">
                                        <div class="d-md-flex justify-content-md-end">
                                            <button class="btn btn-sm btn-dark mb-0 mt-1 bg-warning" type="submit"
                                                title="Documentos">+ Agregar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
