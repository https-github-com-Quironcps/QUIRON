<?php
//Incluir conexão
include("../server/PDO/conexao.php");
include("../server/cad_escola.php");
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

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">


</head>
<body>

<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/acesso_telas_desconhecido.php');
?>

<br>

<center>
    <div class="container1">
        <div class="header">
            <h1 id="title">Cadastre a sua Instituição</h1>
        </div>

        <br>
        <div class="div-container">
            <div class="div-sub-container">
            <form class="form">
                    <label for="name">Nome da Instituição (ETEC/FATEC):</label><br>
                    <input class='input-textarea' name="nome-e" id="nome-e" type="text"> <br><br>

                    <label for="name">Código da Instituição:</label> <br>
                    <input class='input-textarea' name="cod-e" id="cod-e" type="text"> <br><br>

                    <label for="name">Endereço:</label><br>
                    <input class='input-textarea' name="end-e" id="end-e" type="text"> <br><br>

                    <label for="name">N°:</label> <br>
                    <input class='input-textarea' name="num-e" id="num-e" type="text"> <br><br>

                    <label for="name">Bairro:</label><br>
                    <input class='input-textarea' name="bairro-e" id="bairro-e" type="text"> <br><br>

                    <label for="name">CEP:</label> <br>
                    <input class='input-textarea' name="cep-e" id="cep-e" type="text"> <br><br>

                    <label for="name">Telefone:</label><br>
                    <input class='input-textarea' name="tel-e" id="tel-e" type="text"> <br><br>

                    <label for="name">Email:</label> <br>
                    <input class='input-textarea' name="email-e" id="email-e" type="text"> <br><br>

                    <label for="name">Senha:</label> <br>
                    <input class='input-textarea' name="senha-e" id="senha-e" type="password"> <br><br><br>

                    <input type="submit" class='botao-001' name="submit" value="Cadastrar Escola">
                        <br><br><br>
                </form>
            </div>

            <div class="linhaMeio"></div>

                <center>
                <div class="div-sub-container-2">
                   
                    </div>
                    
                            <br>
                        </form>
                            
                        <img src="images/svgs/img_login.svg" onerror="handleError(this)" class="img-anunciar">
                    
                    <div class="ab">
                   
                    
                </center>
            </div>
        </div>
    </div>
</center>
<br>
</body>
</html>