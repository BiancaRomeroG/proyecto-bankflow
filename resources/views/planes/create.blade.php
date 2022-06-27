@section('title', 'Planes')
<x-app-layout>
    <div>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('planes.index') }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Creando Plan</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('planes.store') }}">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombre de Plan</label>
                                <input name="nombre" class="form-control" type="text"
                                    required" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Tipo de Plan</label>
                                <input name="tipo_plan" class="form-control" type="text"
                                    required" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Precio</label>
                                <input name="precio" class="form-control" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Numero de Usuarios</label>
                                <input name="miembros" class="form-control" type="number"
                                    required />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Fecha de Creación</label>
                                <input name="fecha_suscripcion" class="form-control" placeholder="+591" type="date"
                                    required />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Almacenamiento</label>
                                <input name="storage" type="number" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Prioridad</label>
                                <input name="comprobante_pago" class="form-control" type="text"
                                    required/>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4 d-md-flex justify-content-md-end">
                            <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Agregar Plan">
                                Agregar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>