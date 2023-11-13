<?php
$title_page = "Equipo";
$page = 2;

include "../../layouts/header.php";

if (isset($_POST['add'])) {
    $a = $_POST['firstname'];
    $b = $_POST['lastname'];
    $c = $_POST['dni'];
    $d = $_POST['phone'];
    $e = $_POST['grade'];
    $f = $_POST['sex'];
    $g = $_POST['address'];
    if ($_FILES['photo']['name'] != "") {
        $imagen = "../../../src/img/uploads/" . $_FILES['photo']['name'];
        $h = "src/img/uploads/" . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $imagen);
        $stmt = $base->prepare('CALL sp_insertar_persona(?,?,?,?,?,?,?,?)');
        $persons = $stmt->execute(array($a, $b, $c, $d, $e, $f, $g, $h));
        if ($persons) {
            echo '<script type="text/javascript">window.location="' . $url . 'app/view/persons";</script>';
        }
    }
}
if (isset($_POST['edit'])) {
    $a = $_POST['firstname'];
    $b = $_POST['lastname'];
    $c = $_POST['dni'];
    $d = $_POST['phone'];
    $e = $_POST['grade'];
    $f = $_POST['sex'];
    $g = $_POST['address'];
    $h = $_POST['photo_origin'];

    if ($_FILES['photo']['name'] != "") {
        $imagen = "../../../src/img/uploads/" . $_FILES['photo']['name'];
        $h = "src/img/uploads/" . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $imagen);
        $stmt = $base->prepare('CALL sp_insertar_persona(?,?,?,?,?,?,?,?)');
        $persons = $stmt->execute(array($a, $b, $c, $d, $e, $f, $g, $h));
        if ($persons) {
            echo '<script type="text/javascript">window.location="' . $url . 'app/view/persons";</script>';
        }
    } else {
        $stmt = $base->prepare('CALL sp_insertar_persona(?,?,?,?,?,?,?,?)');
        $persons = $stmt->execute(array($a, $b, $c, $d, $e, $f, $g, $h));
        if ($persons) {
            echo '<script type="text/javascript">window.location="' . $url . 'app/view/persons";</script>';
        }
    }
}



$stmt = $base->prepare('CALL listPersons()');
$persons = $stmt->execute();
$persons = $stmt->fetchAll(PDO::FETCH_OBJ);

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
                        <li class="breadcrumb-item"><a href="<?= $url ?>public/view/admin/">Inicio</a></li>
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
                                <th class="text-center">Foto</th>
                                <th>DNI</th>
                                <th>Nombres y apellidos</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1;
                            foreach ($persons as $i) : ?>
                                <tr>
                                    <td class="text-center"><?= $count ?></td>
                                    <td class="text-center img-table"><img src="<?= $url . $i->photo_persons ?>" style="width:40px; height:40px; border-radius:50px"></td>
                                    <td><?= $i->dni_persons ?></td>
                                    <td><?= $i->firstname_persons . ' ' . $i->lastname_persons ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-id" data-bs-toggle="modal" data-bs-target="#ModalEdit" id="<?= $i->idpersons  ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <a href="update?idHide=<?= $i->idpersons ?>" class="btn text-white bg-warning"><i class="fa-solid fa-eye"></i></a>
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
                                <div class="col-6 form-group">
                                    <label>Nombres</label>
                                    <input type="text" name="firstname" class="form-control" placeholder="" required title="Campo requerido">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Apellidos</label>
                                    <input type="text" name="lastname" class="form-control" placeholder="" required title="Campo requerido">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>N° Documento de Identidad</label>
                                    <input type="text" name="dni" class="form-control" placeholder="" required title="Campo requerido">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Celular</label>
                                    <input type="text" name="phone" class="form-control" placeholder="" required title="Campo requerido">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>Dirección</label>
                                    <input type="text" name="address" class="form-control" placeholder="" required title="Campo requerido">
                                </div>
                                <div class="col-6 form-group">
                                    <div class="mb-3">
                                        <label for="formFile2" class="form-label">Foto</label>
                                        <input class="form-control" accept="image/*" name="photo" type="file" id="formFile2" required title="Campo requerido, debe contener un foto de buena calidad">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>Sexo</label>
                                    <select class="select2" name="sex" style="width: 100%;" required title="Campo requerido">
                                        <option value="femenino">Femenino</option>
                                        <option value="masculino">Maculino</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <label>Grado</label>
                                    <select class="select2" name="grade" style="width: 100%;" required title="Campo requerido">
                                        <option value="estudiante">Estudiante</option>
                                        <option value="bachiller">Bachiller</option>
                                        <option value="licenciado">Licenciado</option>
                                        <option value="ingeniero">Ingeniero</option>
                                        <option value="doctor">Doctor</option>
                                    </select>
                                </div>
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
<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="ModalEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
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