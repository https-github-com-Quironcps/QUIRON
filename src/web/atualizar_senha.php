<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, caso contrário, redirecione para a página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: entrar.php");
    exit;
}
 
 
// Defina variáveis e inicialize com valores vazios
$nova_senha = $confirmar_senha = "";
$nova_senha_err = $confirmar_senha_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nova senha
    if(empty(trim($_POST["nova-senha"]))){
        $nova_senha_err = "Por favor insira a nova senha.";     
    } elseif(strlen(trim($_POST["nova-senha"])) < 6){
        $nova_senha_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $nova_senha = trim($_POST["nova-senha"]);
    }
    
    // Validar e confirmar a senha
    if(empty(trim($_POST["confirmar-senha"]))){
        $confirmar_senha_err = "Por favor, confirme a senha.";
    } else{
        $confirmar_senha = trim($_POST["confirmar-senha"]);
        if(empty($nova_senha_err) && ($nova_senha != $confirmar_senha)){
            $confirmar_senha_err = "A senha não confere.";
        }
    }
        
    // Verifique os erros de entrada antes de atualizar o banco de dados
    if(empty($nova_senha_err) && empty($confirmar_senha_err)){
        // Prepare uma declaração de atualização
        $sql = "UPDATE TB_PROFESSOR SET TB_PROFESSOR_SENHA = :TB_PROFESSOR_SENHA WHERE TB_PROFESSOR_ID = :TB_PROFESSOR_ID";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":TB_PROFESSOR_SENHA", $param_senha, PDO::PARAM_STR);
            $stmt->bindParam(":TB_PROFESSOR_ID", $param_id, PDO::PARAM_INT);
            
            // Definir parâmetros
            $param_senha = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["TB_PROFESSOR_ID"];
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Senha atualizada com sucesso. Destrua a sessão e redirecione para a página de login
                session_destroy();
                header("location: entrar.php");
                exit();
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>


    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_m/cadastro.css">
    <link rel="stylesheet" href="styles/theme.css">
    <link rel="icon" href="../web/images/logos/arco-dark-2.png">
    
</head>
<body>
<?php include('partials/header.php'); ?>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
 <center>
   <div class="container1">
        <div class="header">
            <h1 id="title">Insira sua nova senha</h1>
        </div> <br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
                    <label for="name">Nova Senha:</label><br>
                    <input class='input-textarea' name="nova-senha" type="text" id="nova-senha"> <br><br>

                    <label for="name">Confirmar Senha:</label><br>
                    <input class='input-textarea'name="confirmar-senha" type="text" id="confirmar-senha"> <br><br><br>

                    <input type="submit" name="submit" class='botao-001' value="Atualizar Senha">
                    <br>
<br>
<br>
</div>     
<center>


            
</body>
</html>