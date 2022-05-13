<x-login-layout>
    <x-jet-validation-errors class="mb-4" />

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
                                    <a href="{{ route('login') }}" class="text-white">Log in</a>
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
        <div class="page-header align-items-start min-vh-100 mb-6"
            style="background-image: url('https://cdn.pixabay.com/photo/2015/07/28/22/01/office-865091_960_720.jpg');">
            <h1 class="font-weight-bold text-white m-auto mt-14" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">BANK - FLOW <p class="text-center text-white">El Mejor sistema para procesos crediticios</p></h1>
            {{-- <span class="mask bg-gradient-dark opacity-6"></span> --}}
        </div>
        <div class="container my-auto mb-4">
            <div class="row">
                <span class="badge rounded-pill text-success w-10 mt-n2 mx-auto mb-4" style="background-color: #B0F5C6">Precios</span>
                <h2 class="text-center mb-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b>Accede a nuestros planes de suscripcion flexibles</b></h2>
                <p class="text-center mb-5">Precios que se escalan con su negocio de inmediato.</p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card bg-gradient-light shadow-lg">
                            <span class="badge rounded-pill bg-gray-400 text-dark w-30 mt-n2 mx-auto">Starter</span>
                            <div class="card-header text-center bg-transparent pt-4 pb-3">
                                <h1 class="font-weight-bold mt-2 text-dark" style="font-family: Arial, Helvetica, sans-serif">
                                    <small class="text-lg mb-auto">$</small>29<small class="text-lg">/mo</small>
                                </h1>
                            </div>
                            <div class="card-body text-lg-start text-center pt-0">
                                <a href="javascript:;" class="btn btn-icon d-lg-block mt-3 text-white" style="background-color: #0AD149">
                                    Try Starter
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                                <a href="javascript:;" class="btn btn-icon d-lg-block mb-4 text-dark" style="background-color: rgb(238, 238, 238)">
                                    Más Información
                                </a>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-dark">2 team members</span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-dark">20GB Cloud storage </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto">done</i>
                                    <span class="ps-3 text-dark">Integration help </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto">remove</i>
                                    <span class="ps-3 text-dark">Sketch Files </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-dark">API Access </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-dark">Complete documentation </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card bg-gradient-light shadow-lg">
                            <span class="badge rounded-pill bg-warning w-30 mt-n2 mx-auto">Premium</span>
                            <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                <h1 class="font-weight-bold mt-2 text-dark" style="font-family: Arial, Helvetica, sans-serif">
                                    <small class="text-lg mb-auto">$</small>39<small class="text-lg">/mo</small>
                                </h1>
                            </div>
                            <div class="card-body text-lg-start text-center pt-0">
                                <a href="{{route('register')}}" class="btn btn-icon d-lg-block mt-3 mb-0 text-white" style="background-color: #0AD149">
                                    Try Premium
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                                <a href="javascript:;" class="btn btn-icon d-lg-block mt-3 mb-4 text-dark" style="background-color: rgb(238, 238, 238)">
                                    Más Información
                                </a>
                                
                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">10 team members</span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">40GB Cloud storage </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">Integration help </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">Sketch Files </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">remove</i>
                                    <span class="ps-3 text-dark">API Access </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">remove</i>
                                    <span class="ps-3 text-dark">Complete documentation </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card bg-gradient-light shadow-lg">
                            <span class="badge rounded-pill bg-gray-400 text-dark w-30 mt-n2 mx-auto">Corporativo</span>
                            <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                <h1 class="font-weight-bold mt-2 text-dark" style="font-family: Arial, Helvetica, sans-serif">
                                    <small class="text-lg mb-auto">$</small>59<small class="text-lg">/mo</small>
                                </h1>
                            </div>
                            <div class="card-body text-lg-start text-center pt-0">
                                <a href="javascript:;" class="btn btn-icon d-lg-block mt-3 mb-0 text-white" style="background-color: #0AD149">
                                    Try Corporativo
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                                <a href="javascript:;" class="btn btn-icon d-lg-block mt-3 mb-4 text-dark" style="background-color: rgb(238, 238, 238)">
                                    Más Información
                                </a>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">10 team members</span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">40GB Cloud storage </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">Integration help </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">Sketch Files </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">remove</i>
                                    <span class="ps-3 text-dark">API Access </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">remove</i>
                                    <span class="ps-3 text-dark">Complete documentation </span>
                                </div>
                                
                            </div>
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
<div class="bg-gray-900"></div>
    </main>
    <!--   Core JS Files   -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-gray-900', 'shadow');
        } else {
          nav.classList.remove('bg-gray-900', 'shadow');
        }
      });
    </script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</x-login-layout>
