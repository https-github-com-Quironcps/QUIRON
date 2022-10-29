<?php
session_start();

if(isset($_POST['submit']))
{
    if(isset($_POST['cursos'],$_POST['sobre'],$_POST['equipe']) && !empty($_POST['cursos']) && !empty($_POST['sobre']) && !empty($_POST['equipe']))
    {
        $cursos = trim($_POST['cursos']);
        $sobre = trim($_POST['sobre']);
        $equipe = trim($_POST['equipe']);
 
        if(filter_var($cursos, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'SELECT * FROM TB_PERFIL WHERE TB_PERFIL_CURSOS = :TB_PERFIL_CURSOS';
            $stmt = $pdo->prepare($sql);
            $p = ['TB_PERFIL_CURSOS'=>$cursos];
            $stmt->execute($p);
            
            if($stmt->rowCount() <= 141)
            {
                $sql = "INSERT INTO TB_PERFIL (TB_PERFIL_CURSOS, TB_PERFIL_SOBRE, TB_PERFIL_EQUIPE) values(:TB_PERFIL_CURSOS,:TB_PERFIL_SOBRE,:TB_PERFIL_EQUIPE)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':TB_PERFIL_CURSOS'=>$cursos,
                        ':TB_PERFIL_SOBRE'=>$sobre,
                        ':TB_PERFIL_EQUIPE'=>$equipe
                       ];
                    
                    $handle->execute($params);
                    
                    $success = 'Perfil Criado com Sucesso!';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valcursos = $cursos;
                $valsobre = $sobre;
                $valequipe = $equipe;
 
                $errors[] = 'Houve um erro ao criar o perfil';
            }
        }
        else
        {
            $errors[] = "Ocorreu um erro, tente novamente mais tarde";
        }
    }
    else
    {
        if(!isset($_POST['cursos']) || empty($_POST['cursos']))
        {
            $errors[] = 'Por favor, insira os cursos da sua escola';
        }
        else
        {
            $valcursos = $_POST['cursos'];
        }
        if(!isset($_POST['sobre']) || empty($_POST['sobre']))
        {
            $errors[] = 'Por favor adicione uma descrição para sua escola';
        }
        else
        {
            $valsobre = $_POST['sobre'];
        }
 
        if(!isset($_POST['equipe']) || empty($_POST['equipe']))
        {
            $errors[] = 'Adicione a equipe da sua escola';
        }
        else
        {
            $valequipe = $_POST['equipe'];
        }
        
    }
 
}
