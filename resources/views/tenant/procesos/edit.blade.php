<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Editando tipo de credito</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('creditos.update', [tenant('id'), $proceso]) }}">
                    @csrf
                    @method('put')
                    <div class="row mt-3">
                        <input name="id" class="form-control" type="hidden" value="{{ $proceso->id }}" />

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Monto (Bs.): </label>
                                <input name="monto" class="form-control" type="text"
                                    value="{{ $proceso->monto }}" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Motivo: </label>
                                <input name="motivo" class="form-control" type="text"
                                    value="{{ $proceso->motivo }}" />
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <label>Cliente: </label>
                            <select class="form-select mi-selector" name="id_cliente" disabled>
                                <option value=""></option>
                                @foreach ($clientes as $cliente)
                                    @if ($cliente->id == $proceso->id_cliente)
                                        <option selected value="{{ $cliente->id }}">{{ $cliente->user->name }}
                                            {{ $cliente->user->ap_paterno }} {{ $cliente->user->ap_materno }}
                                        </option>
                                    @else
                                        <option value="{{ $cliente->id }}">{{ $cliente->user->name }}
                                            {{ $cliente->user->ap_paterno }} {{ $cliente->user->ap_materno }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Interes: </label>
                                <select class="mi-selector form-select" name="interes" id="interes">
                                    <option value=""></option>
                                    <option value="1">3%</option>
                                    <option value="2">5%</option>
                                    <option value="3">8%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <label>Tipo de credito: </label>
                            <select class="form-select mi-selector" name="id_tipo_credito">
                                <option value=""></option>
                                @foreach ($tipos as $tipo)
                                    @if ($tipo->id == $proceso->id_tipo_credito)
                                        <option selected value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                    @else
                                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Duracion: </label>
                                <input name="duracion" class="form-control" type="text" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Fecha de finalizacion: </label>
                                <input name="fecha_fin" class="form-control" type="date" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>N° de cuotas: </label>
                                <input name="numero_cuotas" class="form-control" type="number" />
                            </div>
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
