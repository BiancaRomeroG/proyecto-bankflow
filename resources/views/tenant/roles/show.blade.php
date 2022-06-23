@section('title', 'Empleados')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('roles.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Rol: {{ $role->name }}</h5>
                <br>
            </div>
            <hr class="m-0">
            <div class="container container-mx">
                <div class="m-2">
                    <h4>
                        Permisos del rol
                    </h4>
                </div>
                <div class="row">
                    <div class="col-6">
                        @for ($i = 0; $i < count($permissions) / 2; $i++)
                            <div>
                                <span class='material-icons'><?php if ($permissions[$i]->estado == 1) echo "done"; else echo "close"?></span>
                                <strong>{{ $permissions[$i]->name }}</strong>
                            </div>
                        @endfor
                    </div>
                    
                    <div class="col-6">
                        @for ($i = count($permissions) / 2 + 1; $i < count($permissions); $i++)
                            <div>
                                <span class='material-icons'><?php if ($permissions[$i]->estado == 1) echo "done"; else echo "close"?></span>
                                <strong>{{ $permissions[$i]->name }}</strong>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>