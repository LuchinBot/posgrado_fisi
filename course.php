<?php
if (isset($_GET['view'])) {

    $page = 1;
    $title_page = $_GET['name'];
    include('app/layouts/header.php');

    $stmt = $base->prepare('SELECT * FROM courses as c INNER JOIN categories as ca on(ca.idcategories=c.idcategories) WHERE c.idcourses= ? ');
    $course = $stmt->execute(array($_GET['view']));
    $course = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <section class="h-100">
        <div class="container-fluid pt-3">
            <div class="slider p-0">
                <div class="container py-0 px-5 h-100 d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-secondary mb-1 fw-bold">Curso de <?= $course['name_categories'] ?></h2>
                        <h1 class="text-dark mb-5 fw-bold">
                            <?= $course['name_courses'] ?>
                        </h1>
                        <div class="d-flex mb-4">
                            <div class="border-end d-flex flex-column text-center text-primary px-3">
                                <i class="fa-solid fa-clock"></i>
                                <strong><?= $course['date_courses'] ?></strong>
                            </div>
                            <div class="border-end d-flex flex-column text-center text-primary px-3">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <strong><?= $course['credits_courses'] ?> creditos</strong>
                            </div>
                            <div class="d-flex flex-column text-center text-primary px-3">
                                <i class="fa-solid fa-money-bill-wave"></i>
                                <strong>S/ <?= $course['price_courses'] ?></strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <img src="<?= $url ?>src/img/default/course.jpg" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid py-5" style="background-color: #F5F5F5;">
        <div class="container">
            <div class="row  px-5">
                <div class="col-md-6">
                    <h3>Presentación</h3>
                    <hr>
                    <p class="text-success fw-bolder"><i class="fa-solid fa-medal"></i> Licenciada por SUNEDU</p>
                    <p style="text-align: justify;"><?= $course['presentation_courses'] ?></p>
                </div>
                <div class="col-md-6">
                    <h3>Objetivos</h3>
                    <hr>
                    <p style="word-break: break-all; text-align:justify"><?= $course['objetives_courses'] ?></p>
                </div>
            </div>
            <div class="row px-5">
                <h3>Información adicional</h3>
                <hr>
                <embed src="<?= $url . $course['pdf_courses'] ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />
                <div class="mt-3">
                    <a href="<?= $url . $course['pdf_courses'] ?>" download>
                        <button class="btn btn-primary">Descargar PDF</button>
                    </a>
                </div>
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
                                <input type="text" name="fullname" title="Este campo es requerido" class="form-control contact-input" required id="inputname">
                            </div>
                            <div class="mb-3">
                                <label for="inputphone" class="form-label text-white">Celular</label>
                                <input type="text" name="phone" title="Este campo es requerido" minlength="9" maxlength="9" required onkeypress="return soloNumeros(event)" class="form-control contact-input" id="inputphone">
                            </div>
                            <div class="mb-3">
                                <label for="inputemail" class="form-label text-white">Correo electrónico</label>
                                <input type="email" name="email" title="Este campo es requerido" class="form-control contact-input" required id="inputemail">
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
<?php include('app/layouts/scripts.php');
} ?>