<?php

include('PDO/conexao.php');
include('PDO/situacao.php');

$tipo_user = $user_type;

if ($user_type == 'escola') {
    $stb = $pdo->prepare('SELECT TB_SISTEMA.TB_SISTEMA_ID AS ID,
     TB_SISTEMA.TB_SISTEMA_MODO AS MODO,
     TB_SISTEMA.TB_INSTITUICAO_FK AS FK
     FROM TB_SISTEMA
        WHERE TB_SISTEMA.TB_INSTITUICAO_FK = :id_escola');

    $stb->bindParam(':id_escola', $user_id, PDO::PARAM_STR);
    $stb->execute();

    $tema = $stb->fetchAll(PDO::FETCH_ASSOC);

} elseif ($user_type == 'professor') {
    $stb = $pdo->prepare('SELECT TB_SISTEMA.TB_SISTEMA_ID AS ID,
     TB_SISTEMA.TB_SISTEMA_MODO AS MODO,
     TB_SISTEMA.TB_PROFESSOR_FK AS FK 
     FROM TB_SISTEMA
        WHERE TB_SISTEMA.TB_PROFESSOR_FK = :id_professor');

    $stb->bindParam(':id_professor', $user_id, PDO::PARAM_STR);
    $stb->execute();

    $tema = $stb->fetchAll(PDO::FETCH_ASSOC);
}
