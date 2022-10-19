<?php

// Busca por CODIGO DA ETEC
if (!empty($_POST['cod']))
{
    $cod = trim($_POST['cod']);

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

elseif (isset($_POST['localizacao'], $_POST['grade'], $_POST['faixa'])
&& !empty($_POST['localizacao'] && $_POST['grade'] && $_POST['faixa']))
{
    $localizacao = trim($_POST['localizacao']);
    $faixa = trim($_POST['faixa']);
    $grade = trim($_POST['grade']);

    $sth = $pdo->prepare('SELECT 
    TB_VAGA.TB_VAGA_MATERIA,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
    TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
    FROM `TB_VAGA` 
    INNER JOIN `TB_INSTITUICAO` 
    ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
    WHERE `TB_VAGA_GRADE` LIKE :grade 
    AND `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa 
    AND `TB_INSTITUICAO_ENDERECO` LIKE :endereco');
    
    $sth->bindParam(':grade', $grade, PDO::PARAM_STR);
    $sth->bindParam(':endereco', $localizacao, PDO::PARAM_STR);
    $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
    $sth->execute();
    
    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
}

elseif (isset($_POST['localizacao'], $_POST['grade'], $_POST['faixa'])
&& !empty($_POST['localizacao'])){
    if (!empty($_POST['grade'])){
        $localizacao = trim($_POST['localizacao']);
        $grade = trim($_POST['grade']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        WHERE `TB_VAGA_GRADE` LIKE :grade 
        AND `TB_INSTITUICAO_ENDERECO` LIKE :endereco');

        $sth->bindParam(':grade', $grade, PDO::PARAM_STR);
        $sth->bindParam(':endereco', $localizacao, PDO::PARAM_STR);
        $sth->execute();

        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    elseif (!empty($_POST['faixa'])){
        $localizacao = trim($_POST['localizacao']);
        $faixa = trim($_POST['faixa']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        WHERE `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa 
        AND `TB_INSTITUICAO_ENDERECO` LIKE :endereco');

        $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
        $sth->bindParam(':endereco', $localizacao, PDO::PARAM_STR);
        $sth->execute();

        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    else {
        $localizacao = trim($_POST['localizacao']);

        $sth = $pdo->prepare('SELECT 
        TB_VAGA.TB_VAGA_MATERIA,
        TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
        TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome
        FROM `TB_VAGA` 
        INNER JOIN `TB_INSTITUICAO` 
        ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
        AND `TB_INSTITUICAO_ENDERECO` LIKE :endereco ');

        $sth->bindParam(':endereco', $localizacao, PDO::PARAM_STR);
        $sth->execute();

        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}

elseif (isset($_POST['localizacao'], $_POST['grade'], $_POST['faixa'])
&& !empty($_POST['grade'])){
    if (!empty($_POST['faixa'])){
        $faixa = trim($_POST['faixa']);
        $grade = trim($_POST['grade']);

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
        $grade = trim($_POST['grade']);

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

elseif (isset($_POST['localizacao'], $_POST['grade'], $_POST['faixa'])
&& !empty($_POST['faixa'])){
    $faixa = trim($_POST['faixa']);

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