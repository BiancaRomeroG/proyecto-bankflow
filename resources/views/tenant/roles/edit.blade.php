<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('roles.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Editando Rol</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('roles.update', [tenant('id'), $role]) }}">
                    @csrf
                    @method('put')
                    <div class="row mt-3">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Nombre: </label>
                                <input name="nombre" class="form-control" type="text" value="{{ $role->name }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp; Permisos</h5>
                                @for ($i = 0; $i < count($permissions) / 2; $i++)
                                    <div class="container">
                                        <label>                                       
                                            <input type="checkbox" name="permissions2[]" value="{{ $permissions[$i]->id }}" <?php if ($permissions[$i]->estado == 1) echo "checked"; ?>>
                                            {{ $permissions[$i]->name }}
                                        </label>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <h5 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp; Permisos</h5>
                                @for ($i = count($permissions) / 2 + 1; $i < count($permissions); $i++)
                                    <div class="container">
                                        <label>                                       
                                            <input type="checkbox" name="permissions2[]" value="{{ $permissions[$i]->id }}" <?php if ($permissions[$i]->estado == 1) echo "checked"; ?>>
                                            {{ $permissions[$i]->name }}
                                        </label>
                                    </div>
                                @endfor
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
