<?php
session_start();

$_SESSION["user_sit"] = false;
$_SESSION["user_cod"] = 0;
$_SESSION["user_type"] = '';
$_SESSION["user_email"] = '';

header("location: ../web/index.php");
?>