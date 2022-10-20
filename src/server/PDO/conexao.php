<?php
    try {
        $pdo = new PDO("mysql:dbname=DB_QUIRON; port=3306; host=localhost","root", "");
        // $pdo = new PDO("mysql:dbname=epiz_32805535_quiron_db; host=sql111.epizy.com","epiz_32805535", "eB0MboTVVB");
    } 

    catch (PDOException $e) {
        echo "Erro com o bando de dados: ".$e->getMessage();
    }

    catch (Exception $e) {
        echo "Erro genérico: ".$e->getMessage();
    }
?>