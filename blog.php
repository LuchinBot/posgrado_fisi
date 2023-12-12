<?php
if (isset($_GET['ver'])) {

    $page = 3;
    $title_page = $_GET['title'];
    include('app/layouts/header.php');


    $stmt = $base->prepare('select * from blog where idblog=?');
    $data = $stmt->execute(array($_GET['ver']));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);


    $datetime = new DateTime($data['post_blog']);
    $fecha_formateada = $datetime->format('j \d\e F \d\e Y \a \l\a\s H:i:s');

    $stmt = $base->prepare('select * from blog where estado_blog=1 order by idblog desc limit 10');
    $data2 = $stmt->execute();
    $data2 = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
    <div class="container-fluid" style="background: #F5F5F5">
        <div class="container d-flex py-4">
            <div class="col d-flex">
                <div class="col-9 pe-5 ">
                    <div class="bg-white">
                        <div style="background: url('<?= $url . $data['imagen_blog'] ?>') center center no-repeat;background-size: cover; height:300px; overflow:hidden" class="position-relative">
                            <div class="float-mas py-2 px-3 fst-italic fw-light">
                                <i class="fa-solid fa-calendar-days"></i> Publicado el <?= $fecha_formateada ?>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="position-relative">
                                <h4 class="text-dark pb-3 fw-bold bb-title"><?= $data['titulo_blog'] ?></h4>
                            </div>
                            <div class="mt-3 text-secondary" style="overflow-wrap: anywhere;">
                                <?= $data['descripcion_blog'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="position-relative">
                        <h4 class="text-primary pb-2 fw-bold bb-title">Blogs antiguos</h4>
                    </div>
                    <?php foreach ($data2 as $v) : ?>
                        <div class="col mt-3" style="position: relative;">
                            <a href="blog?ver=<?= $v->idblog ?>&title=<?= $v->titulo_blog ?>" class="d-flex blog-mini pb-2 border-bottom">
                                <div class="blog-img" style="background: url('<?= $url . $v->imagen_blog ?>') center center no-repeat;background-size: cover;">
                                </div>
                                <div class="card-body py-0 text-secondary blog-text fst-italic">
                                    <?= $v->titulo_blog ?>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>

    <?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php');
}
?>