<div>
    {{-- Buscador dinamico de tablas --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#tabla').DataTable({
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
                dom: 't<"container"<"row justify-content-between mt-5"<"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"p><"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"i>>>'
            });

            $('#buscar').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
</div>