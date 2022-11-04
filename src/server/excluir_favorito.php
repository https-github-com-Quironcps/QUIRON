<?php
    include ('PDO/conexao.php');
    include ('PDO/situacao.php');

    $id_favor = $_SESSION['id_favor'];

    $sth = $pdo->prepare('DELETE FROM `TB_FAVORITO`
    WHERE TB_FAVORITO.TB_FAVORITO_ID LIKE :id');

    $sth->bindParam(':id', $id_favor, PDO::PARAM_INT);
    $sth->execute();

    header("location: ../web/favoritos");
?>