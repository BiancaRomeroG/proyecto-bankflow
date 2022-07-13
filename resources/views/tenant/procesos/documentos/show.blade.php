<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-3">
        <div class="card mb-5">
            <div class="card-header p-4 pb-2">
                <div class="row justify-content-between">
                    <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <h4 class="text-dark" class="card-title">Documentos de la carpeta N° {{ $carpeta->id }}</h4>
                        <p class="mb-0">{{ __('Informacion digital del cliente') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    @if ($documento->formato == "GIT" || $documento->formato == "PNG" || $documento->formato == "JPG")
                        <img src="{{ $documento->archivo_ruta }}" alt="Imagen" class="mx-auto d-block m-4">
                    @else
                        @if ($documento->formato == "PDF")
                            <embed src="{{ $documento->archivo_ruta }}" type="application/pdf" width="100%" height="600px" />
                        @else
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEXs7OzMzMzJycnr6+vX19fT09Pn5+fh4eHNzc3l5eXv7+/c3NzR0dHg4ODa2trV1dXCnPXPAAAFDUlEQVR4nO2c2babMAxF8YAH2cD//20lm/HmpoG+gNOz12pJgLTekSeBSdcBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACPgS5zd4kvkrK+hupjU469VpfRqSHF9A+CrOjuLvdpKHB5++kSmT9i7y74ebi009WORr6UZqqpkXhcLC0Mn8Xe0Kfkz3ymUUOKintVHeLnzzRq6OdRQ39WbNRwHerCx8+0aTisA7/+2BbbNBy3+Ur6eY770dl+naFT+qjYpuH7Wupk30GxTUOzxfB4gqvae8U2Dd+NFm6J7E6xUUPyZcRXvwseFBs1ZIZxHI5HN8G9YruGL+wFd4rfY3gU3BS/xvCn4KrYtiGtLfFVcFFs2pCSzvXVb4Ki2LVtSHLlrSj+LliHy4YNqV5azO8FGzek5dppfivYtiFtF4ffXyVu2ZBOXf1u2PCcYMOGJwUbNhxO3qBp19CeE4ThA4HhFxmevYnvWzU07iSmVcMrwPBhcGmzufYRyTymZgxJFlZcXDEk05+X2zfPJf7Tehp1Mex3QmdnpPtBMbSzYEgwyV5k+PyPAgAAAOABmPlPt27NOg/jHJDKDiP75v2me9mQie6x82+nZfFFzZpGLVMUmnIt7ahD1jztLPNV7cjqoqPLQerLWhQj70zWOagTSxlvoRjW0nYqyxIhE7LMNVnUEHX8Mqr6YIUNJRWcDadQLgjIOz3y8XhiKeMtFEPbS/D8NMkm2SQ3P6NeTmHDsrVeyTewxLAoiWHK9V5AfmZFLYaT59JxmXu5uBRiCYxd8/01hkOxXg29KobU1wzR6F//g9uptZS4iRlFUktjINlSCeswDG7OG4kNaeKEfjH01FsSwzAvf9PPzBRnQztSGosZ19hh6qlGxlo1cAy70pdKqqQjrYYcNSeGuaZQ5tmGTpFyJYZ6tHbUhsZy/UVCubbDQbrdnWE3BI4oTWM5Hp9dSylwR8GGNEh/KYV2WoY4CdDekCZb+91iSHlUixofuc/ib8yG3aC96MyNiismJZ2ci0EMo/fekJV6a/QuhvyODckG7+L0eVX4PZiefca67WwsGwmI6yhOOfej61wvuK4+guHrGd1Yhr9hkrN9H/JzL7nRcXtc5FyfoDw+Svljpff+RAAA+H/Z94O09Y7zDvNuLtZK95mU1sGKheRMLmvNKZJRWoWyftQH3iGPa7v6eAmP+pR5JAx8hszxloQiyF2rZw6JiZMkZ+WBbHmlByLnuNy8M5eZTuQdkus6VSbWYijTHslFPCeIi6Fy3dtg30yqC704P0wlFyqUrWML7ct1Gv4CXLYyFV9iKLqSfuwMn0qq82WeZpcY1t8PmA3LpLUrKhxIknq6GXIz1G4zNI+d1lRDUpFKO1RBkr1aSyduhXNWYSW94hyCFkOV+xwibYaZeWYcZ0NdDXlinaVJcbcReDp+NJQMf41hdDGpXQw5u4jPbIjVS/Lzub5ykl/ao7httZSjS+I17tth6qmJdig9jS09Td0Tw1puDk3taUw19OpomJswnIyJvSw3YFfneRDI42YY9WA4A05dNaRJL6OFMzxaDNLNltVRKhrjHlpLg5qzVzHkAT8kWTy0HI6yZ5ARv1wNNdwR1RGf6Xm/CfJ7Ib7L4bnrTo7Z7ZLzvh7e/qZulxTPL1r8vSEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAN/GHxB0NNJvauSKAAAAAElFTkSuQmCC" alt="Imagen" class="mx-auto d-block m-4">
                        @endif
                    @endif
                    
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="card-body">
                        <div class="row justify-align-between">
                            <div class="col-12 col-sm-8 col-lg-8">
                                <h5 class="card-title text-info">Información general</h5>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4">
                                @can('Descargar documentos digitales')
                                    <a type="button" title="Descargar documento" class="btn btn-danger btn-sm"
                                        href="{{ route('documentos.descargar', [tenant('id'), $documento->id]) }}">
                                        <span class="material-icons">sim_card_download</span>
                                    </a>
                                @endcan
                            </div>
                        </div>

                        <p class="card-text ms-3"><strong>Formato del documento:</strong>
                            {{ $documento->formato }}</p>
                        <p class="card-text ms-3"><strong>Descripcion:</strong>
                            {{ $documento->descripcion }}
                        </p>
                        <p class="card-text ms-3"><strong>Fecha de creacion:</strong>
                            {{ $documento->created_at }}
                        </p>
                        <p class="card-text"><small
                                class="text-muted">{{ __('Ultima actualización ') . $documento->updated_at }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
