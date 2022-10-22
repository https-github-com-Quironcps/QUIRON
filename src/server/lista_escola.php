<?php
include('PDO/conexao.php');

$id_escola = $_SESSION['id_escola'];

$sth = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME AS Nome,
                      TB_PERFIL.TB_PERFIL_CURSOS AS Cursos,
                      TB_PERFIL.TB_PERFIL_SOBRE AS Sobre,
                      TB_PERFIL.TB_PERFIL_IMG_POST AS ImgPost1,
                      TB_PERFIL.TB_PERFIL_IMG_POST_2 AS ImgPost2,
                      TB_PERFIL.TB_PERFIL_IMG_POST_3 AS ImgPost3,
                      TB_INSTITUICAO.TB_INSTITUICAO_EMAIL AS Email,
                      TB_INSTITUICAO.TB_INSTITUICAO_ENDERECO AS Endereco,
                      TB_INSTITUICAO.TB_INSTITUICAO_END_NUM AS EndNum,
                      TB_INSTITUICAO.TB_INSTITUICAO_TELEFONE AS Telefone,
                      TB_INSTITUICAO.TB_INSTITUICAO_CIDADE AS Bairro,
                      TB_INSTITUICAO.TB_INSTITUICAO_CEP AS CEP,
                      TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER AS Foto
                      FROM `TB_INSTITUICAO`
                      INNER JOIN TB_PERFIL 
                      ON TB_INSTITUICAO.TB_INSTITUICAO_ID = TB_INSTITUICAO_TB_INSTITUICAO_ID
                      WHERE TB_INSTITUICAO.TB_INSTITUICAO_ID LIKE :id LIMIT 1');

$sto = $pdo->prepare("SELECT TB_VAGA.TB_VAGA_ID AS Id_vaga,
                      TB_VAGA.TB_VAGA_MATERIA AS Vaga
                      FROM TB_VAGA
                      WHERE TB_VAGA.FK_INSTITUICAO = :id");

$sth->bindParam(':id', $id_escola, PDO::PARAM_STR);
$sto->bindParam(':id', $id_escola, PDO::PARAM_STR);
$sth->execute();
$sto->execute();

$vagas = $sto->fetchAll(PDO::FETCH_ASSOC);
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
