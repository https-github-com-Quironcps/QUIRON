<?php
    $host = 'localhost';
    $user = 'quirondb';
    $password = 'quiron2022tcc*';
    $bd = 'test';

    $mysqli = new mysqli($host, $user, $password, $bd);

    if($mysqli->connect_errno){
        echo "Falha na conexão com o banco de dados: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
    }
?>