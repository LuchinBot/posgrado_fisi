<?php
require('../../layouts/database/connection.php');


if (isset($_GET['id'])) {

    //Listado
    $stmt = $base->prepare('SELECT * from egresados where idegresados = ?');
    $data = $stmt->execute(array($_GET['id']));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    //persons
    $stmt = $base->prepare('SELECT * from persons where state_persons = 1');
    $persons = $stmt->execute();
    $persons = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
    <form class="" method="post">
        <div class="modal-body">
            <input class="form-control" name="idegresados" type="text" value="<?= $data['idegresados'] ?>" hidden>
            <div class="row">
                <div class="col-6 form-group">
                    <label>Persona</label>
                    <select class="select2" name="idpersons" style="width: 100%;" required title="Campo requerido">
                        <?php foreach ($persons as $i) :
                            if ($i->idpersons == $data['idpersons']) { ?>
                                <option selected value="<?= $i->idpersons ?>"><?= $i->firstname_persons . ' ' . $i->lastname_persons ?></option>
                            <?php } else { ?>
                                <option value="<?= $i->idpersons ?>"><?= $i->firstname_persons . ' ' . $i->lastname_persons ?></option>
                        <?php }
                        endforeach; ?>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label>Promoción</label>
                    <input type="text" name="promocion_egresados" class="form-control" placeholder="" required value="<?= $data['promocion_egresados'] ?>" title="Campo requerido">
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