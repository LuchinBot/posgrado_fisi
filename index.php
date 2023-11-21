<?php
//Variable
$page = 1;
$title_page = 'Inicio - UPG FISI';
include('app/layouts/header.php');

?>
<section class="h-100 mb-3">
    <div class="container-fluid pt-3">
        <div class="slider">
            <div class="container px-5 h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-dark mb-3 fw-bold">¡Impulsa tu Carrera, Eleva tus Metas!</h1>
                    <p class="text-secondary mb-5">
                        Estamos transformando mentes y creando innovadores. ¡Descubre el futuro profesional en la Unidad de Posgrado de la Facultad de Ingeniería de Sistemas e Informática!
                    </p>
                    <a href="<?= $url ?>courses" class="btn bg-primary text-white fs-4 fw-bold px-4">Explorar cursos</a>
                </div>
                <div class="col-md-6">
                    <img src="<?= $url ?>src/img/default/welcome.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid py-5" style="background-color: #F5F5F5;">
    <div class="container">
        <div class="row g-2 mb-3 justify-content-center">
            <div class="col-lg-4 col-sm-4 p-3">
                <div class="service-item d-flex text-justify pt-3">
                    <div class="float-item">
                    <i class="fa-solid fa-2x fa-microchip"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="mb-3 fw-bold text-uppercase">Mayor Desarrollo Profesional</h6>
                        <p style="text-align: justify">La Unidad de Posgrado de la Facultad de Ingenieria de Sistemas e Informatica, brinda
                            programas de maestrías, licenciadas por Sunedu con Resolución N° 055-2019-SUNEDU/CD.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 p-3">
                <div class="service-item d-flex text-justify pt-3">
                    <div class="float-item">
                        <i class="fa-solid fa-2x fa-house-laptop"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="mb-3 fw-bold text-uppercase">Metodología Híbrida</h6>
                        <p style="text-align: justify">Esta modalidad combina la presencia física y remota de los estudiantes en una misma sesión,
                            lo que les brinda una mayor flexibilidad para elegir la modalidad que mejor se adapte a sus
                            necesidades profesionales y personales.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 p-3">
                <div class="service-item d-flex text-justify pt-3">
                    <div class="float-item">
                        <i class="fa fa-2x fa-graduation-cap"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="mb-3 fw-bold text-uppercase">Perfil del Egresado</h6>
                        <p style="text-align: justify">Egresados con profundos conocimientos en Ciencia de la Computación, desarrollo de sistemas y
                            especializado en investigaciones de tecnología educativa en el campo de las Tecnologías de
                            la Información y Comunicación.</p>
                    </div>
                </div>
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
                            <label for="inputname" class="form-label text-white">Nombres y Apellidos</label>
                            <input type="text" name="fullname" title="Este campo es requerido" class="form-control contact-input" required id="inputname" ">
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
<?php include('app/layouts/scripts.php') ?>