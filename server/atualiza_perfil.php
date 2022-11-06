<?php

include ('PDO/conexao.php');
include ('PDO/situacao.php');


if (isset($_POST['cursos'])) {

    $cursos = trim($_POST['cursos']);
    $sobre = trim($_POST['sobre']); 
    $equipe = trim($_POST['equipe']);

    $img1 = trim($_POST['imagem1']);
    $img2 = trim($_POST['imagem2']);
    $img3 = trim($_POST['imagem3']);


    $sth = $pdo->prepare('UPDATE TB_PERFIL SET TB_PERFIL_CURSOS = :cursos,
    TB_PERFIL_SOBRE = :sobre, 
    TB_PERFIL_EQUIPE = :equipe,
    TB_PERFIL_IMG_POST = :img1,
    TB_PERFIL_IMG_POST_2 = :img2,
    TB_PERFIL_IMG_POST_3 = :img3
    WHERE TB_PERFIL.TB_INSTITUICAO_TB_INSTITUICAO_ID LIKE :id');
    
    $sth->bindParam(':cursos', $cursos, PDO::PARAM_STR);
    $sth->bindParam(':sobre', $sobre, PDO::PARAM_STR);
    $sth->bindParam(':equipe', $equipe, PDO::PARAM_STR);
    $sth->bindParam(':img1', $img1, PDO::PARAM_STR);
    $sth->bindParam(':img2', $img2, PDO::PARAM_STR);
    $sth->bindParam(':img3', $img3, PDO::PARAM_STR);
    $sth->bindParam(':id', $user_id, PDO::PARAM_INT);

    $sth->execute();

    $div_confirmacao = 1;
}
    $sth = $pdo->prepare("SELECT TB_PERFIL.TB_PERFIL_CURSOS AS Cursos,
    TB_PERFIL.TB_PERFIL_SOBRE AS Sobre,
    TB_PERFIL.TB_PERFIL_EQUIPE AS Equipe,
    TB_PERFIL_IMG_POST AS Img1,
    TB_PERFIL_IMG_POST_2 AS Img2,
    TB_PERFIL_IMG_POST_3 AS Img3
    FROM TB_PERFIL
    WHERE TB_INSTITUICAO_TB_INSTITUICAO_ID LIKE :id");

    $sth->bindParam(':id', $user_id, PDO::PARAM_INT);
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>