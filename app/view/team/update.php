<?php
include "../../layouts/header.php";

if (isset($_GET['idHide'])) {
    $stmt = $base->prepare('UPDATE persons SET state_persons = 0 WHERE idpersons = ?');
    $result = $stmt->execute(array($_GET['idHide']));
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/persons";</script>';

} elseif (isset($_GET['idShow'])) {
    $stmt = $base->prepare('UPDATE persons SET estado = 1 WHERE idpersons = ?');
    $result = $stmt->execute(array($_GET['idShow']));

    echo '<script type="text/javascript">window.location="' . $url . 'app/view/persons";</script>';

} else {
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/persons";</script>';
}
