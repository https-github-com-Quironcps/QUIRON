<?php

include ('PDO/conexao.php');
include ('PDO/situacao.php');

if (isset($_POST['cursos'])) {

    $cursos = trim($_POST['cursos']);
    $sobre = trim($_POST['sobre']); 
    $equipe = trim($_POST['equipe']);


    $sth = $pdo->prepare('UPDATE TB_PERFIL SET TB_PERFIL_CURSOS = :cursos,
    TB_PERFIL_SOBRE = :sobre, 
    TB_PERFIL_EQUIPE = :equipe,
    WHERE TB_PERFIL_ID LIKE :id');
    
    $sth->bindParam(':cursos', $cursos, PDO::PARAM_STR);
    $sth->bindParam(':sobre', $sobre, PDO::PARAM_STR);
    $sth->bindParam(':equipe', $equipe, PDO::PARAM_STR);

    $sth->execute();

    $div_confirmacao = 1;
}
    $sto = $pdo->prepare('SELECT TB_PERFIL.TB_PERFIL_CURSOS AS Cursos,
    TB_PERFIL.TB_PERFIL_SOBRE AS Sobre,
    TB_PERFIL.TB_PERFIL_EQUIPE AS Equipe,
    FROM `TB_PERFIL`
    WHERE TB_PERFIL.TB_PERFIL_ID LIKE :id');

    $sto->bindParam(':id', $user_id, PDO::PARAM_INT);
    $sto->execute();

    $resultados = $sto->fetchAll(PDO::FETCH_ASSOC);
?>