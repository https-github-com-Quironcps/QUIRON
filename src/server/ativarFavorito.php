<?php

include('PDO/conexao.php');

$id_professor = trim($_POST['id_professor']);
$cond_favorito = trim($_POST['cond_favorito']);
$id_vaga = trim($_POST['id_vaga']);

if ($cond_favorito == 1) {
    $troca_condicao = 0;
} else {
    $troca_condicao = 1;
}

$query_vaga = "UPDATE TB_FAVORITO SET
TB_FAVORITO_CONDICAO = :CONDICAO

WHERE FK_VAGA LIKE :ID_VAGA AND FK_PROFESSOR LIKE :ID_PROFESSOR";

$edita_fav = $pdo->prepare($query_vaga);

$edita_fav->bindParam(':CONDICAO', $troca_condicao, PDO::PARAM_INT);
$edita_fav->bindParam(':ID_PROFESSOR', $id_professor, PDO::PARAM_INT);
$edita_fav->bindParam(':ID_VAGA', $id_vaga, PDO::PARAM_INT);

$edita_fav->execute();