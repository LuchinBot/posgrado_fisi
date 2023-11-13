<?php
//General
error_reporting(0);
ini_set('display_errors', 0);
require('database/connection.php');
$url = "http://localhost/posgrado_fisi/";

$dateTime = new DateTime();
$dateTime->setTimezone(new DateTimeZone('America/Lima'));
$dateTimeLocal = $dateTime->format("Y-m-d H:i:s");

if ($page == 2) {

  session_start();

  if (!isset($_SESSION['user_id'])) {
    echo '<script type="text/javascript">window.location="' . $url . 'login";</script>';
  } else {

    $stm = $base->prepare('SELECT * FROM users as u
    inner join profiles as p on(p.idprofiles = u.idprofiles) WHERE u.idusers = ?');
    $userData = $stm->execute(array($_SESSION['user_id']));
    $userData = $stm->fetch(PDO::FETCH_ASSOC);

    $firstName = explode(" ", $userData['firstname']);
    $firstName = $firstName[0];
    $lastName = explode(" ", $userData['lastname']);
    $lastName = $lastName[0];

    $fullName = $firstName . ' ' . $lastName;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Icon-->
  <link rel="icon" href="<?= $url ?>src/img/default/fisi.png" type="image/icon">
  <title><?= $title_page ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!--Web-->
  <?php if ($page == 1) { ?>
    <link href="<?= $url ?>src/css/web/responsive.css" rel="stylesheet">
    <link href="<?= $url ?>src/css/web/important.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/brands.min.css" rel="stylesheet">

  <?php } ?>

  <?php if ($page == 2) { ?>
    <link href="<?= $url ?>src/css/admin/admin.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/adminlte/adminlte.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/summernote/summernote-bs4.min.css" rel="stylesheet">
    <link href="<?= $url ?>src/plugins/datatables/jquery.dataTables.css" rel="stylesheet">
  <?php } ?>


</head>
<?php if ($page == 1) { ?>

  <body class="w-100">
    <?php include_once('navbar.php'); ?>

    <div class="wrapper">
    <?php } ?>
    <?php if ($page == 2) { ?>

      <body class="hold-transition sidebar-mini">
        <div class="wrapper">
          <?php include_once('navbar.php'); ?>
        <?php } ?>