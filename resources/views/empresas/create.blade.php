@section('title', 'Empresa')
<x-app-layout>
    <div>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('empresas.index') }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Editando informacion de Empresa</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('empresas.store') }}">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombre de la Empresa</label>
                                <input name="nombre" class="form-control" type="text"
                                    required/>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Direccion</label>
                                <input name="direccion" class="form-control" type="text"
                                    required/>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Cantidad de Trabajadores</label>
                                <input name="cant_trabajadores" class="form-control" type="number"
                                    required/>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <label>Plan Contratado: </label>
                            <select class="form-select" name="id_planes">
                                @foreach ($planes as $plan)
                                    <option selected value="{{ $plan->id }}">{{ $plan->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="button-row d-flex mt-4 d-md-flex justify-content-md-end">
                            <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Agregar Empresa">
                                Agregar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>