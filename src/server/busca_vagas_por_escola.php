<?php
include ('PDO/conexao.php');
include ('PDO/situacao.php');

$id_escola = $user_id;

$sto = $pdo->prepare('SELECT TB_VAGA.TB_VAGA_MATERIA AS Materia,
TB_VAGA.TB_VAGA_ID AS Id
FROM `TB_VAGA`
WHERE FK_INSTITUICAO LIKE :id');

$sto->bindParam(':id', $id_escola, PDO::PARAM_INT);
$sto->execute();

$resultados = $sto->fetchAll(PDO::FETCH_ASSOC);
?>