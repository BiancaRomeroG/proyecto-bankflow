<x-login-layout>
    <main class="flex-shrink-0">
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
                    <nav class="navbar fixed-top navbar-expand-lg bg-black" style="box-shadow: none">
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
                                    <!--<li class="nav-item"><a class="nav-link active text-white" aria-current="page"
                                        href="#!">Home</a></li>-->
                                    <!--<li class="nav-item"><a class="nav-link text-white" href="#!">About</a></li>-->
                                    <li class="nav-item"><a class="nav-link text-white"
                                            href="https://api.whatsapp.com/send?phone=+59178491807&text=Hola,%20mas%20informacion%20del%20servicio">Contacto</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link text-white"
                                            href="{{ route('log-empresa') }}">Inicia sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
        <header class="bg-transparent">
            <div class="page-header bg-secondary align-items-start min-vh-100" >
                <div class="container px-5 m-auto">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">

                                <h1 class="font-weight-bold text-white m-auto mt-14" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Una salida a tus problemas Bank Flow</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Moderniza los procesos de negocios, y consigue las metas de un verdadero equipo de prestacion de creditos</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-info btn-lg px-4 me-sm-3" href="#features">INFORMACIÓN</a>
                                    <a class="btn btn-outline-white btn-lg px-4" href="#costumer">PRECIOS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img
                                class="img-fluid rounded-3 my-5" src="https://user-images.githubusercontent.com/36086876/171867350-31b56aef-0462-4499-8de9-735740e101b5.gif"
                                alt="..." /></div>
                    </div>
                </div>
                {{-- <span class="mask bg-gradient-dark opacity-6"></span> --}}
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <h2 class="text-center mb-5" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                        <b>Comienza...</b>
                    </h2>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-info text-white rounded-3 mb-3"><i
                                class="bi bi-collection m-2"></i></div>
                        <h2 class="h4 fw-bolder" style="font-family: Arial, Helvetica, sans-serif">Impulse los flujos de trabajo sin esfuerzo</h2>
                        <p>Las automatizaciones sin código le permiten poner el flujo de trabajo de su equipo en piloto automático. Las alertas, las actualizaciones automáticas de estado y los flujos de proyectos mantendrán a su equipo en el buen camino y confiado en lo que están trabajando.</p>
                        <!--<a class="text-decoration-none" href="#!">

                            <i class="bi bi-arrow-right"></i>
                        </a>-->
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-info text-white rounded-3 mb-3"><i
                                class="bi bi-building m-2"></i>
                        </div>
                        <h2 class="h4 fw-bolder" style="font-family: Arial, Helvetica, sans-serif">Mantén a todos sincronizados y enfocados</h2>
                        <p>Alinee los objetivos, establezca prioridades y administre los plazos fácilmente. Asegúrese de que su equipo esté siempre en la misma página, incluso con cambios repentinos, en una plataforma tan flexible como usted.</p>
                        <!--<a class="text-decoration-none" href="#!">

                            <i class="bi bi-arrow-right"></i>
                        </a>-->
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-info text-white rounded-3 mb-3"><i
                                class="bi bi-toggles2 m-2"></i>
                        </div>
                        <h2 class="h4 fw-bolder" style="font-family: Arial, Helvetica, sans-serif">Controla todos los elementos en movimiento</h2>
                        <p>Accede fácilmente a todas las actualizaciones de progreso, aprobaciones de presupuesto y más en una sola plataforma y consulta al instante el estado del trabajo.</p>
                        <!--<a class="text-decoration-none" href="#!">

                            <i class="bi bi-arrow-right"></i>
                        </a></a>-->
                    </div>
                </div>
            </div>
        </section>
        <!--precios-->
        <section class="bg-light py-5 border-bottom" id="costumer">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <span class="badge rounded-pill text-info w-10 mt-n2 mx-auto mb-4"
                        style="background-color: #b0d1f5">Precios</span>
                    <h2 class="text-center mb-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                        <b>Accede a nuestros planes de suscripcion flexibles</b>
                    </h2>
                    <p class="text-center mb-5">Precios que se escalan con su negocio de inmediato.</p>
                    <div class="row">
                        <!--Precio barato-->
                        {{-- <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card bg-gradient-light shadow-lg">
                                    <span
                                        class="badge rounded-pill bg-gray-400 text-dark w-30 mt-n2 mx-auto text-center">Starter</span>
                                    <div class="card-header text-center bg-transparent pt-4 pb-3">
                                        <h1 class="font-weight-bold mt-2 text-dark"
                                            style="font-family: Arial, Helvetica, sans-serif">
                                            <small class="text-lg mb-auto">$</small>29<small
                                                class="text-lg">/mo</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <a href="{{ route('registrar.index', 1) }}" class="btn btn-icon bg-info d-lg-block mt-3 mb-4 text-white">
                                            Try Starter
                                            <i class="fas fa-arrow-right ms-1"></i>
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
                        </div> --}}
                        <!--Precio Premium-->
                        @foreach ($planes as $plan)
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card bg-gradient-light shadow-lg">
                                    <span class="badge rounded-pill w-30 mt-n2 mx-auto" style="background-color: #0AD149">{{$plan->nombre}}</span>
                                    <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                        <h1 class="font-weight-bold mt-2 text-dark"
                                            style="font-family: Arial, Helvetica, sans-serif">
                                            <small class="text-lg mb-auto">$</small>{{$plan->detalle->precio}}<small
                                                class="text-lg">/mo</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <a href="{{ route('registrar.index', $plan->id) }}"
                                            class="btn btn-icon bg-info d-lg-block mt-3 mb-4 text-white">
                                            Try {{$plan->nombre}}
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>

                                        <div class="p-2 text-center">
                                            <span class="text-dark"><b class="text-center">{{$plan->tipo_plan}}</b></span>
                                        </div>

                                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                            <i class="material-icons my-auto text-dark">done</i>
                                            <span class="ps-3 text-dark">{{$plan->detalle->miembros}} team members</span>
                                        </div>

                                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                            <i class="material-icons my-auto text-dark">done</i>
                                            <span class="ps-3 text-dark">{{$plan->detalle->storage}}GB Cloud storage </span>
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
                        @endforeach
                        <!--Precio corporativo-->
                        {{-- <div class="col-lg-6 col-xl-4">
                            <div class="card">
                                <div class="card bg-gradient-light shadow-lg">
                                    <span
                                        class="badge rounded-pill bg-gray-400 text-dark w-30 mt-n2 mx-auto">Corporativo</span>
                                    <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                        <h1 class="font-weight-bold mt-2 text-dark"
                                            style="font-family: Arial, Helvetica, sans-serif">
                                            <small class="text-lg mb-auto">$</small>59<small
                                                class="text-lg">/mo</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <a href="{{ route('registrar.index', 3) }}" class="btn btn-icon bg-info d-lg-block mt-3 mb-4 text-white">
                                            Try Corporativo
                                            <i class="fas fa-arrow-right ms-1"></i>
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials section-->
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Dé forma a potentes flujos de trabajo empresariales</h2>
                    <p class="lead mb-0">para equipos de todos los tamaños</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i
                                            class="bi bi-chat-right-quote-fill text-info fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">Cree flujos de trabajo personalizados y automáticos para aumentar la productividad de su equipo con BankFlow</p>
                                        <div class="small text-muted">- Jorge Mendez, SEO en BankFlow</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2-->
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i
                                            class="bi bi-chat-right-quote-fill text-info fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">Comuníquese, asigne la propiedad y haga avanzar los proyectos, sin necesidad de reuniones. El conocimiento contextualizado disponible para todos significa que puede sentirse seguro de que los próximos pasos siempre se cuidan.</p>
                                        <div class="small text-muted">- Clara Torrez, Team Leader en BankFlow</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="py-5 bg-info">
            <div class="container px-5">
                <p class="m-0 text-center text-white">Copyright &copy; BankFlow 2022</p>
            </div>
        </footer>
    </main>
    <!--   Core JS Files   -->
</x-login-layout>
