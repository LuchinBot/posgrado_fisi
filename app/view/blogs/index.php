<?php
$title_page = "Blog";
$page = 2;

include "../../layouts/header.php";

if (isset($_POST['add'])) {
    $a = $_POST['titulo_blog'];
    $b = $_POST['subtitulo_blog'];
    $c = $_POST['descripcion_blog'];
    $d = $_POST['post_blog'];

    if ($_FILES['imagen_blog']['name'] != "") {
        $imagen = "../../../src/img/uploads/" . $_FILES['imagen_blog']['name'];
        $imagenUrl = "src/img/uploads/" . $_FILES['imagen_blog']['name'];
        move_uploaded_file($_FILES['imagen_blog']['tmp_name'], $imagen);

        $stmt = $base->prepare('INSERT INTO blog(titulo_blog,subtitulo_blog,descripcion_blog,imagen_blog,post_blog) values(?,?,?,?,?)');
        $result = $stmt->execute(array($a, $b, $c, $imagenUrl, $d));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '<script type="text/javascript">window.location="' . $url . 'app/view/blogs";</script>';
    }
}
if (isset($_POST['edit'])) {
    $id = $_POST['idblog'];
    $a = $_POST['titulo_blog'];
    $b = $_POST['subtitulo_blog'];
    $c = $_POST['descripcion_blog'];

    if ($_FILES['imagen_blog']['name'] != "") {
        $imagen = "../../../src/img/uploads/" . $_FILES['imagen_blog']['name'];
        $imagenUrl = "src/img/uploads/" . $_FILES['imagen_blog']['name'];
        move_uploaded_file($_FILES['imagen_blog']['tmp_name'], $imagen);

        $stmt = $base->prepare('UPDATE blog SET titulo_blog=?,subtitulo_blog=?,descripcion_blog=?,imagen_blog=? where idblog = ?');
        $result = $stmt->execute(array($a, $b, $c, $imagenUrl, $id));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        $stmt = $base->prepare('UPDATE blog SET titulo_blog=?,subtitulo_blog=?,descripcion_blog=? where idblog = ?');
        $result = $stmt->execute(array($a, $b, $c, $id));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/blogs";</script>';
}

$stmt = $base->prepare('SELECT * from blog');
$data = $stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_OBJ);


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
                        <li class="breadcrumb-item"><a href="<?= $url ?>public/view/">Inicio</a></li>
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
                Todos los cambios los puedes verificar
                <a href="<?= $url ?>blogs" target="_blank" class="font-weight-bold text-warning">aquí <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
                                <th class="text-center">Imagen</th>
                                <th>Titulo</th>
                                <th>Subtitulo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1;
                            foreach ($data as $v1) : ?>
                                <tr>
                                    <td class="text-center"><?= $count ?></td>
                                    <td class="text-center img-table"><img src="<?= $url . $v1->imagen_blog ?>" style="width:40px"></td>
                                    <td><?= $v1->titulo_blog ?></td>
                                    <td><?= $v1->subtitulo_blog ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-id" data-bs-toggle="modal" data-bs-target="#ModalEdit" id="<?= $v1->idblog ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <?php if ($v1->estado_blog == 1) { ?>
                                            <a href="updateWeb?idHide=<?= $v1->idblog ?>" class="btn text-white bg-warning"><i class="fa-solid fa-eye"></i></a>
                                        <?php } else { ?>
                                            <a href="updateWeb?idShow=<?= $v1->idblog ?>" class="btn text-white bg-danger"><i class="fa-solid fa-eye-slash"></i></a>
                                        <?php } ?>
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
                            <input type="hidden" name="post_blog" class="form-control" value="<?= $dateTimeLocal ?>" required title="Campo requerido">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Titulo</label>
                                    <input type="text" name="titulo_blog" class="form-control" placeholder="" required title="Campo requerido">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Subtitulo</label>
                                    <input type="text" name="subtitulo_blog" class="form-control" placeholder="" required title="Campo requerido">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" id="summernote" required name="descripcion_blog" required title="Campo requerido"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile2" class="form-label">Imagen</label>
                                    <input class="form-control" accept="image/*" name="imagen_blog" type="file" id="formFile2" required title="Campo requerido">
                                    <small class="text-secondary">la imagen debe tener esta dimensión: <strong>1400 x 607 pixeles</strong></small>
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
    <div class="modal-dialog modal-lg modal-dialog-centered">
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