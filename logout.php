<?php
$url = "http://localhost/posgrado_fisi/";
session_start();
session_abort();
session_destroy();

echo '<script type="text/javascript">window.location="' . $url . '";</script>';
