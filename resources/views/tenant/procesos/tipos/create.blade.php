<x-app-tenant-layout>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('tipos.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Agregando tipo de credito</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('tipos.store', tenant('id')) }}">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombre: </label>
                                <input name="nombre" class="form-control" type="text" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Descripción: </label>
                                <input name="descripcion" class="form-control" type="text" required />
                            </div>
                        </div>
                    </div>
                    <div class="button-row d-flex mt-4 d-md-flex">
                        <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Editar tipo">
                            Agregar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
