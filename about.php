<?php
//Variable
$page = 1;
$title_page = 'Nosotros - UPG FISI';
include('app/layouts/header.php');
$stmt = $base->prepare('CALL listTeams()');
$teams = $stmt->execute();
$teams = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<section class="h-100 mb-5">
    <div class="container-fluid pt-3">
        <div class="slider p-0">
            <div class="container py-0 px-5 h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-dark mb-3 fw-bold">¿Quiénes Somos?</h1>
                    <p class="text-secondary mb-5">
                        Transformando mentes, creando innovadores. ¡Descubre el futuro profesional en la Unidad de Posgrado de la Facultad de Ingeniería de Sistemas e Informática!
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
    <div class="container">
        <div class="row g-2 mb-3 justify-content-center">
            <div class="col-lg-4 col-sm-4 p-3">
                <div class="service-item d-flex text-justify pt-3">
                    <div class="float-item">
                    <i class="fa-solid fa-2x fa-mountain"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="mb-3 fw-bold text-uppercase">Misíon</h6>
                        <p style="text-align: justify"> Liderar la modernización y sistematización de la Unidad de Posgrado, brindando un entorno tecnológico eficiente,
                         apoyo integral a Maestrantes y promoviendo normas de vanguardia en tecnología de la información.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 p-3">
                <div class="service-item d-flex text-justify pt-3">
                    <div class="float-item">
                        <i class="fa-solid fa-2x fa-eye"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="mb-3 fw-bold text-uppercase">Visíon</h6>
                        <p style="text-align: justify">Ser un referente de excelencia en la gestión de la información y tecnología computacional en la educación de posgrado,
                         optimizando recursos y promoviendo estándares líderes en el campo, con el compromiso de evolucionar continuamente 
                         para el éxito de la Unidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 p-3">
                <div class="service-item d-flex text-justify pt-3">
                    <div class="float-item">
                        <i class="fa fa-2x fa-clipboard-check"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="mb-3 fw-bold text-uppercase">Nuestros Objetivos</h6>
                        <p style="text-align: justify">
                            <ul>
                                <li>Mejorar la formación académica de los estudiantes universitarios.</li>
                                <li>Fortalecer la gestión institucional en la universidad.</li>
                                <li>Fomentar la responsabilidad social en la comunidad universitaria.</li>
                                <li>Desarrollar la investigación formativa, científica, tecnológica y humanística en la comunidad académica.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5" style="background-color: #F5F5F5;">
    <div class="container py-5">
        <h1 class="fw-bold text-center">Nuestro Equipo</h1>
        <div class="row justify-content-center mt-5">
            <?php foreach ($teams as $i) : ?>
                <div class="col-md-4 about" style="margin-bottom: 4rem !important;">
                    <div class="about-photo" style="background-image: url('<?= $url.$i->photo_persons ?>');">
                    </div>
                    <div class="float-about-name">
                        <p class="m-0 p-0"> <strong><?=$i->name_jobs?></strong><br><?= $i->firstname_persons.' '.$i->lastname_persons ?></p>
                    </div>
                    <div class="float-about-link">
                        <a href="<?=$i->facebook_teams?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="mailto:<?=$i->email_teams?>" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                        <a href="<?=$i->linkedin_teams?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>