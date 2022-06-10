@section('title', 'Clientes')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Clientes</h4>
                    </div>
                    <div class="d-md-flex justify-content-md-end col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="{{ route('clientes.create', tenant('id')) }}" class="btn btn-sm btn-dark">Agregar</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <select class="form-control border border-gray-400" id="opcion" name="opcion">
                            <option class="text-dark" value="nombre">&nbsp;&nbsp;Nombre</option>
                            <option class="text-dark" value="telefono">&nbsp;&nbsp;CI</option>
                        </select>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <input type="text" id="texto" name="texto"
                            class="border border-gray-400 form-control bg-gray-100" placeholder="Texto a buscar">
                    </div>
                </div>

            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-200 shadow-lg">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre-Correo</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ci</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Telefono</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td class="align-center text-center">
                                            <div class="d-flex px-2 py-1">
                                                <span
                                                    class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ ++$i }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                                        class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs">{{ $cliente->user->name }}
                                                        {{ $cliente->user->ap_paterno }}</h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $cliente->user->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $cliente->user->ci }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">{{ $cliente->user->telefono }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('clientes.edit', [tenant('id'), $cliente->id]) }}">
                                                <button class="btn btn-icon btn-sm btn-danger m-auto" type="button"
                                                    title="Editar">
                                                    <i class="fas fa-pen m-auto"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('clientes.show', [tenant('id'), $cliente->id]) }}">
                                                <button class="btn btn-icon btn-sm btn-info m-auto" type="button"
                                                    title="Ver informacion">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="">
                            {{ $clientes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
