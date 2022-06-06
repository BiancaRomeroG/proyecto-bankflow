@section('title', 'Empleados')
<x-app-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.index') }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Detalles de Credito:</h5>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-100 shadow-lg">

                    <div class="card bg-gradient-default mb-3">
                        <div class="card-body">
                            <h5 class="font-weight-normal text-info text-gradient">
                                {{ $solicitud_credito->cliente->user->name }}
                                {{ $solicitud_credito->cliente->user->ap_paterno }}
                                {{ $solicitud_credito->cliente->user->ap_materno }}</h5>
                            <blockquote class="blockquote text-white mb-0">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-8 mt-sm-0 mb-0">
                                        <div class="input-group input-group-static">
                                            <p class="text-dark ms-3">{{ $solicitud_credito->motivo }}</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mt-sm-0 mb-0">
                                        <div class="input-group input-group-static">
                                            <p class="text-warning ms-3">Monto solicitado:
                                                {{ $solicitud_credito->monto }}$</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-dark ms-3">Fecha: {{ $solicitud_credito->tiempo }}</p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="card bg-gradient-default">
                        <div class="card-body">
                            <h5 class="font-weight-normal text-info text-gradient">
                                Detalles Especificos</h5>
                            <blockquote class="blockquote text-white mb-0">
                                <p class="text-dark ms-3">Descripcion: {{ $solicitud_credito->detalles->descripcion }}</p>
                                <p class="text-dark ms-3">Custodia {{ $solicitud_credito->detalles->custodia->nombre_cliente }}</p>
                                <p class="text-dark ms-3">Numero de Cuotas: {{ $solicitud_credito->detalles->numero_cuotas }}</p>
                                <p class="text-dark ms-3">Estado: {{ $solicitud_credito->detalles->estado }}</p>
                                <p class="text-dark ms-3">Interes: {{ $solicitud_credito->detalles->interes * 100 }}</p>
                                <p class="text-dark ms-3">Fecha de Incio: {{ $solicitud_credito->detalles->fecha_inicio }}</p>
                                <p class="text-dark ms-3">Fecha de Incio: {{ $solicitud_credito->detalles->fecha_fin }}</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
