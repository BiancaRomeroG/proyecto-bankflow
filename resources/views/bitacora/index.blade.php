@section('title', 'Bitacora')
<x-app-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Bitacora</h4>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-100 shadow-lg">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº
                                    </th>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Fecha</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acción</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Descripcion</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Identificador del Usuario
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($acciones as $accion)
                                <tr>
                                    <td class="align-center text-center">
                                        <div class="d-flex px-2 py-1">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ ++$i }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ $accion->funcionalidad }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ $accion->info_detalle }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <span
                                                    class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{
                                                         $accion->usuario->name.' '.$accion->usuario->ap_paterno.' '.$accion->usuario->ap_materno }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <span
                                                class="text-secondary text-xs font-weight-normal">&nbsp;&nbsp;{{ $accion->created_at }}</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                        <div class="">
                            {{$acciones->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
