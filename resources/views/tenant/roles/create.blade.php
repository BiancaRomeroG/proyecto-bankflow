<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('roles.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Agregando Rol</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('roles.store', tenant('id')) }}">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombre: </label>
                                <input name="nombre" class="form-control" type="text" :value="old('nombre')" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <h4 class="text-dark" class="card-title">Permisos</h4>
                        </div>
                        <div class="card bg-gray-200 shadow-lg">
                            <div class="row my-3 mx-2">
                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                            Barra de Tareas</h5>
                                        @for ($i = 0; $i < 6; $i++)
                                            <div class="container">
                                                <label>
                                                    <input type="checkbox" name="permissions2[]"
                                                        value="{{ $permissions[$i]->id }}">
                                                    {{ $permissions[$i]->name }}
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                            Gestionar Empleados</h5>
                                        @for ($i = 6; $i < 11; $i++)
                                            <div class="container">
                                                <label>
                                                    <input type="checkbox" name="permissions2[]"
                                                        value="{{ $permissions[$i]->id }}">
                                                    {{ $permissions[$i]->name }}
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                            Gestionar Clientes</h5>
                                        @for ($i = 11; $i < 16; $i++)
                                            <div class="container">
                                                <label>
                                                    <input type="checkbox" name="permissions2[]"
                                                        value="{{ $permissions[$i]->id }}">
                                                    {{ $permissions[$i]->name }}
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                            Gestionar Areas</h5>
                                        @for ($i = 16; $i < 21; $i++)
                                            <div class="container">
                                                <label>
                                                    <input type="checkbox" name="permissions2[]"
                                                        value="{{ $permissions[$i]->id }}">
                                                    {{ $permissions[$i]->name }}
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                            Gestionar Roles</h5>
                                        @for ($i = 21; $i < 26; $i++)
                                            <div class="container">
                                                <label>
                                                    <input type="checkbox" name="permissions2[]"
                                                        value="{{ $permissions[$i]->id }}">
                                                    {{ $permissions[$i]->name }}
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>


                            </div>

                            <div class="button-row d-flex mt-4 d-md-flex">
                                <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Editar Rol">
                                    Agregar
                                </button>
                            </div>
                </form>
            </div>
        </div>
    </section>
</x-app-tenant-layout>
