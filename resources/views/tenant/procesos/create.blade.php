<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.index', tenant('id')) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Solicitud de Credito
                </h5>
                <hr class="m-0">
                <div class="card-body mt-0 pt-0">
                    <form method="POST" action="{{ route('creditos.store', tenant('id')) }}">
                        @csrf
                        <div class="row mt-3">
                            <input name="id_empresa" class="form-control" type="hidden"
                                value="{{ Auth::user()->id_empresa }}" />
                            <h5 class="font-weight-bolder">Informacion General</h5>



                            <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                <div class="input-group input-group-static my-2">
                                    <label>Cliente: </label>
                                    <select class="mi-selector form-select" name="id_cliente" id="cliente"
                                        onchange="getCi(this)">
                                        <option value=""></option>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}" parametro="{{ $cliente->user->ci }}"
                                                parametro2="{{ $cliente->user->telefono }}"
                                                parametro3="{{ $cliente->user->email }}">
                                                {{ $cliente->user->name }}
                                                {{ $cliente->user->ap_paterno }} {{ $cliente->user->ap_materno }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                <div class="input-group input-group-static my-2">
                                    <label>Carnet de Identidad: </label>
                                    <input name="ci" class="form-control" type="text" id="ci"
                                        value="" />
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                <div class="input-group input-group-static my-2">
                                    <label>Telefono: </label>
                                    <input name="telefono" class="form-control" type="text" id="telefono"
                                        value="" />
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                <div class="input-group input-group-static my-2">
                                    <label>Correo: </label>
                                    <input name="email" class="form-control" type="text" id="email"
                                        value="" />
                                </div>
                            </div>

                            <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                                <div class="input-group input-group-static my-2">
                                    <label>Domicilio: </label>
                                    <input name="domicilio" class="form-control" type="text" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <h5 class="font-weight-bolder">Informacion de Carpeta</h5>
                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <label>Monto Solicitado: </label>
                                        <input name="info_cliente" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <label>Motivo: </label>
                                        <input name="requisito_prestamo" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <label>Interes: </label>
                                        <select class="mi-selector form-select" name="interes" id="interes">
                                            <option value=""></option>
                                            <option value="1">3%</option>
                                            <option value="2">5%</option>
                                            <option value="3">8%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                    <div class="input-group input-group-static my-2">
                                        <label>Duracion: </label>
                                        <input name="interes" class="form-control" type="text" />
                                    </div>
                                </div>

                                <div class="button-row d-flex mt-4 d-md-flex">
                                    <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit"
                                        title="Agregar proceso">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>

                </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function getCi(el) {
            var ci = $('option:selected', el).attr('parametro');
            var telefono = $('option:selected', el).attr('parametro2');
            var email = $('option:selected', el).attr('parametro3');
            console.log(ci);
            console.log(telefono);
            console.log(email);
            $('#ci').val(ci);
            $('#telefono').val(telefono);
            $('#email').val(email);
        }
    </script>
</x-app-tenant-layout>
