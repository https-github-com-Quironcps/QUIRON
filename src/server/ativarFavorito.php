<?php

include('PDO/conexao.php');

$id_professor = trim($_GET['idProf']);
$cond_favorito = trim($_GET['condfav']);
$id_vaga = trim($_GET['vaga']);

if ($cond_favorito == 1){
    $troca_condicao = 0;
}

else{
    $troca_condicao = 1;
}

$query_vaga = "UPDATE TB_FAVORITO SET
        TB_FAVORITO_CONDICAO = :CONDICAO

        WHERE FK_VAGA LIKE :ID_VAGA AND FK_PROFESSOR LIKE :ID_PROFESSOR";

        $edita_fav = $pdo->prepare($query_vaga);

        $edita_fav->bindParam(':CONDICAO', $troca_condicao, PDO::PARAM_STR);
        $edita_fav->bindParam(':ID_PROFESSOR', $id_professor, PDO::PARAM_STR);
        $edita_fav->bindParam(':ID_VAGA', $id_vaga, PDO::PARAM_STR);

        $edita_fav->execute();