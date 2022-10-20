<?php
    try {
        $pdo = new PDO("mysql:dbname=DB_QUIRON; port=3306; host=localhost","root", "");
    } 

    catch (PDOException $e) {
        echo "Erro com o bando de dados: ".$e->getMessage();
    }

    catch (Exception $e) {
        echo "Erro genérico: ".$e->getMessage();
    }
?>