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
    $cpf = trim($_POST['cpf']);
    $textarea = trim($_POST['imagem']);

    $sth = $pdo->prepare('UPDATE TB_PROFESSOR SET TB_PROFESSOR_NOME = :nome,
    TB_PROFESSOR_CPF = :cpf, 
    TB_PROFESSOR_ENDERECO = :endereco,
    TB_PROFESSOR_END_NUM = :num,
    TB_PROFESSOR_BAIRRO = :bairro,
    TB_PROFESSOR_CEP = :cep,
    TB_PROFESSOR_TELEFONE = :telefone,
    TB_PROFESSOR_EMAIL = :email,
    TB_PROFESSOR_SENHA = :senha,
    TB_PROFESSOR_IMG_USER = :img
    WHERE TB_PROFESSOR_ID LIKE :id');
    
    $sth->bindParam(':nome', $nome, PDO::PARAM_STR);
    $sth->bindParam(':email', $email, PDO::PARAM_STR);
    $sth->bindParam(':senha', $senha, PDO::PARAM_STR);
    $sth->bindParam(':img', $textarea, PDO::PARAM_STR);
    $sth->bindParam(':bairro', $bairro, PDO::PARAM_STR);
    $sth->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $sth->bindParam(':cep', $cep, PDO::PARAM_STR);
    $sth->bindParam(':num', $num, PDO::PARAM_INT);
    $sth->bindParam(':id', $user_id, PDO::PARAM_INT);
    $sth->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $sth->bindParam(':cpf', $cpf, PDO::PARAM_STR);

    $sth->execute();
}
    $sto = $pdo->prepare('SELECT TB_PROFESSOR.TB_PROFESSOR_NOME AS Nome,
    TB_PROFESSOR.TB_PROFESSOR_ENDERECO AS Endereco,
    TB_PROFESSOR.TB_PROFESSOR_CPF AS CPF,
    TB_PROFESSOR.TB_PROFESSOR_END_NUM AS Numero_endereco,
    TB_PROFESSOR.TB_PROFESSOR_BAIRRO AS Bairro,
    TB_PROFESSOR.TB_PROFESSOR_CEP AS Cep,
    TB_PROFESSOR.TB_PROFESSOR_TELEFONE AS Telefone,
    TB_PROFESSOR.TB_PROFESSOR_EMAIL AS Email,
    TB_PROFESSOR.TB_PROFESSOR_SENHA AS Senha,
    TB_PROFESSOR.TB_PROFESSOR_IMG_USER AS Foto 
    FROM `TB_PROFESSOR`
    WHERE TB_PROFESSOR.TB_PROFESSOR_ID LIKE :id');

    $sto->bindParam(':id', $user_id, PDO::PARAM_INT);
    $sto->execute();

    $resultados = $sto->fetchAll(PDO::FETCH_ASSOC);
?>