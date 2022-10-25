<?php
include('PDO/conexao.php');
include('PDO/situacao.php');

$id_vaga = $_SESSION['id_vaga_escola'];
$id_prof = $user_id;

$favorito = true;

$sto = $pdo->prepare('INSERT INTO TB_FAVORITO VALUES (:PROFESSOR, :VAGA)');

$sto->bindParam(':PROFESSOR', $id_prof, PDO::PARAM_INT);
$sto->bindParam(':VAGA', $id_vaga, PDO::PARAM_INT);
$sto->execute();

header("location: ../web/visualizar_escola?c=0");