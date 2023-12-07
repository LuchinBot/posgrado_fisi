<?php
include "../../layouts/header.php";

if (isset($_GET['idHide'])) {
    $stmt = $base->prepare('UPDATE blog SET estado_blog = 0 WHERE idblog = ?');
    $result = $stmt->execute(array($_GET['idHide']));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<script type="text/javascript">window.location="' . $url . 'app/view/blogs";</script>';

} elseif (isset($_GET['idShow'])) {
    $stmt = $base->prepare('UPDATE blog SET estado_blog = 1 WHERE idblog = ?');
    $result = $stmt->execute(array($_GET['idShow']));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<script type="text/javascript">window.location="' . $url . 'app/view/blogs";</script>';

} else {
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/blogs";</script>';
}
