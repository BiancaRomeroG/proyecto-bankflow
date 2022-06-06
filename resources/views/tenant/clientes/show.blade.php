@section('title', 'Clientes')
<x-app-layout>
    <div class="container-fluid px-2 px-md-4">
        <a href="{{ route('clientes.index') }}">
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
                            {{ $cliente->user->name }} {{ $cliente->user->ap_paterno }}
                            {{ $cliente->user->ap_materno }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            <span>{{ $cliente->user->rol->nombre }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist" style="background-color: #5ff890">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1"
                                    href="https://api.whatsapp.com/send?phone=+591{{ $cliente->user->telefono }}&text=Hola,%20¿Como%20va%20el%20caso?"
                                    role="tab" aria-selected="true">
                                    <i class="fab fa-whatsapp"></i>
                                    <span class="ms-1">Escribir</span>
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
                                            class="text-dark">Nombre:</strong> &nbsp; {{ $cliente->user->name }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Apellido Paterno:</strong> &nbsp;
                                        {{ $cliente->user->ap_paterno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Apellido Materno:</strong> &nbsp;
                                        {{ $cliente->user->ap_materno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Carnet de Identidad:</strong> &nbsp;
                                        {{ $cliente->user->ci }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Fecha de Nacimiento:</strong> &nbsp;
                                        {{ $cliente->user->fecha_nac }}</li>
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
                                        {{ $cliente->user->rol->nombre }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Telefono:</strong> &nbsp;
                                        {{ $cliente->user->telefono }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Email:</strong> &nbsp;
                                        {{ $cliente->user->email }}
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
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                        Nº de solicitudes:</strong> &nbsp;
                                    <span class="badge rounded-pill text-success mt-n2 mx-auto"
                                        style="background-color: #B0F5C6"># {{ count($cliente->creditos) }}</span>
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"> Monto
                                        Máximo Solicitado:</strong> &nbsp;
                                    <span class="badge rounded-pill text-warning mt-n2 mx-auto"
                                        style="background-color: #f7ea97">{{ $cliente->creditos->max('monto') }}
                                        $</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="row mt-3">
                    <div class="mb-4 ps-3">
                        <h6 class="mb-4">Creditos Solicitados</h6>
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
                                                    Motivo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cliente->creditos as $credito)
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
                                                            class="text-secondary text-xs font-weight-normal">{{ $credito->motivo }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="fixed-plugin">
            <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                <i class="material-icons py-2">settings</i>
            </a>
            <div class="card shadow-lg">
                <div class="card-header pb-0 pt-3">
                    <div class="float-start">
                        <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                        <p>See our dashboard options.</p>
                    </div>
                    <div class="float-end mt-4">
                        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->
                </div>
                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0">
                    <!-- Sidebar Backgrounds -->
                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors my-2 text-start">
                            <span class="badge filter bg-gradient-primary active" data-color="primary"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-dark" data-color="dark"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-info" data-color="info"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-success" data-color="success"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-warning" data-color="warning"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-danger" data-color="danger"
                                onclick="sidebarColor(this)"></span>
                        </div>
                    </a>
                    <!-- Sidenav Type -->
                    <div class="mt-3">
                        <h6 class="mb-0">Sidenav Type</h6>
                        <p class="text-sm">Choose between 2 different sidenav types.</p>
                    </div>
                    <div class="d-flex">
                        <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                            onclick="sidebarType(this)">Dark</button>
                        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                            onclick="sidebarType(this)">Transparent</button>
                        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                            onclick="sidebarType(this)">White</button>
                    </div>
                    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                    <!-- Navbar Fixed -->
                    <hr class="horizontal dark my-3">
                    <div class="mt-2 d-flex">
                        <h6 class="mb-0">Light / Dark</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                                onclick="darkMode(this)">
                        </div>
                    </div>
                    <hr class="horizontal dark my-sm-4">
                    <a class="btn bg-gradient-info w-100" href="https://www.#.com/product/material-dashboard">Free
                        Download</a>
                    <a class="btn btn-outline-dark w-100"
                        href="https://www.#.com/learning-lab/bootstrap/overview/material-dashboard">View
                        documentation</a>
                    <div class="w-100 text-center">
                        <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                            data-icon="octicon-star" data-size="large" data-show-count="true"
                            aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                        <h6 class="mt-3">Thank you for sharing!</h6>
                        <a href="https:/com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.#.com%2Fproduct%2Fsoft-ui-dashboard"
                            class="btn btn-dark mb-0 me-2" target="_blank">
                            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                        </a>
                        <a href="httpscom/sharer/sharer.php?u=https://www.#.com/product/material-dashboard"
                            class="btn btn-dark mb-0 me-2" target="_blank">
                            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                        </a>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
