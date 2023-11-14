<?php
require('../../layouts/database/connection.php');


if (isset($_GET['id'])) {

    //Listado
    $stmt = $base->prepare('SELECT * from contact where idcontact = ?');
    $data = $stmt->execute(array($_GET['id']));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <form class="" method="post">
        <div class="modal-body">
            <input class="form-control" name="idcontact" type="text" value="<?= $data['idcontact'] ?>" hidden>
            <div class="row">
                <div class="col-6 form-group">
                    <label>Nombres y apellidos</label>
                    <input type="text" name="fullname_contact" readonly class="form-control" value="<?= $data['fullname_contact'] ?>">
                </div>
                <div class="col-6 form-group">
                    <label>Fecha de envío</label>
                    <input type="text" name="post_contact" readonly class="form-control" value="<?= $data['post_contact'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label>Teléfono</label>
                    <input type="text" name="phone_contact" readonly class="form-control" value="<?= $data['phone_contact'] ?>">
                </div>
                <div class="col-6 form-group">
                    <label>Email</label>
                    <input type="text" name="email_contact" readonly class="form-control" value="<?= $data['email_contact'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label>Nombres y apellidos</label>
                <textarea name="message_contact" readonly class="form-control"><?= $data['message_contact'] ?></textarea>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
    </form>

<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();

    });
</script>