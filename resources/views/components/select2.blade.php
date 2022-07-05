<div>
    {{-- Select filter --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $(document).ready(function() {
                $('.mi-selector').select2({
                    language: {
                        noResults: function () {
                            return "No hay resultados";
                        }
                    },
                    placeholder: "Seleccione una opción",
                    allowClear: true,
                });
            });
        });

        
    </script>
</div>