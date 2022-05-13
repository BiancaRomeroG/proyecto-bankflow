<x-login-layout>

    <body class="">
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="box-shadow: none">
                        <div class="container-fluid ps-2 pe-0">
                            <a class="navbar-brand font-weight-bolder text-white ms-lg-0 ms-3 " href="#">
                                SISTEMA BANKFLOW
                            </a>
                            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon mt-2">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse" id="navigation">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center me-2 text-white"
                                            aria-current="page" href="#">
                                            Sistemas Informacion II
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white me-2" href="#">
                                            INF 412
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  text-white me-2" href="#">
                                            SB
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white me-2" href="#">
                                            Grupo #6
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav d-lg-block d-none mx-6">
                                    <li class="nav-item">
                                        <a href="{{ url('/') }}" class="text-white">Volver</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header align-items-start min-vh-100"
                    style="background-image: url('https://user-images.githubusercontent.com/36086876/167264136-62f44173-33e5-4515-9c8e-515560aae494.png'); background-size: cover;">
                    <div class="col-10 col-lg-8 m-auto mt-7">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="font-weight-bolder mb-0">Ingresa tu Información</h5>
                                    <p class="mb-0 text-sm">Personaliza tu perfil</p>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-static my-2">
                                                <label>Nombres</label>
                                                <input name="name" class="multisteps-form__input form-control"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Apellido Paterno</label>
                                                <input name="ap_paterno" class="multisteps-form__input form-control"
                                                    type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-static my-2">
                                                <label>Apellido Materno</label>
                                                <input name="ap_materno" class="multisteps-form__input form-control"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Cedula de identidad</label>
                                                <input name="ci" class="multisteps-form__input form-control"
                                                    type="number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Telefono</label>
                                                <input name="telefono" class="multisteps-form__input form-control"
                                                    placeholder="+591" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Fecha de Nacimiento</label>
                                                <input name="fecha_nac" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Email</label>
                                                <input name="email" class="multisteps-form__input form-control"
                                                    type="email" placeholder="ejemplo@gmail.com" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-static my-2">
                                                <label>Contraseña</label>
                                                <input name="password" class="multisteps-form__input form-control"
                                                    type="password" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Confirmar Contraseña</label>
                                                <input name="password_confirmation"
                                                    class="multisteps-form__input form-control" type="password" />
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" hidden name="id_rol" value="7">


                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit"
                                            title="Prev">
                                            Listo
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="font-weight-bolder mb-0">Ingresa Información de tu empresa</h5>
                                    <p class="mb-0 text-sm">Datos que ayuden a identificar tu empresa</p>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-static my-2">
                                                <label>Nombres</label>
                                                <input name="name" class="multisteps-form__input form-control"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Apellido Paterno</label>
                                                <input name="ap_paterno" class="multisteps-form__input form-control"
                                                    type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-static my-2">
                                                <label>Apellido Materno</label>
                                                <input name="ap_materno" class="multisteps-form__input form-control"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Cedula de identidad</label>
                                                <input name="ci" class="multisteps-form__input form-control"
                                                    type="number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Telefono</label>
                                                <input name="telefono" class="multisteps-form__input form-control"
                                                    placeholder="+591" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Fecha de Nacimiento</label>
                                                <input name="fecha_nac" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Email</label>
                                                <input name="email" class="multisteps-form__input form-control"
                                                    type="email" placeholder="ejemplo@gmail.com" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-static my-2">
                                                <label>Contraseña</label>
                                                <input name="password" class="multisteps-form__input form-control"
                                                    type="password" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <div class="input-group input-group-static my-2">
                                                <label>Confirmar Contraseña</label>
                                                <input name="password_confirmation"
                                                    class="multisteps-form__input form-control" type="password" />
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" hidden name="id_rol" value="7">


                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit"
                                            title="Prev">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </section>
        </main>
        <!--   Core JS Files   -->
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../public/assets/js/material-dashboard.min.js?v=3.0.2"></script>
</x-login-layout>
