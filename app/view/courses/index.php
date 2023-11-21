<?php
$title_page = "Cursos";
$page = 2;

include "../../layouts/header.php";

if (isset($_POST['add'])) {
    $a = $_POST['idcategories'];
    $x = $_POST['idtypes'];
    $b = $_POST['name'];
    $c = $_POST['text'];
    $d = $_POST['presentation'];
    $e = $_POST['objetives'];
    $g = $_POST['date'];
    $h = $_POST['credits'];
    $i = $_POST['price'];

    $imagen = "../../../src/pdf/uploads/" . $_FILES['pdf']['name'];
    $f = "src/pdf/uploads/" . $_FILES['pdf']['name'];
    move_uploaded_file($_FILES['pdf']['tmp_name'], $imagen);

    $stmt = $base->prepare('CALL addcourses(?,?,?,?,?,?,?,?,?,?)');
    $courses = $stmt->execute(array($a,$x, $b, $c, $d, $e, $f, $g, $h, $i));
    if ($courses) {
        echo '<script type="text/javascript">window.location="' . $url . 'app/view/courses";</script>';
    }
}
if (isset($_POST['edit'])) {
    $id = $_POST['idcourses'];
    $a = $_POST['idcategories'];
    $x = $_POST['idtypes'];
    $b = $_POST['name'];
    $c = $_POST['text'];
    $d = $_POST['presentation'];
    $e = $_POST['objetives'];
    $g = $_POST['date'];
    $h = $_POST['credits'];
    $i = $_POST['price'];

    if ($_FILES['pdf']['name'] != "") {
        $imagen = "../../../src/pdf/uploads/" . $_FILES['pdf']['name'];
        $f = "src/pdf/uploads/" . $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'], $imagen);

        $stmt = $base->prepare('CALL editCourses(?,?,?,?,?,?,?,?,?,?,?)');
        $courses = $stmt->execute(array($id, $a, $x, $b, $c, $d, $e, $f, $g, $h, $i));
    } else {
        $stmt = $base->prepare('UPDATE `courses` SET idcategories=?, idtypes=?, name_courses=?, text_courses=?, presentation_courses=?, objetives_courses=?,
        date_courses=?, credits_courses=?, price_courses=? WHERE idcourses=?;');
        $courses = $stmt->execute(array($a, $x, $b, $c, $d, $e, $g, $h, $i, $id));
    }

    if ($courses) {
        echo '<script type="text/javascript">window.location="' . $url . 'app/view/courses";</script>';
    }
}

$stmt = $base->prepare('CALL listcourses()');
$courses = $stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_OBJ);

$stmt = $base->prepare('CALL listCategories()');
$categories = $stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_OBJ);


$stmt = $base->prepare('SELECT * from types where state_types = 1');
$types = $stmt->execute();
$types = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark" style="font-weight: 600;"><?= $title_page ?></h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $url ?>app/view/">Inicio</a></li>
                        <li class="breadcrumb-item active"><?= $title_page ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content me-2">
        <div class="container-fluid m-2 p-0 pb-2 bg-white">
            <p class="text-secondary bg-dark border-bottom px-4 py-2">
                <i class="fa fa-info-circle text-warning"></i>
                Todos los cambios están bajo su responsabilidad
            </p>
            <div class="d-flex justify-content-center">
                <p>
                    <button class="btn bg-dark m-0" type="button" id="btn_collapseTable" disabled>
                        <i class="fa-solid fa-list me-2"></i>Listado de <?= $title_page ?>
                    </button>
                    <button class="btn bg-dark m-0 " type="button" id="btn_collapseNew">
                        <i class="fa-regular fa-square-plus me-2"></i>Agregar <?= $title_page ?>
                    </button>
                </p>
            </div>
            <div class="row p-4">
                <div class="collapse show" id="collapseTable">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nombre del curso</th>
                                <th>Categoría</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1;
                            foreach ($courses as $i) : ?>
                                <tr>
                                    <td class="text-center"><?= $count ?></td>
                                    <td><?= $i->name_courses ?></td>
                                    <td><?= $i->name_categories ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-id" data-bs-toggle="modal" data-bs-target="#ModalEdit" id="<?= $i->idcourses  ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <a href="update?idHide=<?= $i->idcourses ?>" class="btn text-white bg-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php $count++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="collapse" id="collapseNew">
                    <form method="post" id="validateForm" enctype="multipart/form-data">
                        <fieldset>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Categoria</label>
                                    <select class="select2" name="idcategories" style="width: 100%;" required title="Campo requerido">
                                        <?php foreach ($categories as $i) : ?>
                                            <option value="<?= $i->idcategories ?>"><?= $i->name_categories ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Tipo</label>
                                    <select class="select2" name="idtypes" style="width: 100%;" required title="Campo requerido">
                                        <?php foreach ($types as $i) : ?>
                                            <option value="<?= $i->idtypes ?>"><?= $i->name_types ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>Nombre del curso</label>
                                    <input type="text" maxlength="255" name="name" class="form-control" required title="Campo requerido">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Descripcion del curso</label>
                                    <input type="text" maxlength="255" name="text" class="form-control" required title="Campo requerido">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 form-group">
                                    <label>Fecha de inicio</label>
                                    <input type="date" name="date" class="form-control" required title="Campo requerido">
                                </div>
                                <div class="col-4 form-group">
                                    <label>Créditos</label>
                                    <input type="number" name="credits" class="form-control" required title="Campo requerido">
                                </div>
                                <div class="col-4 form-group">
                                    <label>Precio</label>
                                    <input type="number" name="price" class="form-control" required title="Campo requerido">
                                </div>
                            </div>
                            <div class=" form-group">
                                <label>Presentación del curso</label>
                                <textarea name="presentation" class="form-control" required title="Campo requerido"></textarea>
                            </div>
                            <div class=" form-group">
                                <label>Presentación del curso</label>
                                <textarea name="objetives" id="summernote" class="form-control" required title="Campo requerido"></textarea>
                            </div>
                            <div class=" form-group">
                                <label>Archivo PDF</label>
                                <input class="form-control" accept="application/pdf" name="pdf" type="file" required title="Campo requerido, debe contener un pdf">
                            </div>
                            <button type="submit" name="add" class="btn btn-success px-3 fw-bolder"><i class="fa-solid fa-rotate me-1"></i> Actualizar <?= $title_page ?></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Modales-->
<div class="modal fade" id="ModalEdit" aria-labelledby="ModalEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar <?= $title_page ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="body-wrapper">

            </div>
        </div>
    </div>
</div>

<?php include "../../layouts/footer.php"; ?>
<?php include "../../layouts/scripts.php"; ?>