@section('title', 'Perfil')

<x-app-layout>
    <div class="container-fluid">

        <div class="card card-body">
            <a href="{{ route('empresas.index') }}">
                <button class="btn btn-dark btn-sm" type="button" style="display: inline-block"><i
                        class="fas fa-arrow-left"></i> Atrás</button>
            </a>
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('assets') }}/img/logo.png"
                            alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $usuario->name . ' ' . $usuario->ap_paterno . ' ' . $usuario->ap_materno }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            {{ $empresa->nombre }}
                        </p>
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
                                        <h6 class="mb-0">Informacion del Perfil</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="horizontal gray-light my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Nombre:</strong> &nbsp; {{ $usuario->name }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Apellido
                                            Paterno:</strong> &nbsp; {{ $usuario->ap_paterno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Apellido
                                            Materno:</strong> &nbsp; {{ $usuario->ap_materno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Telefono:</strong> &nbsp; {{ $usuario->telefono }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Email:</strong> &nbsp; {{ $usuario->email }}</li>
                                    <li class="list-group-item border-0 ps-0 pb-0">
                                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-whatsapp fa-lg"></i>
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
                                        <h6 class="mb-0">Informacion de Empresa</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="horizontal gray-light my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Nombre:</strong> &nbsp; {{ $empresa->nombre }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Direccion: 
                                        </strong> &nbsp; {{ $empresa->direccion }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Cantidad de Trabajadores:
                                        </strong> &nbsp; {{ $empresa->cant_trabajadores }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Plan Contratado</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="horizontal gray-light my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Nombre:</strong> &nbsp; {{ $plan->nombre }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tipo de plan:
                                        </strong> &nbsp; {{ $plan->tipo_plan }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Precio:
                                            </strong> &nbsp; {{ $plan->detalle->precio }} $</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Fecha:</strong> &nbsp; {{ $plan->detalle->fecha_suscripcion }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
