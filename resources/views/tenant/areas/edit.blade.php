<x-app-layout>
    <div class="container-fluid px-2 px-md-3 ">
        <div class="card shadow-lg">
            <div class="card-header p-4 pb-2">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4 class="text-dark" class="card-title">Editar Area</h4>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="card bg-gray-100 shadow-lg">
                    <form method="POST" action="{{ route('areas.update', [tenant('id'), $area]) }}">
                        @csrf
                        @method('PUT')
                        <div>
                            
                            <div class="col-6 col-sm-4 mt-sm-0 mb-3">
                                <div class="input-group input-group-static my-2">
                                    <label>Nombre del area</label>
                                    <input name="nombre" class="multisteps-form__input form-control" type="text" 
                                    value="{{ $area->nombre }}"/>
                                </div>
                            </div>
                            <div class="input-group input-group-static my-2">
                                <label>Descripción</label>
                                <textarea class="multisteps-form__input form-control" name = "descripcion" placeholder=""
                                 id="floatingTextarea2" style="height: 80px">{{ $area->descripcion }} </textarea>
                                
                              </div>
                              <div class="button-row d-flex mt-4 d-md-flex justify-content-md-start">
                                <button class="btn bg-gradient-dark mb-0 js-btn-prev" type="submit" title="Prev">
                                    Guardar cambios
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
