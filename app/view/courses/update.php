<?php
include "../../layouts/header.php";

if (isset($_GET['idHide'])) {
    $stmt = $base->prepare('UPDATE courses SET state_courses = 0 WHERE idcourses = ?');
    $result = $stmt->execute(array($_GET['idHide']));
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/courses";</script>';

} elseif (isset($_GET['idShow'])) {
    $stmt = $base->prepare('UPDATE courses SET estado = 1 WHERE idcourses = ?');
    $result = $stmt->execute(array($_GET['idShow']));

    echo '<script type="text/javascript">window.location="' . $url . 'app/view/courses";</script>';

} else {
    echo '<script type="text/javascript">window.location="' . $url . 'app/view/courses";</script>';
}
