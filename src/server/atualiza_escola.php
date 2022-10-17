<?php

include ('PDO/conexao.php');
include ('PDO/situacao.php');

if (isset($_POST['nome'])) {

    $nome = trim($_POST['nome']);
    $endereco = trim($_POST['endereco']); 
    $cep = trim($_POST['cep']);
    $num = trim($_POST['num']);
    $bairro = trim($_POST['bairro']); 
    $telefone = trim($_POST['telefone']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $cod = trim($_POST['cod']);
    $textarea = trim($_POST['imagem']);

    $sth = $pdo->prepare('UPDATE TB_INSTITUICAO SET TB_INSTITUICAO_NOME = :nome,
    TB_INSTITUICAO_COD = :cod, 
    TB_INSTITUICAO_ENDERECO = :endereco,
    TB_INSTITUICAO_END_NUM = :num,
    TB_INSTITUICAO_BAIRRO = :bairro,
    TB_INSTITUICAO_CEP = :cep,
    TB_INSTITUICAO_TELEFONE = :telefone,
    TB_INSTITUICAO_EMAIL = :email,
    TB_INSTITUICAO_SENHA = :senha,
    TB_INSTITUICAO_IMG_USER = :img
    WHERE TB_INSTITUICAO_ID LIKE :id');
    
    $sth->bindParam(':nome', $nome, PDO::PARAM_STR);
    $sth->bindParam(':email', $email, PDO::PARAM_STR);
    $sth->bindParam(':senha', $senha, PDO::PARAM_STR);
    $sth->bindParam(':img', $textarea, PDO::PARAM_STR);
    $sth->bindParam(':bairro', $bairro, PDO::PARAM_STR);
    $sth->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $sth->bindParam(':cep', $cep, PDO::PARAM_STR);
    $sth->bindParam(':num', $num, PDO::PARAM_INT);
    $sth->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $sth->bindParam(':cod', $cod, PDO::PARAM_STR);
    $sth->bindParam(':id', $user_id, PDO::PARAM_INT);

    $sth->execute();

}

    $sto = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME AS Nome,
    TB_INSTITUICAO.TB_INSTITUICAO_ENDERECO AS Endereco,
    TB_INSTITUICAO.TB_INSTITUICAO_COD AS Codigo,
    TB_INSTITUICAO.TB_INSTITUICAO_END_NUM AS Numero_endereco,
    TB_INSTITUICAO.TB_INSTITUICAO_BAIRRO AS Bairro,
    TB_INSTITUICAO.TB_INSTITUICAO_CEP AS Cep,
    TB_INSTITUICAO.TB_INSTITUICAO_TELEFONE AS Telefone,
    TB_INSTITUICAO.TB_INSTITUICAO_EMAIL AS Email,
    TB_INSTITUICAO.TB_INSTITUICAO_SENHA AS Senha,
    TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER AS Foto 
    FROM `TB_INSTITUICAO`
    WHERE TB_INSTITUICAO.TB_INSTITUICAO_ID LIKE :id');

    $sto->bindParam(':id', $user_id, PDO::PARAM_INT);
    $sto->execute();

    $resultados = $sto->fetchAll(PDO::FETCH_ASSOC);
?>