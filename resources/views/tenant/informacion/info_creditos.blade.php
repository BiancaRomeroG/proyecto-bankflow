<x-app-tenant-layout>
    <div class="container-fluid px-2 px-md-4">
        <br
        <p>
            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#recomendaciones"
                aria-expanded="true" aria-controls="consumos">
                Recomendaciones
            </button>
            <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#comercial"
            aria-expanded="true" aria-controls="comercial">
                Comercial
            </button>
            <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#hipotecarios"
            aria-expanded="true" aria-controls="hipotecarios">
                Hipotecario
            </button>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#consumos"
            aria-expanded="true" aria-controls="consumos">
                Consumo
            </button>
        </p>

        <div class="collapse" id="consumos">
            <div class="card card-body">
                <div class="accordion-1">
                    <div class="container">
                        <div class="row my-5">
                            <div class="col-md-6 mx-auto text-center">
                                <h2>Requisitos para creditos de Consumo</h2>
                                <p>Recuerda: Los papeles que se presentan en oficina deben de estar en buen estado</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="accordion" id="accordionRental">
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button border-bottom font-weight-bold collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Documentos de informacion personal
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Fotocopia de cedula de identidad personal
                                                <br>
                                                + Fotocopia de certificado de Nacimiento
                                                <br>
                                                + Fotocopia de cedula de identidad de persona de respaldo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button border-bottom font-weight-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Documentos de propiedad
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Titulo de propiedad
                                                <br>
                                                + Fotocopia de adquisicion de propiedad
                                                <br>
                                                + Prueba de ocupacion
                                                <br>
                                                + Formulario de valuación de propiedad
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingThree">
                                            <button class="accordion-button border-bottom font-weight-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Documentos de ubicación
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Recibo de luz
                                                <br>
                                                + Recibo de agua
                                                <br>
                                                + Croquis de ubicacion
                                                <br>
                                                + Recibo de luz o agua de persona de respaldo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="hipotecarios">
            <div class="card card-body">
                <div class="accordion-1">
                    <div class="container">
                        <div class="row my-5">
                            <div class="col-md-6 mx-auto text-center">
                                <h2>Requisitos para creditos hipotecarios</h2>
                                <p>Recuerda: Los papeles que se presentan en oficina deben de estar en buen estado</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="accordion" id="accordionRental">
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button border-bottom font-weight-bold collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Documentos de informacion personal
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Fotocopia de cedula de identidad personal
                                                <br>
                                                + Fotocopia de certificado de Nacimiento
                                                <br>
                                                + Fotocopia de cedula de identidad de persona de respaldo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button border-bottom font-weight-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Documentos de propiedad
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Titulo de propiedad
                                                <br>
                                                + Fotocopia de adquisicion de propiedad
                                                <br>
                                                + Prueba de ocupacion
                                                <br>
                                                + Formulario de valuación de propiedad
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingThree">
                                            <button class="accordion-button border-bottom font-weight-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Documentos de ubicación
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Recibo de luz
                                                <br>
                                                + Recibo de agua
                                                <br>
                                                + Croquis de ubicacion
                                                <br>
                                                + Recibo de luz o agua de persona de respaldo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="comercial">
            <div class="card card-body">
                <div class="accordion-1">
                    <div class="container">
                        <div class="row my-5">
                            <div class="col-md-6 mx-auto text-center">
                                <h2>Requisitos para creditos Comerciales</h2>
                                <p>Recuerda: Los papeles que se presentan en oficina deben de estar en buen estado</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="accordion" id="accordionRental">
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button border-bottom font-weight-bold collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Documentos de informacion personal
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Fotocopia de cedula de identidad personal
                                                <br>
                                                + Fotocopia de certificado de Nacimiento
                                                <br>
                                                + Fotocopia de cedula de identidad de persona de respaldo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button border-bottom font-weight-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Documentos de empresa
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Titulo de propiedad
                                                <br>
                                                + Recibo de luz o agua
                                                <br>
                                                + Comprobante de ingresos
                                                <br>
                                                + Estado financiero de la empresa o referentes
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingThree">
                                            <button class="accordion-button border-bottom font-weight-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Documentos de ubicación
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Recibo de luz
                                                <br>
                                                + Recibo de agua
                                                <br>
                                                + Croquis de ubicacion
                                                <br>
                                                + Recibo de luz o agua de persona de respaldo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="recomendaciones">
            <div class="card card-body">
                <div class="accordion-1">
                    <div class="container">
                        <div class="row my-5">
                            <div class="col-md-6 mx-auto text-center">
                                <h2>Recordatorio</h2>
                                <p>Para todos los papeles a presentar de manera fisica, deben dumplir con las siguientes caracteristicas</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="accordion" id="accordionRental">
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button border-bottom font-weight-bold collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Documentos impresos
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Tanaño carta.
                                                <br>
                                                + Sin perferaciones ni cualquier notoriedad.
                                                <br>
                                                + Sin dobles ni mancha alguna, preferentemente.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button border-bottom font-weight-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Documentos digitales
                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                            <div class="accordion-body text-sm opacity-8">
                                                + Firma electronica autorizada
                                                <br>
                                                + Documento con autorizacion de manejo
                                                <br>
                                                + Tamaño Carta
                                                <br>
                                                + Formato de presentacion autorizado
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-tenant-layout>
