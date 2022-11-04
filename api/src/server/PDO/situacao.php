<?php
// if($_SESSION){
if (!isset($_SESSION)) {
    session_start();

    if (isset($_SESSION["user_sit"])) {
        $user_situacao = $_SESSION["user_sit"];
    } else {
        $user_situacao = false;
    }
    if (isset($_SESSION["user_cod"])) {
        $user_id = $_SESSION["user_cod"];
    } else {
        $user_id;
    }
    if (isset($_SESSION["user_type"])) {
        $user_type = $_SESSION["user_type"];
    } else {
        $user_type;
    }
    if (isset($_SESSION["user_email"])) {
        $email_usuario = $_SESSION["user_email"];
    } else {
        $email;
    }
    if (isset($_SESSION["theme"])) {
        $theme = $_SESSION["theme"];
    } else {
        $theme;
    }
}
?>