<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas

// Defina variáveis e inicialize com valores vazios
$usuario = $senha = "";
$usuario_err = $senha_err = $login_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verifique se o nome de usuário está vazio
    if(empty(trim($_POST["usuario"]))){
        $usuario_err = "Por favor, insira seu usuário.";
    } 
    
    else{
        $usuario = trim($_POST["usuario"]);
    }
    
    // Verifique se a senha está vazia
    if(empty(trim($_POST["senha"]))){
        $senha_err = "Por favor, insira sua senha.";
    } 
    
    else{
        $senha = trim($_POST["senha"]);
    }

    $tipo_usuario = trim($_POST["entrada"]);
    
    // echo $usuario;
    // echo $senha;
    
    // Validar credenciais
    if(empty($usuario_err) && empty($senha_err)){
        
        if ($tipo_usuario == 'professor'){
            $sql = "SELECT TB_PROFESSOR_ID, TB_PROFESSOR_EMAIL, TB_PROFESSOR_SENHA FROM TB_PROFESSOR WHERE TB_PROFESSOR_EMAIL = :TB_PROFESSOR_EMAIL";
            
            if($stmt = $pdo->prepare($sql)){
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":TB_PROFESSOR_EMAIL", $param_usuario, PDO::PARAM_STR);
        
                // Definir parâmetros
                $param_usuario = trim($_POST["usuario"]);
                
                // Tente executar a declaração preparada
                if($stmt->execute()){
        
                    // Verifique se o nome de usuário existe, se sim, verifique a senha
                    if($stmt->rowCount() == 1){
        
                        if($row = $stmt->fetch()){
                            $id = $row["TB_PROFESSOR_ID"];
                            $usuario = $row["TB_PROFESSOR_EMAIL"];
                            $hashed_senha = password_hash($row["TB_PROFESSOR_SENHA"], PASSWORD_DEFAULT);
        
                            if (password_verify($senha, $hashed_senha)){
        
                                echo '<br>asaasa';
        
                                // A senha está correta, então inicie uma nova sessão
                                session_start();
                                
                                // Armazene dados em variáveis de sessão
                                $_SESSION["user_sit"] = true;
                                $_SESSION["user_cod"] = $id;
                                $_SESSION["user_type"] = 'professor';
                                $_SESSION["user_email"] = $usuario;
                                $_SESSION["theme"] = true;
                                
                                // Redirecionar o usuário para a página de boas-vindas
                                header("location: ../web/./");
                            } 
                            
                            else{
                                // A senha não é válida, exibe uma mensagem de erro genérica
                                $login_err = "Nome de usuário ou senha inválidos.";
                            }
                        }
                    } 
                    
                    else{
                        // O nome de usuário não existe, exibe uma mensagem de erro genérica
                        $login_err = "Nome de usuário ou senha inválidos.";
                    }
                } 
                
                else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }
        
                // Fechar declaração
                unset($stmt);
            }
        }

        elseif ($tipo_usuario == 'escola'){
            $sql = "SELECT TB_INSTITUICAO_ID, TB_INSTITUICAO_EMAIL, TB_INSTITUICAO_SENHA FROM TB_INSTITUICAO WHERE TB_INSTITUICAO_EMAIL = :TB_INSTITUICAO_EMAIL";
            
            if($stmt = $pdo->prepare($sql)){
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":TB_INSTITUICAO_EMAIL", $param_usuario, PDO::PARAM_STR);
        
                // Definir parâmetros
                $param_usuario = trim($_POST["usuario"]);
                
                // Tente executar a declaração preparada
                if($stmt->execute()){

                    // Verifique se o nome de usuário existe, se sim, verifique a senha
                    if($stmt->rowCount() == 1){

                        if($row = $stmt->fetch()){
                            $id = $row["TB_INSTITUICAO_ID"];
                            $usuario = $row["TB_INSTITUICAO_EMAIL"];
                            $hashed_senha = password_hash($row["TB_INSTITUICAO_SENHA"], PASSWORD_DEFAULT);

                            if (password_verify($senha, $hashed_senha)){

                                // A senha está correta, então inicie uma nova sessão
                                session_start();
                                
                                // Armazene dados em variáveis de sessão
                                $_SESSION["user_sit"] = true;
                                $_SESSION["user_cod"] = $id;
                                $_SESSION["user_type"] = 'escola';
                                $_SESSION["user_email"] = $usuario;
                                
                                header("location: ../server/pegaTema.php");
                            } 
                            
                            else{
                                // A senha não é válida, exibe uma mensagem de erro genérica
                                $login_err = "Nome de usuário ou senha inválidos.";
                            }
                        }
                    } 
                    
                    else{
                        // O nome de usuário não existe, exibe uma mensagem de erro genérica
                        $login_err = "Nome de usuário ou senha inválidos.";
                    }
                } 
                
                else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                // Fechar declaração
                unset($stmt);
            }
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
?>