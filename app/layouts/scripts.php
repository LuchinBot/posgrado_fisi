    </div>
    <div class="loader-page"></div>

    <?php if ($page == 1) { ?>
        <!--Others-->
        <script src="<?= $url ?>src/plugins/popper/popper.min.js"></script>
        <script src="<?= $url ?>src/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?= $url ?>src/plugins/jquery/jquery.min.js"></script>
        <script src="<?= $url ?>src/js/public/lib/wow/wow.min.js"></script>
        <script src="<?= $url ?>src/js/public/lib/easing/easing.min.js"></script>
        <script src="<?= $url ?>src/js/public/lib/waypoints/waypoints.min.js"></script>
        <script src="<?= $url ?>src/js/public/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= $url ?>src/plugins/jquery-validate/jquery.validate.min.js"></script>



        <!--Page-->
        <script src="<?= $url ?>src/js/public/main.js"></script>
        <script src="<?= $url ?>src/js/public/counterup.js"></script>

        <script>
            $(document).ready(function() {
                $("#validateForm").validate({});
            });

            function soloNumeros(event) {
                var charCode = event.charCode;

                // Verificar si el código de carácter corresponde a un número (0-9)
                if (charCode < 48 || charCode > 57) {
                    // No es un número, evitar que se escriba en el input
                    return false;
                }

                // Es un número, permitir la entrada
                return true;
            }
            $(window).on('load', function() {
                setTimeout(function() {
                    $(".loader-page").css({
                        visibility: "hidden",
                        opacity: "0"
                    })
                }, 2000);

            });
        </script>

    <?php }
    if ($page == 2) { ?>

        <!--Others-->
        <script src="<?= $url ?>src/plugins/popper/popper.min.js"></script>
        <script src="<?= $url ?>src/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?= $url ?>src/plugins/jquery/jquery.min.js"></script>
        <script src="<?= $url ?>src/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?= $url ?>src/plugins/adminlte/adminlte.js"></script>
        <script src="<?= $url ?>src/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="<?= $url ?>src/plugins/select2/select2.min.js"></script>
        <script src="<?= $url ?>src/plugins/datatables/jquery.dataTables.js"></script>
        <script src="<?= $url ?>src/plugins/jquery-validate/jquery.validate.min.js"></script>

        <!--Page-->
        <script src="<?= $url ?>src/js/admin/code.js"></script>
        <script src="<?= $url ?>src/js/admin/form.js"></script>



        <script>
            $(document).ready(function() {
                $('.select2').select2();
                $('#myTable').DataTable({
                    responsive: true,
                    language: {
                        "decimal": "",
                        "emptyTable": "No hay información",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "Mostrar _MENU_ Entradas",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscar:",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }
                    }
                });

                //Summernote
                $('#summernote').summernote({
                    placeholder: 'Escribe aquí la descripción de la noticia...',
                    height: 400,
                    toolbar: [
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol']],
                        ['insert', ['link']],
                        ['view', ['fullscreen', 'codeview']]
                    ]
                });

                $("#validateForm").validate({});
            });

            $(window).on('load', function() {
                setTimeout(function() {
                    $(".loader-page").css({
                        visibility: "hidden",
                        opacity: "0"
                    })
                }, 2000);

            });
        </script>
    <?php } ?>
    </body>

    </html>