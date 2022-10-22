<?php
    include ('PDO/conexao.php');
    include ('PDO/situacao.php');

    $escola_fk = $user_id;

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['input-enviar'])){

        $query_vaga = "INSERT INTO TB_VAGA (TB_VAGA_MATERIA, TB_VAGA_LINK, TB_VAGA_DESC, 
        TB_VAGA_REQ, TB_VAGA_CARGA, TB_VAGA_FAIXA_SALARIAL, TB_VAGA_GRADE, FK_INSTITUICAO) 
        VALUES (:MATERIA, :LINK, :DESC, :REQ, :CARGA, :FAIXA_SALARIAL, :GRADE, :FK)";

        $cad_vaga = $pdo->prepare($query_vaga);

        $cad_vaga->bindParam(':MATERIA', $dados['nome'], PDO::PARAM_STR);
        $cad_vaga->bindParam(':LINK', $dados['link'], PDO::PARAM_STR);
        $cad_vaga->bindParam(':DESC', $dados['descricao'], PDO::PARAM_STR);
        $cad_vaga->bindParam(':CARGA', $dados['carga'], PDO::PARAM_STR);
        $cad_vaga->bindParam(':FAIXA_SALARIAL', $dados['salarial'], PDO::PARAM_STR);
        $cad_vaga->bindParam(':REQ', $dados['requisitos'], PDO::PARAM_STR);
        $cad_vaga->bindParam(':GRADE', $dados['grade'], PDO::PARAM_STR);
        $cad_vaga->bindParam(':FK', $escola_fk, PDO::PARAM_STR);

        $cad_vaga->execute();
        header("location: ../web/minhas_vagas");
    } 
?>