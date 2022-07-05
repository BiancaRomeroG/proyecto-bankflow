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
                        Permisos
                    </h4>
                </div>
                <div class="card bg-gray-200 shadow-lg">
                    <div class="row my-3 mx-2">
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <h6 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                Barra de Tareas</h6>
                            @for ($i = 0; $i < 6; $i++)
                                <x-span-role :permission=$permissions[$i] />
                            @endfor
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <h6 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                Gestionar Empleados</h6>
                            @for ($i = 6; $i < 11; $i++)
                                <x-span-role :permission=$permissions[$i] />
                            @endfor
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <h6 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                Gestionar Empleados</h6>
                            @for ($i = 11; $i < 16; $i++)
                                <x-span-role :permission=$permissions[$i] />
                            @endfor
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <h6 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                Gestionar Areas</h6>
                            @for ($i = 16; $i < 21; $i++)
                                <x-span-role :permission=$permissions[$i] />
                            @endfor
                        </div>

                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <h6 class="font-weight-bolder mb-3" style="display: inline-block">&nbsp;&nbsp;
                                Gestionar Roles</h6>
                            @for ($i = 21; $i < 26; $i++)
                                <x-span-role :permission=$permissions[$i] />
                            @endfor
                        </div>


                    </div>
                </div>
            </div>
        </div>
</x-app-tenant-layout>
