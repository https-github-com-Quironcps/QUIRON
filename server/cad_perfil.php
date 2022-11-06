<?php

    include ('PDO/situacao.php');
    // session_start();

    $escola = $_SESSION['id_esl'];

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['submit'])){

        $query_perfil = "INSERT INTO TB_PERFIL (TB_PERFIL_CURSOS, TB_PERFIL_SOBRE, TB_PERFIL_EQUIPE, TB_INSTITUICAO_TB_INSTITUICAO_ID, TB_PERFIL_IMG_POST, TB_PERFIL_IMG_POST_2, TB_PERFIL_IMG_POST_3) 
        VALUES (:CURSOS, :SOBRE, :EQUIPE, :FK, :IMG1, :IMG2, :IMG3)";

        $cad_perfil = $pdo->prepare($query_perfil);

        $cad_perfil->bindParam(':CURSOS', $dados['cursos'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':SOBRE', $dados['sobre'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':EQUIPE', $dados['equipe'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':FK', $escola, PDO::PARAM_STR);
        $cad_perfil->bindParam(':IMG1', $dados['imagem1'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':IMG2', $dados['imagem2'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':IMG3', $dados['imagem3'], PDO::PARAM_STR);

        $cad_perfil->execute();
        
        header("location: ../web/entrar");
        
    } 
?>