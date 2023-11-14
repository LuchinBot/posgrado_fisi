<?php
include "../../layouts/header.php";

if (isset($_GET['idHide'])) {
    $stmt = $base->prepare('UPDATE contact SET state_contact = 0 WHERE idcontact = ?');
    $result = $stmt->execute(array($_GET['idHide']));
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/contact";</script>';

} elseif (isset($_GET['idShow'])) {
    $stmt = $base->prepare('UPDATE contact SET estado = 1 WHERE idcontact = ?');
    $result = $stmt->execute(array($_GET['idShow']));

    echo '<script type="text/javascript">window.location="' . $url . 'app/view/contact";</script>';

} else {
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/contact";</script>';
}
