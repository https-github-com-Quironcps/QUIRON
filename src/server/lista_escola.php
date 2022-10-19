<?php
include ('PDO/conexao.php');

$id_escola = $_SESSION['id_escola'];

$sth = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME AS Nome,
    TB_PERFIL.TB_PERFIL_CURSOS AS Cursos,
    TB_PERFIL.TB_PERFIL_SOBRE AS Sobre,
    TB_PERFIL.TB_PERFIL_IMG_POST AS ImgPost1,
    TB_PERFIL.TB_PERFIL_IMG_POST_2 AS ImgPost2,
    TB_PERFIL.TB_PERFIL_IMG_POST_3 AS ImgPost3,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER AS Foto 
    FROM `TB_INSTITUICAO`');

    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC); 

?>