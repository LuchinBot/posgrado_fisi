<?php
$title_page = "Egresados";
$page = 2;

include "../../layouts/header.php";

if (isset($_POST['add'])) {
    $a = $_POST['idpersons'];
    $b = $_POST['promocion_egresados'];

    $stmt = $base->prepare('INSERT INTO Egresados(idpersons,promocion_egresados) VALUES (?,?)');
    $egresados = $stmt->execute(array($a, $b));
    if ($egresados) {
        echo '<script type="text/javascript">window.location="' . $url . 'app/view/egresados";</script>';
    }
}
if (isset($_POST['edit'])) {
    $id = $_POST['idegresados'];
    $a = $_POST['idpersons'];
    $b = $_POST['promocion_egresados'];

    $stmt = $base->prepare('UPDATE egresados SET idpersons=?,promocion_egresados=? WHERE idegresados=?');
    $egresados = $stmt->execute(array($a, $b, $id));
    if ($egresados) {
        echo '<script type="text/javascript">window.location="' . $url . 'app/view/egresados";</script>';
    }
}

$stmt = $base->prepare('SELECT * FROM egresados as e inner join persons as p on e.idpersons = p.idpersons');	
$egresados = $stmt->execute();
$egresados = $stmt->fetchAll(PDO::FETCH_OBJ);

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
                                <th>Nombres y apellidos</th>
                                <th>Promoción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1;
                            foreach ($egresados as $i) : ?>
                                <tr>
                                    <td class="text-center"><?= $count ?></td>
                                    <td><?= $i->firstname_persons . ' ' . $i->lastname_persons ?></td>
                                    <td><?= $i->promocion_egresados ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-id" data-bs-toggle="modal" data-bs-target="#ModalEdit" id="<?= $i->idegresados  ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <a href="update?idHide=<?= $i->idegresados ?>" class="btn text-white bg-danger"><i class="fa-solid fa-trash"></i></a>
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
                                    <label>Persona</label>
                                    <select class="select2" name="idpersons" style="width: 100%;" required title="Campo requerido">
                                        <?php foreach ($persons as $i) : ?>
                                            <option value="<?= $i->idpersons ?>"><?= $i->firstname_persons . ' ' . $i->lastname_persons ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                <label>Promoción</label>
                                <input type="text" name="promocion_egresados" class="form-control" placeholder="2023-II" required title="Campo requerido">
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
<div class="modal fade" id="ModalEdit" aria-labelledby="ModalEdit" aria-hidden="true">
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