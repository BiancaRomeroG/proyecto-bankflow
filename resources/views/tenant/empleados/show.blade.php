@section('title', 'Empleado')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-4">
        <a href="{{ route('empleados.index', tenant('id')) }}">
            <button class="btn btn-dark btn-sm" type="button" style="display: inline-block"><i
                    class="fas fa-arrow-left"></i> Atrás</button>
        </a>
        <div class="page-header min-height-300 border-radius-xl mt-2"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6 mb-3">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/assets/img/bruce-mars.jpg" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $empleado->user->name . ' ' . $empleado->user->ap_paterno }}
                            {{ $empleado->user->ap_materno }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist" style="background-color: #5ff890">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1"
                                    href="https://api.whatsapp.com/send?phone=+591{{ $empleado->user->telefono }}&text=Hola,%20te%20hablo%20desde%20la%20empresa"
                                    role="tab" aria-selected="true">
                                    <i class="fab fa-whatsapp"></i>
                                    <span class="ms-1">Messages</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Informacion de Perfil</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Nombre:</strong> &nbsp; {{ $empleado->user->name }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Apellido
                                            Paterno:</strong> &nbsp;
                                        {{ $empleado->user->ap_paterno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Apellido
                                            Materno:</strong> &nbsp;
                                        {{ $empleado->user->ap_materno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Carnet
                                            de Identidad:</strong> &nbsp;
                                        {{ $empleado->user->ci }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Fecha de
                                            Nacimiento:</strong> &nbsp;
                                        {{ $empleado->user->fecha_nac }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Información de Contacto</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Rol:</strong> &nbsp;
                                        {{ __('Aqui debe ir el rol') }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Area:</strong> &nbsp;
                                        {{ $empleado->area->nombre }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Telefono:</strong> &nbsp;
                                        {{ $empleado->user->telefono }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Email:</strong> &nbsp;
                                        {{ $empleado->user->email }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 pb-0">
                                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-instagram fa-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Rendimiento</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-3">
                                <hr class="my-2">
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"> Nº
                                        Procesos Crediticios:</strong> &nbsp;
                                    <span class="badge rounded-pill text-success mt-n2 mx-auto"
                                        style="background-color: #B0F5C6"># {{ count($empleado->creditos) }}</span>
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"> Monto
                                        Máximo recaudado:</strong> &nbsp;
                                    <span class="badge rounded-pill text-warning mt-n2 mx-auto"
                                        style="background-color: #f7ea97">{{ $empleado->creditos->max('monto') }}
                                        $</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="row mt-3">
                    <div class="mb-4 ps-3">
                        <h6 class="mb-4">Procesos Crediticios</h6>
                        <div>
                            <div class="card bg-gray-100 shadow-lg ">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nº
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Tipo de Credito
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Fecha</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Monto</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Cliente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($creditos as $credito)
                                                <tr>
                                                    <td class="align-center text-center">
                                                        <div class="d-flex px-2 py-1">
                                                            <span
                                                                class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ ++$i }}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-xs">
                                                                    {{ $credito->tipo->nombre }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            {{ \Carbon\Carbon::parse($credito->tiempo)->format('d/m/Y') }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-secondary text-xs font-weight-normal">{{ $credito->monto }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="text-secondary text-xs font-weight-normal">{{ $credito->cliente->user->name }}
                                                            {{ $credito->cliente->user->ap_paterno }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    {{ $creditos->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </x-app-layout>
