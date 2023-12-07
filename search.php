<?php
include('app/layouts/header.php');

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $stmt = $base->prepare('SELECT * FROM blog WHERE estado_blog = 1 AND titulo_blog LIKE ?');
    $stmt->execute(array('%' . $search . '%'));
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    if (empty($data)) {
        echo '<p class="fst-italic text-secondary">No se encontraron resultados.</p>';
    } else {
        // Generar la salida con los resultados encontrados o todos los resultados
        foreach ($data as $v) {
?>
            <div class="col-12 mb-3" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                <a href="blog?ver=<?= $v->idblog ?>&title=<?= $v->titulo_blog ?>" class="d-flex blog-large">
                    <?php
                    $datetime = new DateTime($v->post_blog);
                    $fecha_formateada = $datetime->format('j \d\e F \d\e Y \a \l\a\s H:i:s');
                    ?>
                    <div class="blog-img" style="background: url('<?= $url . $v->imagen_blog ?>') center center no-repeat;background-size: cover;">
                    </div>
                    <div class="card-body py-2 fst-italic">
                        <small class="text-secondary">Publicado el <?= $fecha_formateada ?> </small>
                        <h5 class="card-title text-dark fw-light mt-2" style="overflow-wrap: anywhere;"><?= $v->titulo_blog ?></h5>
                    </div>
                </a>
            </div>
        <?php
        };
    }
}

if (isset($_POST['searchText'])) {

    $stmt = $base->prepare('select * from blog where estado_blog=1');
    $data2 = $stmt->execute();
    $data2 = $stmt->fetchAll(PDO::FETCH_OBJ);
    // Si no se realiza una búsqueda, mostrar todos los resultados originales
    foreach ($data2 as $v) :
        ?>
        <div class="col-12 mb-3" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
            <a href="blog?ver=<?= $v->idblog ?>&title=<?= $v->titulo_blog ?>" class="d-flex blog-large">
                <?php
                $datetime = new DateTime($v->post_blog);
                $fecha_formateada = $datetime->format('j \d\e F \d\e Y \a \l\a\s H:i:s');
                ?>
                <div class="blog-img" style="background: url('<?= $url . $v->imagen_blog ?>') center center no-repeat;background-size: cover;">
                </div>
                <div class="card-body py-2 fst-italic">
                    <small class="text-secondary">Publicado el <?= $fecha_formateada ?> </small>
                    <h5 class="card-title text-dark fw-light mt-2" style="overflow-wrap: anywhere;"><?= $v->titulo_blog ?></h5>
                </div>
            </a>
        </div>
<?php
    endforeach;
}
?>