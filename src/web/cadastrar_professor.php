<?php
//Incluir conexão
include("../server/PDO/conexao.php");
include("../server/cad_professor.php");
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
            <h1 id="title">Crie sua conta</h1>
            <?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
        </div>

        <div class="div-container">
            <div class="div-sub-container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="form">
                    <label for="name">Nome Completo:</label><br>
                    <input class='input-textarea' name="nome-p" id="nome-p" type="text"> <br><br>

                    <label for="name">CEP:</label><br>
                    <input class='input-textarea' name="cep-p" id="cep-p" type="text"> <br><br>

                    <label for="name">Endereço:</label><br>
                    <input class='input-textarea' name="end-p" id="end-p" type="text"> <br><br>

                    <label for="name">N°:</label><br>
                    <input class='input-textarea' name="num-p" id="num-p" type="text"> <br><br>

                    <label for="name">Cidade:</label><br>
                    <input class='input-textarea' name="cidade-p" id="cidade-p" type="text"> <br><br>

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