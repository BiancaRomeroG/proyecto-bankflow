<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Agregando proceso crediticio
                </h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('creditos.store', tenant('id')) }}">
                    @csrf
                    <div class="row mt-3">
                        <input name="id_empresa" class="form-control" type="hidden" value="{{ Auth::user()->id_empresa}}" />
                        <h5 class="font-weight-bolder">Informacion general</h5>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Monto: </label>
                                <input name="monto" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Motivo: </label>
                                <input name="motivo" class="form-control" type="text"/>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <label>Cliente: </label>
                            <select class="form-select" name="id_cliente">
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->user->name }}
                                        {{ $cliente->user->ap_paterno }} {{ $cliente->user->ap_materno }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <label>Tipo de credito: </label>
                            <select class="form-select" name="id_tipo_credito">
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <h5 class="font-weight-bolder">Informacion de Carpeta</h5>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Informacion del cliente: </label>
                                <input name="info_cliente" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Requisitos: </label>
                                <input name="requisito_prestamo" class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <h5 class="font-weight-bolder">Informacion Especifica</h5>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Fecha de Finalizacion: </label>
                                <input name="fecha_fin" class="form-control" type="date"/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Descripcion: </label>
                                <input name="descripcion" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Estado: </label>
                                <input name="estado" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Interes: </label>
                                <input name="interes" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Capital: </label>
                                <input name="capital" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Numero de Cuotas: </label>
                                <input name="numero_cuotas" class="form-control" type="text"/>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Custodia: </label>
                                <input name="nombre_cliente" class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>

                    <div class="button-row d-flex mt-4 d-md-flex">
                        <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Agregar proceso">
                            Agregar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-tenant-layout>
