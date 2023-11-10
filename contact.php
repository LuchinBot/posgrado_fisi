<?php
//Variable
$page = 1;
$title_page = 'Contacto - FISI';
?>
<?php include('app/layouts/header.php') ?>
<div class="container-fluid bg-success py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Contáctanos</h1>
                <span style="color: white; font-weight:200">La Unidad de Posgrado de la Facultad de Ingenieria de Sistemas e Informática</span>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 p-0" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                <div class="col p-0 d-flex flex-wrap">
                    <div class="col-md-4 contact-item border-end fadeIn" data-wow-delay="0.1s">
                        <a class="d-flex align-items-center rounded p-4" target="_blank" href="https://maps.app.goo.gl/CSojFjtCYbFtpq5W8">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <span>Jr. Amorarca N°274, Morales, Perú</span>
                        </a>
                    </div>
                    <div class="col-md-4 contact-item border-end fadeIn" data-wow-delay="0.3s">
                        <a class="d-flex align-items-center rounded p-4" href="mailto:posgradofisi@unsm.edu.pe">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <span>posgradofisi@unsm.edu.pe</span>
                        </a>
                    </div>
                    <div class="col-md-4 contact-item  fadeIn" data-wow-delay="0.5s">
                        <a class="d-flex align-items-center rounded p-4" href="tel:++51941080289">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <span>+51 941 080 289</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2893449771827!2d-76.38158802581545!3d-6.484994393506932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0be45188a9d1%3A0x1db8939f676a4fb3!2sFacultad%20de%20Ingenieria%20de%20Sistemas%20e%20Informatica!5e0!3m2!1ses!2spe!4v1696476756116!5m2!1ses!2spe" frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6 my-3">
                <div>
                    <p class="mb-4 fw-light text-justify">Si desea solicitar más información o enviarnos un comentario, puede rellenar el
                        siguiente formulario. Uno de nuestros asesores se pondrá en contacto con usted a la mayor
                        brevedad posible para resolver sus dudas y ofrecerle toda la información que necesite.</p>
                    <form method="post" id="validateForm">
                        <fieldset>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nombres y apellidos</label>
                                    <input type="text" class="form-control" name="fullname" required autocomplete="off" title="Campo requerido">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" name="phone" required autocomplete="off" title="Campo requerido">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Asunto</label>
                                    <input type="text" class="form-control" name="query" required autocomplete="off" title="Campo requerido">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mensaje</label>
                                    <textarea class="form-control" name="message" required autocomplete="off" title="Campo requerido" style="height: 200px;"></textarea>

                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Contáctarse</button>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>