<?php

// Busca por CODIGO DA ETEC
if (empty($_GET['cod'])){
    $sth = $pdo->prepare('SELECT * FROM `TB_VAGA`');
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
}

elseif (isset($_GET['cod']) >= 1)
{
    $sth = $pdo->prepare('SELECT * FROM `TB_VAGA` WHERE `TB_VAGA_ID` LIKE :tb_vaga_id');
    $cod = trim($_GET['cod']);
    $sth->bindParam(':tb_vaga_id', $cod, PDO::PARAM_STR);
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
}
?>
