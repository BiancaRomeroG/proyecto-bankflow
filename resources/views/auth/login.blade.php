<x-login-layout>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

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
                                    <a class="nav-link d-flex align-items-center me-2 text-white" aria-current="page"
                                        href="#">
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
                                    <a href="{{url('/')}}" class="text-white">Volver</a>
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
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://cdn.pixabay.com/photo/2015/07/28/22/01/office-865091_960_720.jpg');">
            
            <div class="container my-auto mt-8">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom bg-gray-300">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-secondary shadow-secondary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Inicia sesión</h4>
                                    <div class="row mt-3">
                                        <div class="col-2 text-center ms-auto">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-facebook text-white text-lg"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 text-center px-1">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-github text-white text-lg"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 text-center me-auto">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-google text-white text-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label"></label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Correo Electrónico" :value="old('email')" required autofocus>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label"></label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Contraseña" required autocomplete="current-password">
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="remember_me"
                                            name="remember">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Recuérdame</label>
                                    </div>
                                    <x-jet-validation-errors class="mb-4" />
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-secondary w-100 my-4 mb-2">INICIA
                                            SESIÓN</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        ¿No tienes una cuenta?
                                        <a href="{{route('register')}}"
                                            class="text-success font-weight-bold">Únete</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> /
                                F.I.C.C.T. <i class="fa fa-chart-pie" aria-hidden="true"></i>
                                <a href="https://1drv.ms/w/s!ArQLL-6st4rhuF0jDR3JUw_88npc"
                                    class="font-weight-bold text-white" target="_blank">Documentacion</a>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
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
  <script src="assets/js/material-dashboard.min.js?v=3.0.2"></script>
</x-login-layout>

{{-- <div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif

    <x-jet-button class="ml-4">
        {{ __('Log in') }}
    </x-jet-button>
</div> --}}
