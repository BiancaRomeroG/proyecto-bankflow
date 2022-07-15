<div>
    {{-- Buscador dinamico de tablas --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

    {{-- <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/datatables.min.css" />  --}}

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js">
    </script>

    <script>
        $(document).ready(function() {
            var table = $('#tabla').DataTable({
                // dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        text: '<i class="fa fa-clipboard"></i>',
                        titleAttr: 'Copiar al portapapeles',
                        exportOptions: {
                            columns: "th:not(th:contains('Opciones'))"
                        },
                        className: 'btn btn-secondary',
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i>',
                        titleAttr: 'Exportar a Excel',
                        exportOptions: {
                            columns: "th:not(th:contains('Opciones'))"
                        },
                        className: 'btn btn-success'

                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i>',
                        titleAttr: 'Exportar a PDF',
                        exportOptions: {
                            columns: "th:not(th:contains('Opciones'))"
                        },
                        className: 'btn btn-danger',
                        title: 'Reporte de *',
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Imprimir',
                        exportOptions: {
                            columns: "th:not(th:contains('Opciones'))"
                        },
                        className: 'btn btn-info',
                    }
                ],

                paging: true,
                ordering: false,
                info: true,
                responsive: true,
                autoWidth: false,
                pagingType: "full_numbers",
                language: {
                    "zeroRecords": "<div class='alert alert-warning'>No hay resultados</div>",
                    "info": "Mostrando _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay resultados",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "paginate": {
                        "first": null,
                        "last": null,
                        "next": ">>",
                        "previous": "<<"
                    },
                },
                dom: '<B>t<"container"<"row justify-content-between mt-5"<"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"p><"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"i>>>'
            });

            $('#buscar').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
</div>
