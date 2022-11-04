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

    elseif(isset($_GET['codigovaga'])){
        $id_vaga_v = trim($_GET['codigovaga']);
        $_SESSION['id_vaga_v'] = $id_vaga_v;
        
        header("location: ../web/visualizar_vaga");
    }

    elseif (isset($_GET['codVagaEscola'])){
        $id_vaga_escola = trim($_GET['codVagaEscola']);
        $_SESSION['id_vaga_escola'] = $id_vaga_escola;
        
        header("location: favoritar_vaga.php");
    }

    elseif (isset($_GET['codigoFav'])){
        $id_favor = trim($_GET['codigoFav']);
        $_SESSION['id_favor'] = $id_favor;
        
        header("location: excluir_favorito.php");
    }
?>