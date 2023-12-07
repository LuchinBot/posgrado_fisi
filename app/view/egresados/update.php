<?php
include "../../layouts/header.php";

if (isset($_GET['idHide'])) {
    $stmt = $base->prepare('UPDATE teams SET state_teams = 0 WHERE idteams = ?');
    $result = $stmt->execute(array($_GET['idHide']));
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/teams";</script>';

} elseif (isset($_GET['idShow'])) {
    $stmt = $base->prepare('UPDATE teams SET estado = 1 WHERE idteams = ?');
    $result = $stmt->execute(array($_GET['idShow']));

    echo '<script type="text/javascript">window.location="' . $url . 'app/view/teams";</script>';

} else {
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/teams";</script>';
}
