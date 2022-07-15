<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.show', [tenant('id'), $id]) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Editando detalles de credito
                </h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('creditos.updateDetalles', tenant('id')) }}">
                    @csrf
                    @method('put')
                    <div class="row mt-3">
                        <input name="id" class="form-control" type="hidden" value="{{ $id }}" />
                        <input name="id_detalle" class="form-control" type="hidden" value="{{ $detalles->id }}">

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Numero de cuotas: </label>
                                <input name="numero_cuotas" class="form-control" type="text"
                                    value="{{ $detalles->numero_cuotas }}" />
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Interes: </label>
                                <input name="tasa_interes" class="form-control" type="text"
                                    value="{{ $detalles->tasa_interes }}" />
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Duracion: </label>
                                <input name="duracion" class="form-control" type="text"
                                    value="{{ $detalles->duracion }}" />
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Estado de pago: </label>
                                <input name="pago_estado" class="form-control" type="text"
                                    value="{{ $detalles->pago_estado }}" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Descripcion: </label>
                                <input name="motivo" class="form-control" type="text"
                                    value="{{ $detalles->descripcion }}" />
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4 d-md-flex">
                            <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Editar Rol">
                                Editar
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </section>
</x-app-tenant-layout>
