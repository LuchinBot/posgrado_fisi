<?php
//Variable
$page = 1;
$title_page = 'Egresados - UPG FISI';
include('app/layouts/header.php');
$stmt = $base->prepare('SELECT * FROM egresados as e inner join persons as p on e.idpersons = p.idpersons where e.state_egresados = 1');
$teams = $stmt->execute();
$teams = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container-fluid pt-3 pb-5" style="background-color: #F5F5F5;">
    <div class="container py-3">
        <h1 class="fw-bold text-center">Nuestros Egresados</h1>
        <div class="row justify-content-center mt-5">
            <?php foreach ($teams as $i) : ?>
                <div class="col-md-4 about" style="margin-bottom: 4rem !important;">
                    <div class="about-photo" style="background-image: url('<?= $url.$i->photo_persons ?>');">
                    </div>
                    <div class="float-about-name">
                        <p class="m-0 p-0 fs-6"><?= $i->firstname_persons.' '.$i->lastname_persons ?></p>
                    </div>
                    <div class="float-about-link">
                       <p class="text-white fw-bold m-0 p-0">Promoción <?=$i->promocion_egresados ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('app/layouts/footer.php') ?>
<?php include('app/layouts/scripts.php') ?>