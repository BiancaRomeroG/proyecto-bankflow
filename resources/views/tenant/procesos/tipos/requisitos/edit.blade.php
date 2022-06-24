<x-app-tenant-layout>
   
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('requisitos.index', [tenant('id'), $requisito->id_tipo_credito]) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Editando requisito</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('requisitos.update', [tenant('id'), $requisito->id] ) }}">
                    @csrf
                    @method('put')
                    <div class="row mt-3">
                        <input type="hidden" name="id_tipo_credito" value={{ $requisito->id_tipo_credito }}>
                        <div class="col-6 col-sm-4 sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombre: </label>
                                <input name="nombre" class="form-control" type="text" value="{{ $requisito->nombre }}" required/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Descripción: </label>
                                <input name="descripcion" class="form-control" type="text" value="{{ $requisito->descripcion }}" required/>
                            </div>
                        </div>
                    </div>
                    <div class="button-row d-flex mt-4 d-md-flex">
                        <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Editar tipo">
                            Editar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-tenant-layout>
