<?php

// Busca por CODIGO DA ETEC
if (isset($_GET['cod']) >= 1)
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
&& !empty($_GET['localizacao'])){
    if (!empty($_GET['grade'])){
        echo 'loca e grade';
    }

    elseif (!empty($_GET['faixa'])){
        echo 'loca e faixa';
    }

    else {
        echo 'so localizacao';
    }
}


// elseif (isset($GET['localizacao']) != ''){
//     $localizacao = trim($_GET['localizacao']);

//     if (isset($_GET['faixa'])){
//         $faixa = trim($_GET['faixa']);

//         if (isset($GET['grade'])){
//             $grade = trim($_GET['grade']);

//             $sth = $pdo->prepare('SELECT * FROM `TB_VAGA` 
//             INNER JOIN `TB_INSTITUICAO` 
//             ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
//             WHERE `TB_VAGA_GRADE` LIKE :grade 
//             AND `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa 
//             AND `TB_INSTITUICAO_CEP` LIKE :cep ');
            
//             $sth->bindParam(':grade', $grade, PDO::PARAM_STR);
//         }

//         else {
//             $sth = $pdo->prepare('SELECT * FROM `TB_VAGA` 
//             INNER JOIN `TB_INSTITUICAO` 
//             ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
//             WHERE `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa 
//             AND `TB_INSTITUICAO_CEP` LIKE :cep ');
//         }

//         $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
//     }

//     else {
//         $sth = $pdo->prepare('SELECT * FROM `TB_VAGA` 
//         INNER JOIN `TB_INSTITUICAO` 
//         ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
//         WHERE `TB_INSTITUICAO_CEP` LIKE :cep ');
//     }

//     $sth->bindParam(':cep', $localizacao, PDO::PARAM_STR);
//     $sth->execute();
    
//     $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
// }

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