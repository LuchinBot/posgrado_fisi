<?php

include('app/layouts/header.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['fullname'];
    $b = $_POST['phone'];
    $c = $_POST['email'];
    $d = $_POST['message'];
    $e = $dateTimeLocal;

    $stmt = $base->prepare('INSERT INTO contact(fullname_contact,phone_contact,email_contact,message_contact,post_contact) values (?,?,?,?,?)');
    $contact = $stmt->execute(array($a, $b, $c, $d, $e));
    if ($contact) {
        echo '<script type="text/javascript">window.location="' . $url . '";</script>';
    }
}else{
    echo '<script type="text/javascript">window.location="' . $url . '";</script>';
}
