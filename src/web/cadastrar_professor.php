<?php
//Incluir conexão
include_once "server/PDO/conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar-se na QUIRON</title>


    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_m/cadastro.css">
    <link rel="stylesheet" href="styles/theme.css">
</head>
<body>
<?php include('partials/navbar-index.php'); ?>
<br>



<center>
    <div class="container1">
        <div class="header">
            <h1 id="title">Crie sua conta</h1>
        </div>


        <?php
//receber dados do form
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


//verificar se o usuário clicou em "cadastrar"
if(!empty($dados['submit'])) {
    var_dump($dados);
}
try{
    //query de cadastro ao banco
    $query_professor = "INSERT INTO TB_PROFESSOR (
    TB_PROFESSOR_NOME,
    TB_PROFESSOR_CEP,
    TB_PROFESSOR_ENDERECO, 
    TB_PROFESSOR_END_NUM, 
    TB_PROFESSOR_BAIRRO, 
    TB_PROFESSOR_TELEFONE,
    TB_PROFESSOR_CPF,
    TB_PROFESSOR_NASCIMENTO,
    TB_PROFESSOR_EMAIL,
    TB_PROFESSOR_SENHA) VALUES (:TB_PROFESSOR_NOME, :TB_PROFESSOR_CEP, :TB_PROFESSOR_ENDERECO, :TB_PROFESSOR_END_NUM, :TB_PROFESSOR_BAIRRO, :TB_PROFESSOR_TELEFONE, :TB_PROFESSOR_CPF, :TB_PROFESSOR_NASCIMENTO, :TB_PROFESSOR_EMAIL, :TB_PROFESSOR_SENHA)";


$cad_professor = $pdo->prepare($query_professor);
$cad_professor->bindParam(':TB_PROFESSOR_NOME', $dados['nome-p']);
$cad_professor->bindParam(':TB_PROFESSOR_CEP', $dados['cep-p']);
$cad_professor->bindParam(':TB_PROFESSOR_ENDERECO', $dados['end-p']);
$cad_professor->bindParam(':TB_PROFESSOR_END_NUM', $dados['num-p']);
$cad_professor->bindParam(':TB_PROFESSOR_BAIRRO', $dados['bairro-p']);
$cad_professor->bindParam(':TB_PROFESSOR_TELEFONE', $dados['tel-p']);
$cad_professor->bindParam(':TB_PROFESSOR_CPF', $dados['cpf-p']);
$cad_professor->bindParam(':TB_PROFESSOR_NASCIMENTO', $dados['data-p']);
$cad_professor->bindParam(':TB_PROFESSOR_EMAIL', $dados['email-p']);
$cad_professor->bindParam(':TB_PROFESSOR_SENHA', $dados['senha-p']);

//executar query
$cad_professor->execute();

//acessar if ao cadastrar corretamente
if($cad_professor->()){
echo "<span>Cadastrado com Sucesso!</span><br><br>";
unset($dados);
}else{
    echo "<span>Erro: Não foi possivel realizar o cadastro.</span><br><br>";
}
}

?>


        <div class="div-container">
            <div class="div-sub-container">
            <form action="" method="POST" class="form">
                    <label for="name">Nome Completo:</label><br>
                    <input class='input-textarea' name="nome-p" id="nome-p" type="text"> <br><br>

                    <label for="name">CEP:</label><br>
                    <input class='input-textarea' name="cep-p" id="cep-p" type="text"> <br><br>

                    <label for="name">Endereço:</label><br>
                    <input class='input-textarea' name="end-p" id="end-p" type="text"> <br><br>

                    <label for="name">N°:</label><br>
                    <input class='input-textarea' name="num-p" id="num-p" type="text"> <br><br>

                    <label for="name">Bairro:</label><br>
                    <input class='input-textarea' name="bairro-p" id="bairro-p" type="text"> <br><br>

                    <label for="name">Telefone:</label><br>
                    <input class='input-textarea' name="tel-p" id="tel-p" type="text"> <br><br>

                    <label for="name">CPF:</label><br>
                    <input class='input-textarea' name="cpf-p" id="cpf-p" type="text"> <br><br>

                    <label for="name">Data de Nascimento:</label><br>
                    <input class='input-textarea' name="data-p" id="data-p" type="date"> <br><br>

                    <label for="name">Email:</label><br>
                    <input class='input-textarea' name="email-p" id="email-p" type="text"> <br><br>

                    <label for="name">Senha:</label><br>
                    <input class='input-textarea' name="senha-p" id="senha-p" type="password"> <br><br><br>

                    <input type="submit" name="submit" class='botao-001' value="Cadastrar">
                        <br><br><br>
            </div>

            <div class="linhaMeio"></div>

                <center>
                <div class="div-sub-container-2">
                    
                    </div>

                            <br>
                        </form>
                            
                        <img src="images/svgs/img_login.svg" class="img-anunciar">

                    <div class="ab">

                    
                </center>
            </div>
        </div>
    </div>
</center>
<br>
</body>
</html>