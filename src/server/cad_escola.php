<?php
//receber dados do form
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


//verificar se o usuário clicou em "cadastrar"
if(!empty($dados['submit'])) {
    //query de cadastro ao banco
    $query_escola = ("INSERT INTO TB_INSTITUICAO(
    TB_INSTITUICAO_NOME,
    TB_INSTITUICAO_COD,
    TB_INSTITUICAO_ENDERECO, 
    TB_INSTITUICAO_END_NUM, 
    TB_INSTITUICAO_CIDADE,
    TB_INSTITUICAO_CEP 
    TB_PROFESSOR_TELEFONE,
    TB_PROFESSOR_EMAIL,
    TB_PROFESSOR_SENHA) 
    VALUES (:TB_INSTITUICAO_NOME,
    :TB_INSTITUICAO_COD,
    :TB_INSTITUICAO_ENDERECO, 
    :TB_INSTITUICAO_END_NUM, 
    :TB_INSTITUICAO_CIDADE,
    :TB_INSTITUICAO_CEP 
    :TB_INSTITUICAO_TELEFONE,
    :TB_INSTITUICAO_EMAIL,
    :TB_INSTITUICAO_SENHA)");


    $cad_escola = $pdo->prepare($query_escola);

    $cad_professor->bindParam(':TB_INSTITUICAO_NOME', $dados['nome-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_COD', $dados['cod-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_ENDERECO', $dados['end-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_END_NUM', $dados['num-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_CIDADE', $dados['bairro-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_CEP', $dados['cep-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_TELEFONE', $dados['tel-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_EMAIL', $dados['email-e']);
    $cad_professor->bindParam(':TB_INSTITUICAO_SENHA', $dados['senha-e']);

    //executar query
    $cad_escola->execute();

    //acessar if ao cadastrar corretamente
    if($cad_escola){
    echo "<span>Cadastrado com Sucesso!</span><br><br>";

    }

    else{
        echo "<span>Erro: Não foi possivel realizar o cadastro.</span><br><br>";
    }
}
?>