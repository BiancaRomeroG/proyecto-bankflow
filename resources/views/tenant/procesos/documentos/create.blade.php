@section('title', 'Documentos')
<x-app-tenant-layout>
    <section>
        <div class="card mb-4">
            <div class="card-header mb-0 pt-3 pb-2">
                <a href="{{ route('creditos.documentos.index', [tenant('id'), $id]) }}">
                    <button class="btn btn-dark btn-sm mt-2" type="button" style="display: inline-block"><i
                            class="fas fa-arrow-left"></i> Atrás</button>
                </a>
                <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Agregando Documento</h5>
            </div>
            <hr class="m-0">
            <div class="card-body mt-0 pt-0">
                <form method="POST" action="{{ route('creditos.documentos.store', [tenant('id'), $id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <input name="id_carpeta" class="form-control" type="hidden" value="{{$id}}" />
                        <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Formato: </label>
                                <input name="formato" class="form-control" type="text" placeholder="JPG, PNG, PDF" required/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <div class="input-group input-group-static my-2">
                                <label>Descripción: </label>
                                <input name="descripcion" class="form-control" type="text" required/>
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-8 mt-sm-0 mb-3">
                            <label>Documento - Archivo: </label>
                            <div class="input-group mb-3b border border-gray-400 rounded-3">
                                <input name='archivo_ruta' type="file" class="form-control" id="inputGroupFile02" required>
                            </div>
                        </div>
                    </div>
                    <div class="button-row d-flex mt-4 d-md-flex">
                        <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Editar Rol">
                            Agregar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-tenant-layout>
