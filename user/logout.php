<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include '../config.php';
include APP_ROOT . "/libraries/session.php";
?>


<?php
if (isset($_SESSION["Gmail"])) {
     session_destroy();
     echo "<script>alert('Dang xuat thanh cong');</script>";
     echo "<script>window.location.href='http://localhost/php2mvc/views/';</script>";
}

?>