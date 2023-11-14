<?php
include "../../layouts/header.php";

if (isset($_GET['idHide'])) {
    $stmt = $base->prepare('UPDATE users SET state_users = 0 WHERE idusers = ?');
    $result = $stmt->execute(array($_GET['idHide']));
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/users";</script>';

} elseif (isset($_GET['idShow'])) {
    $stmt = $base->prepare('UPDATE users SET estado = 1 WHERE idusers = ?');
    $result = $stmt->execute(array($_GET['idShow']));

    echo '<script type="text/javascript">window.location="' . $url . 'app/view/users";</script>';

} else {
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/users";</script>';
}
