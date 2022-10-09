<?php
include ('PDO/conexao.php');

if (!empty($_POST['cod'])){
    $cod = trim($_POST['cod']);

    $sth = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME AS Nome,
    TB_INSTITUICAO.TB_INSTITUICAO_ENDERECO AS Endereco,
    TB_INSTITUICAO.TB_INSTITUICAO_END_NUM AS Numero_endereco,
    TB_INSTITUICAO.TB_INSTITUICAO_BAIRRO AS Bairro,
    TB_INSTITUICAO.TB_INSTITUICAO_CEP AS Cep,
    TB_INSTITUICAO.TB_INSTITUICAO_TELEFONE AS Telefone,
    TB_INSTITUICAO.TB_INSTITUICAO_EMAIL AS Email,
    TB_INSTITUICAO.TB_INSTITUICAO_SENHA AS Senha,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER AS Foto 
    FROM `TB_INSTITUICAO`
    WHERE `TB_INSTITUICAO_COD` LIKE :cod');

    $sth->bindParam(':cod', $cod, PDO::PARAM_STR);
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);    
}

else {
    $sth = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME AS Nome,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER AS Foto 
    FROM `TB_INSTITUICAO`');

    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC); 
}
?>