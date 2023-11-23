<?php

$page = 1;
$title_page = 'Información';
include('app/layouts/header.php');
?>
<section class="h-100">
    <div class="container-fluid pt-3">
        <div class="slider p-0">
            <div class="container py-0 px-5 h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-primary mt-3 mb-3 fw-bold">Contáctanos</h1>
                    <hr class="hr-info" style="margin-right:30%">
                    <div class="col p-0 flex-wrap pe-5">
                        <div class="col mb-2">
                            <a class="d-flex py-1 align-items-center rounded px-0 text-success" target="_blank" href="https://maps.app.goo.gl/CSojFjtCYbFtpq5W8">
                                <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                    <i class="fa fa-map-marker-alt text-primary"></i>
                                </div>
                                <span>Jr. Amorarca N°274, Morales, Perú</span>
                            </a>
                        </div>
                        <div class="col mb-2">
                            <a class="d-flex py-1 align-items-center rounded px-0 text-success" href="mailto:posgradofisi@unsm.edu.pe">
                                <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                    <i class="fa fa-envelope-open text-primary"></i>
                                </div>
                                <span>posgradofisi@unsm.edu.pe</span>
                            </a>
                        </div>
                        <div class="col mb-2">
                            <a class="d-flex py-1 align-items-center rounded px-0 text-success" href="tel:++51941080289">
                                <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                    <i class="fa fa-phone-alt text-primary"></i>
                                </div>
                                <span>+51 941 080 289</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2893449771827!2d-76.38158802581545!3d-6.484994393506932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0be45188a9d1%3A0x1db8939f676a4fb3!2sFacultad%20de%20Ingenieria%20de%20Sistemas%20e%20Informatica!5e0!3m2!1ses!2spe!4v1696476756116!5m2!1ses!2spe" frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
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
<?php include('app/layouts/scripts.php'); ?>