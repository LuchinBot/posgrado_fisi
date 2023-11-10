<?php
//Variable
$page = 1;
$title_page = 'Inicio - FISI';
?>
<?php include('app/layouts/header.php') ?>
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative" style="height: 500px; overflow:hidden">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?= $url ?>/src/img/default/slider-1.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <!-- Contenido opcional -->
                <div class="px-5">
                    <h1 class="text-white">Bienvenido a la mejor facultad</h1>
                    <a href="<?=$url?>contact" class="btn px-5 bg-success text-white">Mas información</a>
                </div>
            </div>
        </div>
    </div>
</div>
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