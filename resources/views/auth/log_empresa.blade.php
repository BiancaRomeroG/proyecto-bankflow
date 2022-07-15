<x-login-layout>
    @section('title', 'Login')
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black" style="box-shadow: none">
                    <div class="container px-5">
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
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a class="nav-link active text-white" aria-current="page"
                                        href="{{ url('/') }}">Inicio</a></li>
                                {{-- <li class="nav-item"><a class="nav-link text-white" href="#!">About</a></li> --}}
                                <li class="nav-item"><a class="nav-link text-white"
                                        href="https://api.whatsapp.com/send?phone=+59178491807&text=Hola,%20mas%20informacion%20del%20servicio">Contacto Whatsapp</a>
                                </li>
                                {{-- <li class="nav-item"><a class="nav-link text-white"
                                        href="#!">Log In</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header bg-gray-600 align-items-start min-vh-100">

            <div class="container my-auto mt-8">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom bg-gray-300">

                                    <h4 class="font-weight-bolder text-center mt-4">Iniciar sesión</h4>
                                    <p class= "text-center">Ingrese el identificador de su empresa</p>

                            <div class="card-body">
                                <form method="POST" action="{{ route('go-login')}}">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label"></label>
                                        <input type="text" name="empresa" class="form-control border-secondary"
                                            placeholder="Identificador de empresa" :value="old('empresa')">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Ir a Empresa</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        ¿No tienes una cuenta?
                                        <a href="{{ route('register') }}" class="text-info font-weight-bold">Únete</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <!--   Core JS Files   -->
</x-login-layout>
