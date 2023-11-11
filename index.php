<?php
//Variable
$page = 1;
$title_page = 'Inicio - FISI';
include('app/layouts/header.php');
/*
//Consultas
$stmt = $base->prepare('SELECT * from carousel where state_carousel = 1 order by idcarousel asc limit 1');
$slider1 = $stmt->execute();
$slider1 = $stmt->fetch(PDO::FETCH_ASSOC);
if($slider1){
    $idcarousel = $slider1['idcarousel'];

    $stmt = $base->prepare('SELECT * from carousel where state_carousel = 1 AND idcarousel != ? ');
    $slider2 = $stmt->execute(array($idcarousel));
    $slider2 = $stmt->fetchAll(PDO::FETCH_OBJ);
}*/


?>
<!-- Carousel Start -->
<section class="h-100 mb-3">
    <div class="container-fluid p-0">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade slider" data-bs-ride="carousel" style="height: 450px; overflow: hidden;">
            <div class="carousel-inner">
                <?php if($slider1){?>
                <div class="carousel-item active position-relative">
                    <img src="<?= $url.$slider1['image_carousel'];?>" class="d-block w-100" alt="...">
                    <div class="container-fluid float-slider">
                        <div class="container float-slider-text text-uppercase">
                            <h1><?=$slider1['title_carousel'];  ?></h1>
                            <p><?=$slider1['text_carousel'];  ?></p>
                        </div>
                    </div>
                </div>
                <?php foreach ($slider2 as $v) : ?>
                    <div class="carousel-item position-relative">
                        <img src="<?= $url . $v->image_carousel ?>" class="d-block w-100" alt="...">
                        <div class="container-fluid float-slider">
                            <div class="container float-slider-text text-uppercase">
                                <h1><?= $v->title_carousel ?></h1>
                                <p><?= $v->text_carousel ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php }?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon me-5" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon ms-5" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- Carousel End -->
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-2 mb-3 justify-content-center">
            <div class="col-lg-4 col-sm-4 p-3">
                <div class="service-item d-flex text-justify pt-3">
                    <div class="float-item">
                        <i class="fa fa-3x fa-graduation-cap"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="mb-3 fw-bold text-uppercase">Mayor Desarrollo Profesional</h6>
                        <p>La Unidad de Posgrado de la Facultad de Ingenieria de Sistemas e Informatica, brinda
                            programas de maestrías, licenciadas por Sunedu con Resolución N° N° 055-2019-SUNEDU/CD.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 position-relative d-flex" style="min-height: 400px;">
                <div class="float-div fd-1" style="background-image: url(<?= $url ?>/src/img/default/about.jpg);">
                </div>
                <div class="float-div fd-2" style="background-image: url(<?= $url ?>/src/img/default/about.jpg);">
                </div>
            </div>
            <div class="col-lg-6 px-5" style="font-weight: 200 !important">
                <h6 class="text-uppercase text-secondary fw-light">Maestría</h6>
                <h2 class="mb-4">Ventajas de estudiar una maestría</h2>
                <p class="mb-4">¿Te sientes estancado en el mismo espacio laboral, deseas mejorar tu desarrollo
                    profesional y adquirir nuevos conocimientos?</p>
                <p class="mb-4">¡Debes conocer los beneficios de estudiar una maestría para cumplir con tus objetivos!
                    ¡Esta es una oportunidad para ti!</p>
                <div class="row gy-2 gx-4 mb-4" style="font-weight: 400 !important; color: #1c1c1c;">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mejores Oportunidades
                            Laborales</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mayor Desarrollo
                            Profesional</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Calendarizacion Flexible
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Consolidacion Laboral</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Licenciada por SUNEDU</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>