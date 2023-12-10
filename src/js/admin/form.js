
$(document).ready(function () {
    var id = 0;
    $('.btn-id').on('click', function () {
        id = $(this).attr('id');
        //Petición ajax al servidor{
        $.ajax({
            type: "GET",
            url: "form?id=" + id,
            success: function (data) {
                $('.modal .body-wrapper').html(data);
            }
        });

    });

    $('.btn-delete').click(function () {
        id = $(this).attr('id');
        console.log(id);
        $.confirm({
            title: '¡Advertencia!',
            content: '<i class="fa-solid fa-circle-exclamation"></i><br>¿Seguro que desea eliminar este registro?',
            buttons: {
                confirmar: function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update?idHide=' + id,
                        success: function (data) {
                            location.reload();
                        }
                    });
                },
                cancelar: function () {
                    // Close alert
                    $('.alert').fadeOut();
                }
            }
        });
    });



});

