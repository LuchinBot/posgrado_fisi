<?php
//Variable
$page = 1;
$title_page = 'Cursos - UPG FISI';
include('app/layouts/header.php');

$stmt = $base->prepare('CALL listcourses()');
$courses = $stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
<section class="h-100">
    <div class="container-fluid pt-3">
        <div class="slider p-0">
            <div class="container py-0 px-5 h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-dark mb-3 fw-bold">Nuestro Cursos</h1>
                    <p class="text-secondary mb-5">
                        Transformando mentes, creando innovadores. ¡Descubre el futuro profesional en la Unidad de Posgrado de la Facultad de Ingeniería de Sistemas e Informática!
                    </p>
                    <a href="<?= $url ?>courses#contact" class="btn bg-primary text-white fs-4 fw-bold px-4">Solicitar información</a>
                </div>
                <div class="col-md-6 p-0">
                    <img src="<?= $url ?>src/img/default/courses.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid py-5" style="background-color: #F5F5F5;">
    <div class="container">
        <h2 class="title-start-courses mb-5">
            Maestrías
        </h2>
        <div class="row g-2 mb-3 justify-content-center">

            <?php foreach ($courses as $i) { ?>
                <?php if ($i->idcategories == 2) { ?>
                    <div class="col-lg-4 col-sm-4 p-3">
                        <div class="d-flex text-justify">
                            <a href="course?view=<?=$i->idcourses?>&name=<?=$i->name_courses?>" class="p-3 bg-white rounded course-item" style="z-index: 1000;">
                                <h6 class="mb-3 fw-bold text-center text-uppercase"><?= $i->name_courses ?></h6>
                                <p class="text-center text-secondary">
                                    <?= $i->text_courses ?>
                                </p>
                                <div class="d-flex justify-content-center align-items-center pt-2">
                                    <span class="border-end d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-clock"></i>
                                        <strong><?=$i->date_courses?></strong>
                                    </span>
                                    <span class="border-end d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                        <strong><?=$i->credits_courses?> creditos</strong>
                                    </span>
                                    <span class="d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-money-bill-wave"></i>
                                        <strong>S/ <?=$i->price_courses?></strong>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <h2 class="title-end-courses">
            Doctorados
        </h2>
        <div class="row g-2 mb-3 justify-content-center">

            <?php foreach ($courses as $i) { ?>
                <?php if ($i->idcategories == 1) { ?>
                    <div class="col-lg-4 col-sm-4 p-3">
                        <div class="d-flex text-justify">
                            <a href="course?view=<?=$i->idcourses?>&name=<?=$i->name_courses?>" class="p-3 bg-white rounded course-item" style="z-index: 1000;">
                                <h6 class="mb-3 fw-bold text-center text-uppercase"><?= $i->name_courses ?></h6>
                                <p class="text-center text-secondary">
                                    <?= $i->text_courses ?>
                                </p>
                                <div class="d-flex justify-content-center align-items-center pt-2">
                                    <span class="border-end d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-clock"></i>
                                        <strong><?=$i->date_courses?></strong>
                                    </span>
                                    <span class="border-end d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                        <strong><?=$i->credits_courses?> creditos</strong>
                                    </span>
                                    <span class="d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-money-bill-wave"></i>
                                        <strong>S/ <?=$i->price_courses?></strong>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>