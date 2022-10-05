<?php

if (!isset($_GET['cod']))
{
    echo "entrou";
    header("Location: ../web/index.php");
    exit;
}

$cod = "%".trim($_GET['cod'])."%";

$dbh = new PDO('mysql:host=localhost; dbname=test', 'quirondb', 'quiron2022tcc*');
$sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `cod` LIKE :cod');
$sth->bindParam(':cod', $cod, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($resultados);exit;
?>