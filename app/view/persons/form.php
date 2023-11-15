<?php
require('../../layouts/database/connection.php');


if (isset($_GET['id'])) {

    //Listado
    $stmt = $base->prepare('SELECT * from persons where idpersons = ?');
    $data = $stmt->execute(array($_GET['id']));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);


?>
    <form class="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <input class="form-control" name="idpersons" type="text" value="<?= $data['idpersons'] ?>" hidden>
            <input class="form-control" name="photo_origin" type="text" value="<?= $data['photo_persons'] ?>" hidden>
            <div class="row">
                <div class="col-6 form-group">
                    <label>Nombres</label>
                    <input type="text" name="firstname" class="form-control" value="<?= $data['firstname_persons'] ?>" required title="Campo requerido">
                </div>
                <div class="col-6 form-group">
                    <label>Apellidos</label>
                    <input type="text" name="lastname" class="form-control" value="<?= $data['lastname_persons'] ?>" required title="Campo requerido">
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label>N° Documento de Identidad</label>
                    <input type="text" name="dni" class="form-control" value="<?= $data['dni_persons'] ?>" required title="Campo requerido">
                </div>
                <div class="col-6 form-group">
                    <label>Celular</label>
                    <input type="text" name="phone" class="form-control" value="<?= $data['phone_persons'] ?>" required title="Campo requerido">
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label>Dirección</label>
                    <input type="text" name="address" class="form-control" value="<?= $data['address_persons'] ?>" required title="Campo requerido">
                </div>
                <div class="col-6 form-group">
                    <div class="mb-3">
                        <label for="formFile2" class="form-label">Foto</label>
                        <input class="form-control" accept="image/*" name="photo" type="file" id="formFile2" title="Campo requerido, debe contener un foto de buena calidad">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label>Sexo</label>
                    <select class="select2" name="sex" style="width: 100%;" required title="Campo requerido">
                        <option selected value="<?= $data['sex_persons'] ?>"><?= $data['sex_persons'] ?></option>
                        <option value="femenino">Femenino</option>
                        <option value="masculino">masculino</option>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label>Grado</label>
                    <select class="select2" name="grade" style="width: 100%;" required title="Campo requerido">
                        <option selected value="<?= $data['grade_persons'] ?>"><?= $data['grade_persons'] ?></option>
                        <option value="estudiante">Estudiante</option>
                        <option value="bachiller">Bachiller</option>
                        <option value="licenciado">Licenciado</option>
                        <option value="ingeniero">Ingeniero</option>
                        <option value="doctor">Doctor</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" name="edit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();

    });
</script>