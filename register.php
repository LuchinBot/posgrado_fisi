<?php
require 'app/layouts/database/connection.php';

if (isset($_POST['submit'])) {
    try {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (user, keyword)  VALUES (:user,:pass)";
        $sentencia = $base->prepare($query);
        $sentencia->bindParam(":user", $user);
        $sentencia->bindParam(":pass", $pass);
        if ($sentencia->execute()) {
            echo '<script type="text/javascript">window.location="' . $url . 'login";</script>';
        }
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
} ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <h1>Registrate</h1>
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
                <tr>
                    <td><input type="submit" name="submit" value="Registrarme :D"></td>
                </tr>
            </table>
        </form>
        <a href="login.php">tengo cuenta</a>
    </div>




</body>

</html>