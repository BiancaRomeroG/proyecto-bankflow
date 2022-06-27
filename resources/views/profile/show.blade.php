@section('title', 'Perfil')

<x-app-layout>
    <div class="container-fluid">

        <div class="card card-body">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                            alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ Auth::user()->name . ' ' . Auth::user()->ap_paterno . ' ' . Auth::user()->ap_materno }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            Administrador de Sistema
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
                                    <div class="col-md-4 text-end">
                                        <a href="{{ route('sc_usuarios.edit', Auth::user()->id) }}">
                                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit Profile"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="horizontal gray-light my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">Nombre:</strong> &nbsp; {{ Auth::user()->name }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Apellido
                                            Paterno:</strong> &nbsp; {{ Auth::user()->ap_paterno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Apellido
                                            Materno:</strong> &nbsp; {{ Auth::user()->ap_materno }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Carnet
                                            de Identidad:</strong> &nbsp; {{ Auth::user()->ci }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Fecha de
                                            Nacimiento:</strong> &nbsp; {{ Auth::user()->fecha_nac }}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Telefono:</strong> &nbsp; {{ Auth::user()->telefono }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Email:</strong> &nbsp; {{ Auth::user()->email }}</li>
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
