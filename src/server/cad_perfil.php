<?php
 
// Defina variáveis e inicialize com valores vazios
$cursos = $sobre = $equipe = "";
$cursos_err = $sobre_err = $equipe_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar cursos
    if(empty(trim($_POST["cursos"]))){
        $cursos_err = "Por favor insira os cursos";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT TB_PERFIL_ID FROM TB_PERFIL WHERE TB_PERFIL_CURSOS = :TB_PERFIL_CURSOS";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":TB_PERFIL_CURSOS", $param_cursos, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_cursos = trim($_POST["cursos"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                if($stmt->rowCount() == 151){
                    $cursos_err = "Este curso está em muitas etecs";
                } else{
                    $cursos = trim($_POST["cursos"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Validar Descrição
    if(empty(trim($_POST["sobre"]))){
        $sobre_err = "Por favor insira uma descrição";     
    } elseif(strlen(trim($_POST["password"])) < 4){
        $sobre_err = "Por favor insira uma descrição com mais detalhes";
    } else{
        $sobre = trim($_POST["sobre"]);
    }
    
    // Validar Equipe
    if(empty(trim($_POST["equipe"]))){
        $equipe_err = "Por favor insira sua equipe";     
    } elseif(strlen(trim($_POST["equipe"])) < 4){
        $equipe_err = "Por favor insira mais detalhes da sua equipe";
    } else{
        $equipe = trim($_POST["equipe"]);
    }
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($cursos_err) && empty($sobre_err) && empty($equipe_err)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO TB_PERFIL (TB_PERFIL_CURSOS, TB_PERFIL_SOBRE, TB_PERFIL_EQUIPE) VALUES (:TB_PERFIL_CURSOS, :TB_PERFIL_SOBRE, :TB_PERFIL_EQUIPE)";
         
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":TB_PERFIL_CURSOS", $param_cursos, PDO::PARAM_STR);
            $stmt->bindParam(":TB_PERFIL_SOBRE", $param_sobre, PDO::PARAM_STR);
            $stmt->bindParam(":TB_PERFIL_EQUIPE", $param_equipe, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_cursos = $cursos;
            $param_sobre = $sobre;
            $param_equipe = $equipe;
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a index
                header("location:  ../web/./");
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