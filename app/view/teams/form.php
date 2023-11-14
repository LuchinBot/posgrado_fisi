<?php
require('../../layouts/database/connection.php');


if (isset($_GET['id'])) {

    //Listado
    $stmt = $base->prepare('SELECT * from teams where idteams = ?');
    $data = $stmt->execute(array($_GET['id']));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    //persons
    $stmt = $base->prepare('SELECT * from persons where state_persons = 1');
    $persons = $stmt->execute();
    $persons = $stmt->fetch(PDO::FETCH_ASSOC);
    //jobs
    $stmt = $base->prepare('SELECT * from jobs where state_jobs = 1');
    $jobs = $stmt->execute();
    $jobs = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <form class="" method="post">
        <div class="modal-body">
            <input class="form-control" name="idteams" type="text" value="<?= $data['idteams'] ?>" hidden>
            <div class="row">
                <div class="col-6 form-group">
                    <label>Persona</label>
                    <select class="select2" name="idpersons" style="width: 100%;" required title="Campo requerido">
                        <?php foreach ($persons as $i) :
                            if ($i->idpersons == $data['idpersons']) { ?>
                                <option selected="<?= $i->idpersons ?>"><?= $i->firstname . ' ' . $i->lastname ?></option>
                            <?php } else { ?>
                                <option value="<?= $i->idpersons ?>"><?= $i->firstname . ' ' . $i->lastname ?></option>
                        <?php }
                        endforeach; ?>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label>Perfil</label>
                    <select class="select2" name="idjobs" style="width: 100%;" require title="Campo requerido">
                        <?php foreach ($jobs as $i) :
                            if ($i->idjobs == $data['idjobs']) { ?>
                                <option selected="<?= $i->idjobs ?>"><?= $i->name_jobs ?></option>
                            <?php } else { ?>
                                <option value="<?= $i->idjobs ?>"><?= $i->name_jobs ?></option>
                        <?php }
                        endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Facebook</label>
                <input type="url" name="facebook_teams" class="form-control" placeholder="" required value="<?= $data['facebook_teams'] ?>" title="Campo requerido">
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="url" name="email_teams" class="form-control" placeholder="" required value="<?= $data['email_teams'] ?>" title="Campo requerido">
            </div>
            <div class="form-group">
                <label>linkedin</label>
                <input type="url" name="linkedin_teams" class="form-control" placeholder="" required value="<?= $data['linkedin_teams'] ?>" title="Campo requerido">
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