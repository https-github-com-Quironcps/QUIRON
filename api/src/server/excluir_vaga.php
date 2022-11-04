<?php
    include ('PDO/conexao.php');
    include ('PDO/situacao.php');

    $id_vaga = $_SESSION['id_vaga'];

    $favoritos_Vaga = $pdo->prepare("DELETE FROM `TB_FAVORITO` WHERE FK_VAGA = :ID_VAGA");

    $favoritos_Vaga->bindParam(':ID_VAGA', $id_vaga, PDO::PARAM_INT);

    $favoritos_Vaga->execute();

    $sth = $pdo->prepare('DELETE FROM `TB_VAGA`
    WHERE TB_VAGA.TB_VAGA_ID LIKE :id');

    $sth->bindParam(':id', $id_vaga, PDO::PARAM_INT);
    $sth->execute();

    header("location: ../web/minhas_vagas");
?>