@section('title', 'Configuracion')
<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Configuracion general</h4>
                    </div>
                    <div class="d-md-flex justify-content-md-end col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="#" class="btn btn-sm btn-dark">Guardar</a>
                    </div>
                </div>
                <br>
                <!-- Nombre Del Sistema -->
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <select class="form-control border border-gray-400" id="opcion" name="opcion">
                            <option class="text-dark" value="nombre">&nbsp;&nbsp;Nombre Del Sistema</option>

                        </select>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <input type="text" id="texto" name="texto"
                            class="border border-gray-400 form-control bg-gray-100" placeholder="&nbsp;&nbsp;Nombre para el sistema, esto apareccerá en una parte del Home.">
                    </div>
                </div>
                <br>
                <!-- Logo de la Empresa -->
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <select class="form-control border border-gray-400" id="opcion" name="opcion">
                            <option class="text-dark" value="nombre">&nbsp;&nbsp;Logo de la Empresa</option>

                        </select>

                            <br>
                            Should update here:
                            <input  type="file" id="fileInput"/>



                            <script>
                                dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
                                  evt.preventDefault();
                                };

                                dropContainer.ondrop = function(evt) {
                                  // pretty simple -- but not for IE :(
                                  fileInput.files = evt.dataTransfer.files;

                                  // If you want to use some of the dropped files
                                  const dT = new DataTransfer();
                                  dT.items.add(evt.dataTransfer.files[0]);
                                  dT.items.add(evt.dataTransfer.files[3]);
                                  fileInput.files = dT.files;

                                  evt.preventDefault();
                                };
                                </script>

                    </div>

                </div>
                <br>
                {{-- <!-- Denomicaciones -->
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <select class="form-control border border-gray-400" id="opcion" name="opcion">
                            <option class="text-dark" value="nombre">&nbsp;&nbsp;Denomicaciones</option>

                        </select>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <input type="text" id="texto" name="texto"
                            class="border border-gray-400 form-control bg-gray-100" placeholder="&nbsp;&nbsp;Monedas y billetes por denomicación para el arqueo de caja.">
                    </div>
                </div>
                <br>
                <!-- Marcas -->
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <select class="form-control border border-gray-400" id="opcion" name="opcion">
                            <option class="text-dark" value="nombre">&nbsp;&nbsp;Marcas</option>

                        </select>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <input type="text" id="texto" name="texto"
                            class="border border-gray-400 form-control bg-gray-100" placeholder="&nbsp;&nbsp;Texto a buscar">
                    </div>
                </div> --}}

            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-200 shadow-lg">
                    <div class="table-responsive">


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
