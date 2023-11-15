<?php
require('../../layouts/database/connection.php');


if (isset($_GET['id'])) {

    //Listado
    $stmt = $base->prepare('SELECT * from courses where idcourses = ?');
    $data = $stmt->execute(array($_GET['id']));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    //categories
    $stmt = $base->prepare('SELECT * from categories where state_categories = 1');
    $categories = $stmt->execute();
    $categories = $stmt->fetchAll(PDO::FETCH_OBJ);


?>
    <form class="" method="post">
        <div class="modal-body">
            <input class="form-control" name="idcourses" type="text" value="<?= $data['idcourses'] ?>" hidden>
            <div class="form-group">
                <label>Categoria</label>
                <select class="select2" name="idcategories" style="width: 100%;" required title="Campo requerido">
                    <?php foreach ($categories as $i) :
                        if ($i->idcategories == $data['idcategories']) { ?>
                            <option selected value="<?= $i->idcategories ?>"><?= $i->name_categories ?></option>
                        <?php } else { ?>
                            <option value="<?= $i->idcategories ?>"><?= $i->name_categories ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>

            <div class="row">
                <div class="col-6 form-group">
                    <label>Nombre del curso</label>
                    <input type="text" name="name" class="form-control" value="<?= $data['name_courses'] ?>" required title="Campo requerido">
                </div>
                <div class="col-6 form-group">
                    <label>Descripcion del curso</label>
                    <input type="text" name="text" class="form-control" value="<?= $data['text_courses'] ?>" required title="Campo requerido">
                </div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label>Fecha de inicio</label>
                    <input type="date" name="date" class="form-control" value="<?= $data['date_courses'] ?>" required title="Campo requerido">
                </div>
                <div class="col-4 form-group">
                    <label>Créditos</label>
                    <input type="number" name="credits" class="form-control" value="<?= $data['credits_courses'] ?>" required title="Campo requerido">
                </div>
                <div class="col-4 form-group">
                    <label>Precio</label>
                    <input type="number" name="price" class="form-control" value="<?= $data['price_courses'] ?>" required title="Campo requerido">
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