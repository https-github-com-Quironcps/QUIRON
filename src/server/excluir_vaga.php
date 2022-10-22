<?php
    include ('PDO/conexao.php');
    include ('PDO/situacao.php');

    $id_vaga = $_SESSION['id_vaga'];

    $sth = $pdo->prepare('DELETE FROM `TB_VAGA`
    WHERE TB_VAGA.TB_VAGA_ID LIKE :id');

    $sth->bindParam(':id', $id_vaga, PDO::PARAM_INT);
    $sth->execute();

    header("location: ../web/minhas_vagas");
?>