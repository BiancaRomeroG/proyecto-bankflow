<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('miCredito.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Detalles de Credito:</h5>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-100 shadow-lg">
                    <div class="card bg-gradient-default">
                        <div class="card-body">
                            <h5 class="font-weight-normal text-info text-gradient">
                                Informacion General</h5>
                            <blockquote class="blockquote text-white mb-0">
                                <p class="text-dark ms-3">Nombre:
                                    {{ $solicitud_credito->cliente->user->name }}
                                    {{ $solicitud_credito->cliente->user->ap_paterno }}
                                    {{ $solicitud_credito->cliente->user->ap_materno }} </p>
                                <p class="text-dark ms-3">Carnet de Identidad:
                                    {{ $solicitud_credito->cliente->user->ci }}</p>
                                <p class="text-dark ms-3">Telefono:
                                    {{ $solicitud_credito->cliente->user->telefono }}
                                </p>
                                <p class="text-dark ms-3"> Correo:
                                    {{ $solicitud_credito->cliente->user->email }}
                                </p>
                                <p class="text-dark ms-3"> Domicilio:
                                    {{ $solicitud_credito->cliente->user->domicilio }}
                                </p>
                            </blockquote>
                        </div>

                    </div>
                </div>
                <br>
                <br>
                <div class="card bg-gray-100 shadow-lg">
                    <div class="card bg-gradient-default">
                        <div class="card-body">
                            <h5 class="font-weight-normal text-info text-gradient">
                                Detalles Especificos</h5>
                            <blockquote class="blockquote text-white mb-0">
                                <p class="text-dark ms-3">Descripcion:
                                    {{ $solicitud_credito->detalles->descripcion }}</p>
                                <p class="text-dark ms-3">Monto:
                                    {{ $solicitud_credito->monto }}</p>
                                <p class="text-dark ms-3">Fecha Inicio:
                                    {{ $solicitud_credito->detalles->fecha_inicio }}</p>
                                <p class="text-dark ms-3">Interes:
                                    {{ $solicitud_credito->detalles->tasa_interes }}</p>
                                <p class="text-dark ms-3">Tipo de Credito:
                                    {{ $solicitud_credito->tipo->nombre }}</p>
                                <p class="text-dark ms-3">Duracion:
                                    {{ $solicitud_credito->detalles->duracion }}</p>
                                <p class="text-dark ms-3">Estado:
                                    {{ $solicitud_credito->detalles->estado }}</p>
                                <p class="text-dark ms-3">Coutas Canceladas:
                                    {{ $solicitud_credito->detalles->numero_cuotas }}</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-tenant-layout>
