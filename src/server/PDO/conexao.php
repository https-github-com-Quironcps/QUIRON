<?php
    try {
        $pdo = new PDO("mysql:dbname=DB_QUIRON; host=localhost","quirondb", "quiron2022tcc*");
    } 

    catch (PDOException $e) {
        echo "Erro com o bando de dados: ".$e->getMessage();
    }

    catch (Exception $e) {
        echo "Erro genérico: ".$e->getMessage();
    }
?>