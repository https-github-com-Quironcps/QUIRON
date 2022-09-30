<?php
    if (isset($_GET['cod']))
    {
        $cod = trim($_GET['cod'])."%";

        $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `cod` LIKE :cod');
        $sth->bindParam(':cod', $cod, PDO::PARAM_STR);
        $sth->execute();
    }

    if (!isset($_GET['cod']))
    {
        $cod = "%";
    }
?>