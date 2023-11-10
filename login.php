<?php
require 'app/layouts/database/connection.php';
$url = "http://localhost/posgrado_fisi/";
session_start();

if (!empty($_SESSION['usuario'])) {
    echo '<script>window.location.replace("welcome.php")</script>';
}
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

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
        echo '<script type="text/javascript">window.location="' . $url . 'login";</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>

        <h1>Inicia</h1>
        <form method="post">
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="user" id=""></td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="pass" id=""></td>
                </tr>
            </table>
            <button type="submit" name="login">Entrar</button>
        </form>

    </div>

</body>

</html>