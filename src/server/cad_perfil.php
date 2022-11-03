<?php

    include ('PDO/situacao.php');

    $escola_fk = $user_id;

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['submit'])){

        $query_perfil = "INSERT INTO TB_PERFIL (TB_PERFIL_CURSOS, TB_PERFIL_SOBRE, TB_PERFIL_EQUIPE, TB_INSTITUICAO_TB_INSTITUICAO_ID) 
        VALUES (:CURSOS, :SOBRE, :EQUIPE, :FK)";

        $cad_perfil = $pdo->prepare($query_perfil);

        $cad_perfil->bindParam(':CURSOS', $dados['cursos'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':SOBRE', $dados['sobre'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':EQUIPE', $dados['equipe'], PDO::PARAM_STR);
        $cad_perfil->bindParam(':FK', $escola_fk, PDO::PARAM_STR);

        $cad_perfil->execute();
        
        header("location: ../web/./");
    } 
?>