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

     //categories
     $stmt = $base->prepare('SELECT * from types where state_types = 1');
     $types = $stmt->execute();
     $types = $stmt->fetchAll(PDO::FETCH_OBJ);


?>
    <form class="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <input class="form-control" name="idcourses" type="text" value="<?= $data['idcourses'] ?>" hidden>
            <div class="row">
                <div class="form-group col-6">
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
                <div class="form-group col-6">
                    <label>Tipo</label>
                    <select class="select2" name="idtypes" style="width: 100%;" required title="Campo requerido">
                        <?php foreach ($types as $i) :
                            if ($i->idtypes == $data['idtypes']) { ?>
                                <option selected value="<?= $i->idtypes ?>"><?= $i->name_types ?></option>
                            <?php } else { ?>
                                <option value="<?= $i->idtypes ?>"><?= $i->name_types ?></option>
                        <?php }
                        endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-6 form-group">
                    <label>Nombre del curso</label>
                    <input type="text" name="name" maxlength="255" class="form-control" value="<?= $data['name_courses'] ?>" required title="Campo requerido">
                </div>
                <div class="col-6 form-group">
                    <label>Descripcion del curso</label>
                    <input type="text" name="text" maxlength="255" class="form-control" value="<?= $data['text_courses'] ?>" required title="Campo requerido">
                </div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label>Fecha de inicio</label>
                    <input type="date" name="date" class="form-control" value="<?= $data['date_courses'] ?>" required title="Campo requerido">
                </div>
                <div class="col-4 form-group">
                    <label>Créditos</label>
                    <input type="number" name="credits" class="form-control" value="<?= $data['credits_courses'] ?>" required min="1" title="Campo requerido">
                </div>
                <div class="col-4 form-group">
                    <label>Precio</label>
                    <input type="number" name="price" class="form-control" value="<?= $data['price_courses'] ?>" required min="1" title="Campo requerido">
                </div>
            </div>
            <div class=" form-group">
                <label>Presentación del curso</label>
                <textarea name="presentation" class="form-control" required title="Campo requerido"><?= $data['presentation_courses'] ?></textarea>
            </div>
            <div class=" form-group">
                <label>Objetivos del curso</label>
                <textarea name="objetives" id="summernote2" class="form-control" required title="Campo requerido"><?= $data['objetives_courses'] ?></textarea>
            </div>
            <div class=" form-group">
                <label>Archivo PDF</label>
                <input class="form-control" accept="application/pdf" name="pdf" type="file" title="Campo requerido, debe contener un pdf">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" name="edit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

<?php } ?>
<script src="<?= $url ?>src/plugins/select2/select2.min.js"></script>
<script src="<?= $url ?>src/plugins/summernote/summernote-bs4.min.js"></script>


<script>
    $(document).ready(function() {
        $('.select2').select2();
        $('#summernote2').summernote({
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


    });
</script>
<script src="<?= $url ?>src/plugins/summernote/summernote-bs4.min.js"></script>