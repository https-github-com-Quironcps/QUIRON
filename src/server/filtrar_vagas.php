<?php

if (isset($_GET['localizacao'], $_GET['faixa'], $_GET['grade']))
{
    $localizacao = trim($_GET['localizacao'])."%";
    $faixa = trim($_GET['faixa']);
    $grade = trim($_GET['grade']);

    $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `localizacao` LIKE :localizacao AND `grade` LIKE :grade AND `faixa` LIKE :faixa');
    $sth->bindParam(':localizacao', $localizacao, PDO::PARAM_STR);
    $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
    $sth->bindParam(':grade', $grade, PDO::PARAM_STR);

    $sth->execute();
}

if (!isset($_GET['localizacao'], $_GET['faixa'], $_GET['grade'])){
    
}

?>