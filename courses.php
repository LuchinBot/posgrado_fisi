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
                        Transformando mentes, creando innovadores. ¡Descubre el futuro en la Unidad de Posgrado de la Facultad de Ingeniería de Sistemas e Informática!
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
                            <a href="" class="p-3 bg-white rounded course-item" style="z-index: 1000;">
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
                            <div class="p-3 bg-white rounded course-item" style="z-index: 1000;">
                                <h6 class="mb-3 fw-bold text-center text-uppercase">Mayor Desarrollo Profesional</h6>
                                <p class="text-center text-secondary">
                                    Una de las mejores carreras
                                </p>
                                <div class="d-flex justify-content-center align-items-center pt-2">
                                    <span class="border-end d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-clock"></i>
                                        <strong>31 creditos</strong>
                                    </span>
                                    <span class="border-end d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                        <strong>31 creditos</strong>
                                    </span>
                                    <span class="d-flex flex-column text-center text-primary px-3">
                                        <i class="fa-solid fa-money-bill-wave"></i>
                                        <strong>3000 Soles</strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container-fluid pb-0 pt-5 base-contact" id="contact">
    <div class="container p-0 border-top">
        <h3 class="text-white fw-bold mt-3">Solicita información</h3>
        <form method="post" action="contact" id="validateForm">
            <fieldset>
                <div class="row mt-4">
                    <div class="col-md-4 pe-5">
                        <div class="mb-3">
                            <label for="inputname" class="form-label text-white">Nombres y apellidos</label>
                            <input type="text" name="fullname" title="Este campo es requerido" class="form-control contact-input" required id="inputname" placeholder="Luis José Hidalgo">
                        </div>
                        <div class="mb-3">
                            <label for="inputphone" class="form-label text-white">Celular</label>
                            <input type="text" name="phone" title="Este campo es requerido" minlength="9" maxlength="9" required onkeypress="return soloNumeros(event)" class="form-control contact-input" id="inputphone" placeholder="932059359">
                        </div>
                        <div class="mb-3">
                            <label for="inputemail" class="form-label text-white">Correo electrónico</label>
                            <input type="email" name="email" title="Este campo es requerido" class="form-control contact-input" required id="inputemail" placeholder="micorreo@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="textarea" class="form-label text-white">Describa la solicitud</label>
                            <textarea class="form-control contact-textarea" name="message" title="Este campo es requerido" required id="textarea" placeholder="Solicito información..." rows="8"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 base-image-contact">
                        <img src="<?= $url ?>src/img/default/contact.png" class="image-contact">
                        <span class="float-contact">
                            <button type="submit">Enviar!</button>
                        </span>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>