<?php
    include ('PDO/conexao.php');
    include ('PDO/situacao.php');

    $id_prof = $user_id;

    $favoritos_Vaga = $pdo->prepare("DELETE FROM `tb_favorito` WHERE FK_PROFESSOR = :ID_PROF");

    $favoritos_Vaga->bindParam(':ID_PROF', $id_prof, PDO::PARAM_INT);
    $favoritos_Vaga->execute();


    $sistema = $pdo->prepare('DELETE FROM `TB_SISTEMA`
    WHERE TB_SISTEMA.TB_PROFESSOR_FK LIKE :id');

    $sistema->bindParam(':id', $id_prof, PDO::PARAM_INT);
    $sistema->execute();

    $excluir_escola = $pdo->prepare('DELETE FROM `TB_PROFESSOR`
    WHERE TB_PROFESSOR.TB_PROFESSOR_ID LIKE :id');

    $excluir_escola->bindParam(':id', $id_prof, PDO::PARAM_INT);
    $excluir_escola->execute();

    session_start();
    
    $_SESSION["user_sit"] = false;
    $_SESSION["user_cod"] = 0;
    $_SESSION["user_type"] = '';
    $_SESSION["user_email"] = '';

    header("location: ../web/");
