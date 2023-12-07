<?php
$page = 1;
$title_page = 'Blog - UPG FISI';
include('app/layouts/header.php');


$stmt = $base->prepare('select * from blog where estado_blog=1 order by idblog desc limit 10');
$data = $stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_OBJ);

$stmt = $base->prepare('select * from blog where estado_blog=1');
$data2 = $stmt->execute();
$data2 = $stmt->fetchAll(PDO::FETCH_OBJ);



?>

<div class="container d-flex py-4">
    <div class="col d-flex">
        <div class="col-9 pe-5">
            <div class="row mb-3">
                <input type="search" id="search" placeholder="Buscar por el título de la blog" autofocus class="form-control rounded-0 border-0 border-bottom w-100" />
            </div>
            <div class="row" id="result">
                <?php foreach ($data2 as $v) : ?>
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
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-3">
            <div class="position-relative">
                <h4 class="text-primary pb-2 fw-bold bb-title">Blogs antiguos</h4>
            </div>
            <?php foreach ($data as $v) : ?>
                <div class="col mt-3" style="position: relative;">
                    <a href="blog?ver=<?= $v->idblog ?>&title=<?= $v->titulo_blog ?>" class="d-flex blog-mini pb-2 border-bottom">
                        <div class="blog-img" style="background: url('<?= $url . $v->imagen_blog ?>') center center no-repeat;background-size: cover;">
                        </div>
                        <div class="card-body py-0 text-secondary blog-text fst-italic" style="overflow-wrap: anywhere;">
                            <?= $v->titulo_blog ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
</div>
<?php include('app/layouts/scripts.php') ?>

<script>
    $(document).ready(function() {
        $('#search').keyup(function() {
            var searchText = $(this).val();
            var vacio = 0;
            if (searchText != '') {
                $.ajax({
                    url: 'search.php',
                    method: 'post',
                    data: {
                        query: searchText
                    },
                    success: function(response) {
                        $('#result').html(response);
                    }
                });
            }else{
                $.ajax({
                    url: 'search.php',
                    method: 'post',
                    data: {
                        query: searchText
                    },
                    success: function(response) {
                        $('#result').html(response);
                    }
                });
                console.log(vacio);
            }
        });
    });
</script>