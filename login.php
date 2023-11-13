<?php
$page = 1;
$title_page = 'Loguearse';
include('app/layouts/header.php');
session_start();

if (isset($_POST['login'])) {
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM users as u inner join profiles as p on(p.idprofiles=u.idprofiles) WHERE u.user = :user ";
    $sentencia = $base->prepare($query);
    $sentencia->bindValue(':user', $user);
    $sentencia->execute();
    $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (password_verify($pass, $usuario['keyword'])) {
        $_SESSION['user_id'] = $usuario["idusers"];
        $_SESSION['user_profile'] = $usuario["idprofiles"];
        echo '<script type="text/javascript">window.location="' . $url . 'app/view/";</script>';
    } else {
        $_SESSION['intentos'] = isset($_SESSION['intentos']) ? $_SESSION['intentos'] + 1 : 1;
    }
}

?>
<div class="container">
    <div class="row mt-4 justify-content-center align-items-center">
        <div class="col-md-6 pe-5">
            <img src="<?= $url ?>src/img/default/login.jpg" style="width: 100%;">
        </div>
        <div class="col-md-3 p-4 login">
            <h3 class="text-primary fw-bold mt-3">Inicie sesión</h3>
            <p class="text-secondary mb-0" style="font-size: 10px; line-height: 1.4 !important">Complete sus credenciales correctamente. Si no lo recuerda, comunícate con este número: +51 930 227 604</p>
            <form method="post" id="validateForm">
                <fieldset>
                    <?php if ($_SESSION['intentos'] >= 5) { ?>
                        <div class="mt-3">
                            <p class="text-danger fw-bold"><i class="fa-solid fa-face-frown"></i> Su cuenta a sido bloqueada</p>
                            <span class="fst-italic">Soporte 1: +51 930 227 604</span> <br>
                            <span class="fst-italic">Soporte 2: +51 932 059 359</span> 
                        </div>
                    <?php } else { ?>
                        <div class="">
                            <label for="inputemail" class="form-label text-white">Correo electrónico</label>
                            <input type="email" name="email" title="Este campo es requerido y debe contener un correo válido" class="form-control contact-input px-2" required id="inputemail" placeholder="micorreo@unsm.edu.pe">
                        </div>
                        <div class="mb-3">
                            <label for="ipuntpassword" class="form-label text-white">Contraseña</label>
                            <input type="password" name="password" title="Este campo es requerido" required class="form-control contact-input px-2" id="ipuntpassword" placeholder="**************">
                        </div>
                        <button type="submit" name="login" class="d-flex w-100 btn btn-outline-primary justify-content-center">Ingresar</button><br>
                    <?php } ?>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php include('app/layouts/scripts.php') ?>