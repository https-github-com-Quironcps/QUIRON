<?php

if (empty($_GET['localizacao'] && $_GET['faixa'] && $_GET['grade']))
{
    $localizacao = trim($_GET['localizacao'])."%";
    $faixa = trim($_GET['faixa']);
    $grade = trim($_GET['grade']);

    $sth = $pdo->prepare('SELECT * FROM `TB_VAGA` 
    INNER JOIN `TB_INSTITUICAO` 
    ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID
    WHERE `TB_VAGA_GRADE` LIKE :grade 
    AND `TB_VAGA_FAIXA_SALARIAL` LIKE :faixa 
    AND `TB_INSTITUICAO_CEP` LIKE :cep ');

    $sth->bindParam(':cep', $localizacao, PDO::PARAM_STR);
    $sth->bindParam(':faixa', $faixa, PDO::PARAM_STR);
    $sth->bindParam(':grade', $grade, PDO::PARAM_STR);

    $sth->execute();
}



// if (!empty($_GET['localizacao'], $_GET['faixa'], $_GET['grade'])){
//     $sth = $pdo->prepare('SELECT 
//     TB_VAGA.TB_VAGA_MATERIA,
//     TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER as Foto,
//     TB_INSTITUICAO.TB_INSTITUICAO_NOME as Nome 
//     FROM `TB_VAGA` 
//     INNER JOIN `TB_INSTITUICAO` 
//     ON TB_VAGA.FK_INSTITUICAO = TB_INSTITUICAO.TB_INSTITUICAO_ID');
//     $sth->execute();

//     $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
// }

?>