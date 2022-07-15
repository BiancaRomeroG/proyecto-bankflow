@section('title', 'Empleados')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Detalles de Credito:</h5>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0 text-info">Informacion General</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Monto Solicitado:</strong> &nbsp;
                                        {{ $solicitud_credito->monto }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Motivo:</strong> &nbsp;
                                        {{ $solicitud_credito->motivo }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Tipo de Credito:</strong> &nbsp;
                                        {{ $solicitud_credito->tipo->nombre }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0 text-info">Informacion del Solicitante</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Nombre:</strong> &nbsp;
                                        {{ $solicitud_credito->cliente->user->name }}
                                        {{ $solicitud_credito->cliente->user->ap_paterno }}
                                        {{ $solicitud_credito->cliente->user->ap_materno }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Motivo:</strong> &nbsp;
                                        {{ $solicitud_credito->cliente->user->ci }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Telefono:</strong> &nbsp;
                                        {{ $solicitud_credito->cliente->user->telefono }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Correo:</strong> &nbsp;
                                        {{ $solicitud_credito->cliente->user->email }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Domicilio:</strong> &nbsp;
                                        {{ $solicitud_credito->cliente->user->domicilio }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0 text-info">Informacion Especifica</h6>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="{{ route('creditos.editarDetalles', [tenant('id'), $solicitud_credito->id] ) }}">
                                            <span class="material-icons" title="Editar informacion">edit</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Descripcion:</strong> &nbsp;
                                        {{ $solicitud_credito->detalles->descripcion }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Fecha de Inicio:</strong> &nbsp;
                                        {{ $solicitud_credito->detalles->fecha_inicio }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Interes:</strong> &nbsp;
                                        {{ $solicitud_credito->detalles->tasa_interes }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Duracion:</strong> &nbsp;
                                        {{ $solicitud_credito->detalles->duracion }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Estado de Pago:</strong> &nbsp;
                                        {{ $solicitud_credito->detalles->pago_estado }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Numero de Cuotas:</strong> &nbsp;
                                        {{ $solicitud_credito->detalles->numero_cuotas }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
</x-app-tenant-layout>
