<?php

include('PDO/conexao.php');
include('PDO/situacao.php');

$sth = $pdo->prepare("SELECT TB_FAVORITO.TB_FAVORITO_ID AS Idf,
TB_FAVORITO.TB_FAVORITO_CONDICAO AS Cdf,
TB_FAVORITO.FK_VAGA AS Fkv,
TB_FAVORITO.FK_PROFESSOR AS Fkp,
TB_VAGA.TB_VAGA_ID AS Idv,
TB_VAGA.TB_VAGA_MATERIA AS Nmv,
TB_PROFESSOR.TB_PROFESSOR_ID AS Idp
FROM `TB_FAVORITO`

INNER JOIN `TB_VAGA` 
ON TB_FAVORITO.FK_VAGA = TB_VAGA.TB_VAGA_ID

INNER JOIN `TB_PROFESSOR` 
ON TB_FAVORITO.FK_PROFESSOR = TB_PROFESSOR.TB_PROFESSOR_ID

WHERE TB_FAVORITO.TB_FAVORITO_CONDICAO LIKE '1' AND TB_PROFESSOR.TB_PROFESSOR_ID LIKE :ID_PROF");

$sth->bindParam(':ID_PROF', $user_id, PDO::PARAM_INT);

$sth->execute();

$favoritos = $sth->fetchAll(PDO::FETCH_ASSOC);