@section('title', 'Planes')
<x-app-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('planes.index') }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Vista Previa de Plan</h5>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card bg-gradient-light shadow-lg">
                            <span class="badge rounded-pill w-30 mt-n2 mx-auto"
                                style="background-color: #0AD149">{{ $plan->nombre }}</span>
                            <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                <h1 class="font-weight-bold mt-2 text-dark"
                                    style="font-family: Arial, Helvetica, sans-serif">
                                    <small class="text-lg mb-auto">$</small>{{ $plan->detalle->precio }}<small
                                        class="text-lg">/mo</small>
                                </h1>
                            </div>
                            <div class="card-body text-lg-start text-center pt-0">
                                <a href="#"
                                    class="btn btn-icon bg-info d-lg-block mt-3 mb-4 text-white">
                                    Try {{ $plan->nombre }}
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>

                                <div class="p-2 text-center">
                                    <span class="text-dark"><b class="text-center">{{ $plan->tipo_plan }}</b></span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">{{ $plan->detalle->miembros }} team members</span>
                                </div>

                                <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                    <i class="material-icons my-auto text-dark">done</i>
                                    <span class="ps-3 text-dark">{{ $plan->detalle->storage }}GB Cloud storage
                                    </span>
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
    </div>
</x-app-layout>
