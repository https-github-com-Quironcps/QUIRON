<?php
    session_start();

    if (isset($_GET['cod'])){
        $id_vaga = trim($_GET['cod']);
        $_SESSION['id_vaga'] = $id_vaga;
        
        header("location: ../web/editar_vaga");
    }

    elseif (isset($_GET['codigoex'])){
        $id_vaga = trim($_GET['codigoex']);
        $_SESSION['id_vaga'] = $id_vaga;
        
        header("location: excluir_vaga.php");
    }
?>