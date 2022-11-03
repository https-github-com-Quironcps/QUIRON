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