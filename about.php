<?php
//Variable
$page = 1;
$title_page = 'Inicio - FISI';
include('app/layouts/header.php');

?>
<section class="h-100">
    <div class="container-fluid p-0">
        <div class="p-0">
            <div class="container py-0 px-5 h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-dark mb-3 fw-bold" style="font-size: 44px !important;">¿Quiénes Somos?</h1>
                    <p class="text-secondary fs-5 mb-5 pe-5">
                        Transformando mentes, creando innovadores. ¡Descubre el futuro en la Unidad de Posgrado de la Facultad de Ingeniería de Sistemas e Informática!
                    </p>
                    <a href="<?= $url ?>courses#contact" class="btn bg-primary text-white fs-4 fw-bold px-4">
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
<div class="container-fluid pb-0 pt-5 base-contact" id="contact">
    <div class="container p-0 border-top">
        <h3 class="text-white fw-bold mt-3">Solicita información</h3>
        <form method="post" action="contact">
            <div class="row mt-4">
                <div class="col-md-4 pe-5">
                    <div class="mb-3">
                        <label for="inputname" class="form-label text-white">Nombres y apellidos</label>
                        <input type="text" class="form-control contact-input" id="inputname" placeholder="Luis José Hidalgo">
                    </div>
                    <div class="mb-3">
                        <label for="inputphone" class="form-label text-white">Celular</label>
                        <input type="text" class="form-control contact-input" id="inputphone" placeholder="932059359">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label text-white">Email address</label>
                        <input type="email" class="form-control contact-input" id="inputemail" placeholder="micorreo@gmail.com">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="textarea" class="form-label text-white">Describa la solicitud</label>
                        <textarea class="form-control contact-textarea" id="textarea" placeholder="Solicito información..." rows="8"></textarea>
                    </div>
                </div>
                <div class="col-md-4 p-0 base-image-contact">
                    <img src="<?= $url ?>src/img/default/contact.png" class="image-contact">
                    <span class="float-contact">
                        <button type="submit">¡Solicitar!</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>