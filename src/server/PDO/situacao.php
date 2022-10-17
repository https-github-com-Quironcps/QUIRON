<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 

        $user_situacao = $_SESSION["user_sit"];
        $user_id = $_SESSION["user_cod"];
        $user_type = $_SESSION["user_type"];
        $email_usuario = $_SESSION["user_email"];
        $theme = $_SESSION["theme"];
    }                     
?>