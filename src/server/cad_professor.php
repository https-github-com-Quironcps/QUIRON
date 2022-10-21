<?php
//receber dados do form
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


//verificar se o usuário clicou em "cadastrar"
if(!empty($dados['submit'])) {
    //query de cadastro ao banco
    $query_professor = ("INSERT INTO TB_PROFESSOR(
    TB_PROFESSOR_NOME,
    TB_PROFESSOR_CEP,
    TB_PROFESSOR_ENDERECO, 
    TB_PROFESSOR_END_NUM, 
    TB_PROFESSOR_CIDADE, 
    TB_PROFESSOR_TELEFONE,
    TB_PROFESSOR_CPF,
    TB_PROFESSOR_NASCIMENTO,
    TB_PROFESSOR_EMAIL,
    TB_PROFESSOR_SENHA) 
    VALUES (:TB_PROFESSOR_NOME, 
    :TB_PROFESSOR_CEP, 
    :TB_PROFESSOR_ENDERECO, 
    :TB_PROFESSOR_END_NUM, 
    :TB_PROFESSOR_CIDADE, 
    :TB_PROFESSOR_TELEFONE, 
    :TB_PROFESSOR_CPF, 
    :TB_PROFESSOR_NASCIMENTO, 
    :TB_PROFESSOR_EMAIL, 
    :TB_PROFESSOR_SENHA)");


    $cad_professor = $pdo->prepare($query_professor);

    $cad_professor->bindParam(':TB_PROFESSOR_NOME', $dados['nome-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_CEP', $dados['cep-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_ENDERECO', $dados['end-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_END_NUM', $dados['num-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_CIDADE', $dados['bairro-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_TELEFONE', $dados['tel-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_CPF', $dados['cpf-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_NASCIMENTO', $dados['data-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_EMAIL', $dados['email-p']);
    $cad_professor->bindParam(':TB_PROFESSOR_SENHA', $dados['senha-p']);

    //executar query
    $cad_professor->execute();

    //acessar if ao cadastrar corretamente
    if($cad_professor){
    echo "<span>Cadastrado com Sucesso!</span><br><br>";

    }

    else{
        echo "<span>Erro: Não foi possivel realizar o cadastro.</span><br><br>";
    }
}
?>