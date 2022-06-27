@section('title', 'Perfil')
<x-app-layout>
    <div>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('profile.show') }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Editando Perfil</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('sc_usuarios.update', $usuario) }}">
                    @csrf
                    @method('put')
                    <input hidden type="text" name="id" value="{{ $usuario->id }}">
                    <div class="row mt-3">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombres</label>
                                <input name="name" class="form-control" type="text"
                                    value="{{ $usuario->name }}" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Apellido Paterno</label>
                                <input name="ap_paterno" class="form-control" type="text"
                                    value="{{ $usuario->ap_paterno }}" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Apellido Materno</label>
                                <input name="ap_materno" class="form-control" type="text"
                                    value="{{ $usuario->ap_materno }}" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Cedula de identidad</label>
                                <input name="ci" class="form-control" type="number"
                                    value="{{ $usuario->ci }}" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Telefono</label>
                                <input name="telefono" class="form-control" placeholder="+591" type="number"
                                    value="{{ $usuario->telefono }}" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Fecha de Nacimiento</label>
                                <input name="fecha_nac" type="date" class="form-control"
                                    value="{{ $usuario->fecha_nac }}">
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Email</label>
                                <input name="email" class="form-control" type="email"
                                    placeholder="ejemplo@gmail.com" value="{{ $usuario->email }}" />
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4 d-md-flex justify-content-md-end">
                            <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Editar cliente">
                                Editar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
