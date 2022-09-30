<?php
if (isset($_GET['localizacao'])){
    $localizacao = trim($_GET['localizacao'])."%";

    if (isset($_GET['faixa'])){
        $faixa = trim($_GET['faixa']);

        if (isset($_GET['grade'])){
            $grade = trim($_GET['grade']);

            $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `localizacao` LIKE :localizacao AND `grade` LIKE :grade AND `faixa` LIKE :faixa');
            $sth->bindParam(':localizacao', $localizacao, PDO::PARAM_STR);
            $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
            $sth->bindParam(':grade', $grade, PDO::PARAM_STR);

            $sth->execute();
        }

        else{
            $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `localizacao` LIKE :localizacao AND `faixa` LIKE :faixa');
            
            $sth->bindParam(':localizacao', $localizacao, PDO::PARAM_STR);
            $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
            
            $sth->execute();
        }
    }
    
    elseif (isset($_GET['grade'])){
        $grade = trim($_GET['grade']);

        $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `localizacao` LIKE :localizacao AND `grade` LIKE :grade');
        $sth->bindParam(':localizacao', $localizacao, PDO::PARAM_STR);
        $sth->bindParam(':grade', $grade, PDO::PARAM_STR);

        $sth->execute();
    }

    else {
        $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `localizacao` LIKE :localizacao');
        $sth->bindParam(':localizacao', $localizacao, PDO::PARAM_STR);

        $sth->execute();
    }
}

elseif (isset($_GET['grade'])){
    $grade = trim($_GET['grade'])."%";

    if (isset($_GET['faixa'])){
        $faixa = trim($_GET['faixa']);

        $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `faixa` LIKE :faixa AND `grade` LIKE :grade');
        $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
        $sth->bindParam(':grade', $grade, PDO::PARAM_STR);

        $sth->execute();
    }

    else {
        $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `grade` LIKE :grade');
        $sth->bindParam(':grade', $grade, PDO::PARAM_STR);

        $sth->execute();
    }
}

elseif (isset($_GET['faixa'])){
    $faixa = trim($_GET['faixa']);

    $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `faixa` LIKE :faixa');
    $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);

    $sth->execute();
}
?>