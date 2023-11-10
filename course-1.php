<?php
//Variable
$page = 1;
$title_page = 'Curso - FISI';
?>
<?php include('app/layouts/header.php') ?>
<!-- Header Start -->
<div class="container-fluid px-0 page-header" style="background-image: url(<?= $url ?>/src/img/default/course/1.jpg)">
    <div class="container-fluid py-5 m-0" style="background: rgba(0,0,0,0.3)">
        <div class="container py-5 px-0">
            <div class="col-lg-12 justify-content-start">
                <div class="col-lg-8 text-start">
                    <h1 class="text-white animated slideInDown fw-bolder" style="line-height:1;">
                        Maestría en Ciencias con Mención en Tecnologías de la Información</h1>
                    <p class="mt-4 text-white fw-light">INICIO / MAESTRIAS / <a href="<?= $url ?>course-1" class="fw-bold text-white">CURSO</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 d-flex" style="background: #fff">
    <div class="container d-flex">
        <div class="col-6 py-5 pe-5 text-dark">
            <h2 class="text-dark">Sobre el curso</h2>
            <p>La Escuela de Posgrado y la Unidad de Posgrado de la Facultad de Ingeniería de
                Sistemas e Informática de
                la Universidad Nacional de San Martín –Tarapoto, de acuerdo a su competencia y cumpliendo con sus
                fines
                y objetivos creados, desarrollará la Maestría en Ciencias con Mención en Tecnologías de Información.
            </p>
            <div class="container text-center mt-5">
                <div class="row p-0">
                    <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                        <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;" class="bg-primary d-flex justify-content-center align-items-center">
                            <i class="fa fa-calendar text-white fs-5"></i>
                        </span>
                        <div class="d-flex flex-column text-start text-dark ms-4 ">
                            <span class="fs-6 mb-1 fw-light">Apertura</span>
                            <span class="fs-6 fw-bold" style="line-height:1;">1 de Marzo del 2024</span>
                        </div>
                    </div>
                    <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                        <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;" class="bg-primary d-flex justify-content-center align-items-center">
                            <i class="fa fa-book text-white fs-5"></i>
                        </span>
                        <div class="d-flex flex-column text-start text-dark ms-4 ">
                            <span class="fs-6 mb-1  fw-light">Créditos</span>
                            <span class="fs-6 fw-bold" style="line-height:1;">51 Créditos</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                        <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;" class="bg-primary d-flex justify-content-center align-items-center">
                            <i class="fa fa-clock text-white fs-5"></i>
                        </span>
                        <div class="d-flex flex-column text-start text-dark ms-4 ">
                            <span class="fs-6 mb-1  fw-light">Duración</span>
                            <span class="fs-5 fw-bold" style="line-height:1;">3 Semestres</span>
                        </div>
                    </div>
                    <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                        <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;" class="bg-primary d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-money-bill-wave text-white fs-5"></i>
                         </span>
                        <div class="d-flex flex-column text-start text-dark ms-4">
                            <span class="fs-6 mb-1  fw-light">Inversión</span>
                            <span class="fs-5 fw-bold" style="line-height:1;">s/. 8,350</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6" style="background-image: url(<?= $url ?>/src/img/default/course/1_1.jpg); background-position: center; background-size: cover;border-top-left-radius:100px">
        </div>
    </div>
</div>
<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>