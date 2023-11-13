<?php
//Variable
$page = 1;
$title_page = 'Nosotros - UPG FISI';
include('app/layouts/header.php');

?>
<section class="h-100 mb-5">
    <div class="container-fluid pt-3">
        <div class="slider p-0">
            <div class="container py-0 px-5 h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-dark mb-3 fw-bold">¿Quiénes Somos?</h1>
                    <p class="text-secondary mb-5">
                        Transformando mentes, creando innovadores. ¡Descubre el futuro en la Unidad de Posgrado de la Facultad de Ingeniería de Sistemas e Informática!
                    </p>
                    <a href="" class="btn bg-primary text-white fs-4 fw-bold px-4">
                        <i class="fa-brands fa-facebook"></i> Visítanos
                    </a>
                </div>
                <div class="col-md-6 p-0">
                    <img src="<?= $url ?>src/img/default/about.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid py-5" style="background-color: #F5F5F5;">
    <div class="container py-5">
        <h1 class="fw-bold text-center">Nuestro Equipo</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 mb-4 about">
                <div class="about-photo" style="background-image: url(<?= $url ?>/src/img/default/user.jpg);">
                </div>
                <div class="float-about-name">
                    <p class="m-0 p-0"> <strong>Director</strong><br>Luis José Hidalgo Rodriguez</p>
                </div>
                <div class="float-about-link">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>