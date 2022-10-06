<?php

// Busca por CODIGO DA ETEC
if (!empty($_GET['cod']))
{
    $cod = trim($_GET['cod']);

    $sth = $pdo->prepare('SELECT 
    TB_VAGA.TB_VAGA_MATERIA,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
    TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
    FROM `TB_VAGA` 
    INNER JOIN `TB_INSTITUICAO` 
    ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
    WHERE `TB_INSTITUICAO_COD` LIKE :cod');

    $sth->bindParam(':cod', $cod, PDO::PARAM_STR);
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
}

elseif (isset($_GET['localizacao'], $_GET['grade'], $_GET['faixa'])
&& !empty($_GET['localizacao'] && $_GET['grade'] && $_GET['faixa']))
{
    $localizacao = trim($_GET['localizacao']);
    $faixa = trim($_GET['faixa']);
    $grade = trim($_GET['grade']);

    $sth = $pdo->prepare('SELECT 
    TB_VAGA.TB_VAGA_MATERIA,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
    TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
    FROM `TB_VAGA` 
    INNER JOIN `TB_INSTITUICAO` 
    ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
    WHERE `TB_VAGA_GRADE` LIKE :grade 
    AND `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa 
    AND `TB_INSTITUICAO_CEP` LIKE :cep ');
    
    $sth->bindParam(':grade', $grade, PDO::PARAM_STR);
    $sth->bindParam(':cep', $localizacao, PDO::PARAM_STR);
    $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
    $sth->execute();
    
    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
}

elseif (isset($_GET['localizacao'], $_GET['grade'], $_GET['faixa'])
&& !empty($_GET['localizacao'])){
    if (!empty($_GET['grade'])){
        $localizacao = trim($_GET['localizacao']);
        $grade = trim($_GET['grade']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        WHERE `TB_VAGA_GRADE` LIKE :grade 
        AND `TB_INSTITUICAO_CEP` LIKE :cep ');

        $sth->bindParam(':grade', $grade, PDO::PARAM_STR);
        $sth->bindParam(':cep', $localizacao, PDO::PARAM_STR);
        $sth->execute();

        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    elseif (!empty($_GET['faixa'])){
        $localizacao = trim($_GET['localizacao']);
        $faixa = trim($_GET['faixa']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        WHERE `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa 
        AND `TB_INSTITUICAO_CEP` LIKE :cep ');

        $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
        $sth->bindParam(':cep', $localizacao, PDO::PARAM_STR);
        $sth->execute();

        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    else {
        $localizacao = trim($_GET['localizacao']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        WHERE `TB_INSTITUICAO_CEP` LIKE :cep ');

        $sth->bindParam(':cep', $localizacao, PDO::PARAM_STR);
        $sth->execute();

        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}

elseif (isset($_GET['localizacao'], $_GET['grade'], $_GET['faixa'])
&& !empty($_GET['grade'])){
    if (!empty($_GET['faixa'])){
        $faixa = trim($_GET['faixa']);
        $grade = trim($_GET['grade']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        WHERE `TB_VAGA_GRADE` LIKE :grade 
        AND `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa');
        
        $sth->bindParam(':grade', $grade, PDO::PARAM_STR);
        $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
        $sth->execute();
        
        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    else {
        $grade = trim($_GET['grade']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        WHERE `TB_VAGA_GRADE` LIKE :grade ');

        $sth->bindParam(':grade', $grade, PDO::PARAM_STR);
        $sth->execute();

        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}

elseif (isset($_GET['localizacao'], $_GET['grade'], $_GET['faixa'])
&& !empty($_GET['faixa'])){
    $faixa = trim($_GET['faixa']);

    $sth = $pdo->prepare('SELECT 
    TB_VAGA.TB_VAGA_MATERIA,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
    TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
    FROM `TB_VAGA` 
    INNER JOIN `TB_INSTITUICAO` 
    ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
    WHERE `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa ');

    $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
}

else
{
    $sth = $pdo->prepare('SELECT 
    TB_VAGA.TB_VAGA_MATERIA,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
    TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome 
    FROM `TB_VAGA` 
    INNER JOIN `TB_INSTITUICAO` 
    ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID');
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
}
?>