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
                <nav
                    class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid ps-2 pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
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
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="#">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        Sistemas Informacion II
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="#">
                                        <i class="fas fa-home opacity-6 text-dark me-1"></i>
                                        INF 412
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="#">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        SB
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="#">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        Grupo #6
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="{{ route('login') }}"
                                        class="btn btn-sm mb-0 me-1 bg-gradient-dark">Iniciar Sesión</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="#" class="btn btn-sm mb-0 me-1 bg-gradient-dark">U.A.G.R.M.</a>
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
        <div class="page-header align-items-start min-vh-100 mb-5"
            style="background-image: url('https://static11.com-hotel.com/uploads/destination/32437/photo/bolivia-bolivia-1-santa-cruz_1473346489.jpeg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            
            <h1 class="font-weight-bold text-white m-auto mt-8">PROYECTO SISTEMA WORKFLOW</h1>

        </div>

        
        <div class="container my-auto">
            <div class="row">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card bg-gradient-danger shadow-lg">
                            <span class="badge rounded-pill bg-secondary text-white w-30 mt-n2 mx-auto">Starter</span>
                            <div class="card-header text-center bg-transparent pt-4 pb-3">
                                <h1 class="font-weight-bold mt-2 text-white">
                                    <small class="text-lg mb-auto">$</small>59<small class="text-lg">/mo</small>
                                </h1>
                            </div>
                            <div class="card-body text-lg-start text-center pt-0">
                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">2 team members</span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">20GB Cloud storage </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto">done</i>
                                    <span class="ps-3 text-white">Integration help </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto">remove</i>
                                    <span class="ps-3 text-white">Sketch Files </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-white">API Access </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-white">Complete documentation </span>
                                </div>

                                <a href="javascript:;" class="btn btn-icon bg-gradient-secondary d-lg-block mt-3 mb-0">
                                    Join
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card bg-gradient-dark shadow-lg">
                            <span class="badge rounded-pill bg-primary w-30 mt-n2 mx-auto">Premium</span>
                            <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                <h1 class="font-weight-bold mt-2 text-white">
                                    <small class="text-lg mb-auto">$</small>89<small class="text-lg">/mo</small>
                                </h1>
                            </div>
                            <div class="card-body text-lg-start text-center pt-0">
                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">10 team members</span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">40GB Cloud storage </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">Integration help </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">Sketch Files </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-white">API Access </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-white">Complete documentation </span>
                                </div>

                                <a href="{{ route('register') }}"
                                    class="btn btn-icon bg-gradient-primary d-lg-block mt-3 mb-0">
                                    Try Premium
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card bg-gradient-primary shadow-lg">
                            <span class="badge rounded-pill bg-dark w-30 mt-n2 mx-auto">Premium</span>
                            <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                <h1 class="font-weight-bold mt-2 text-white">
                                    <small class="text-lg mb-auto">$</small>109<small
                                        class="text-lg">/mo</small>
                                </h1>
                            </div>
                            <div class="card-body text-lg-start text-center pt-0">
                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">10 team members</span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">40GB Cloud storage </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">Integration help </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">done</i>
                                    <span class="ps-3 text-white">Sketch Files </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-white">API Access </span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-white">remove</i>
                                    <span class="ps-3 text-white">Complete documentation </span>
                                </div>

                                <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                    Try Premium
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>
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
