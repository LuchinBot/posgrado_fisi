<?php
$title_page = "Inicio";
$page = 2;
?>
<?php include "../layouts/header.php"; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0" style="font-weight: 700; color: #5B627D">Ventana Principal</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $url ?>app/view">Inicio</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <p class="text-secondary">Bienvenido al sistema principal de la Unidad de Posgrado de la Facultad de Ingeniería de Sistemas e Informática.</p>
    </div>
  </section>
</div>
<?php include "../layouts/footer.php"; ?>
<?php include "../layouts/scripts.php"; ?>