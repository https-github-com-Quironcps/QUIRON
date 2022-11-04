<?php

session_start();

    if (isset($_GET['cad'])){
        $id_esl = trim($_GET['cad']);
        $_SESSION['id_esl'] = $id_esl;
        
        header("location: ../web/cadastrar_perfil");
    }