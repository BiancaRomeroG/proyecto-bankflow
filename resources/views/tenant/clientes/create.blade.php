@section('title', 'Cliente')

<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('clientes.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Agregando Cliente</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('clientes.store', tenant('id')) }}">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombres</label>
                                <input name="name" class="multisteps-form__input form-control" type="text" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Apellido Paterno</label>
                                <input name="ap_paterno" class="multisteps-form__input form-control" type="text" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Apellido Materno</label>
                                <input name="ap_materno" class="multisteps-form__input form-control" type="text"  />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Cedula de identidad</label>
                                <input name="ci" class="multisteps-form__input form-control" type="number" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Telefono</label>
                                <input name="telefono" class="form-control" placeholder="+591"
                                    type="number" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Fecha de Nacimiento</label>
                                <input name="fecha_nac" type="date" class="form-control" />
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Email</label>
                                <input name="email" class="form-control" type="email"
                                    placeholder="ejemplo@gmail.com"  />
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Domicilio: </label>
                                <input name="domicilio" class="form-control" type="text" id="domicilio"
                                    value="" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Contraseña</label>
                                <input name="password" class="form-control" type="password" />
                            </div>
                        </div>
                        
                    </div>
                    <div class="button-row d-flex mt-4 d-md-flex justify-content-md-end">
                        <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Prev">
                            Agregar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-tenant-layout>
