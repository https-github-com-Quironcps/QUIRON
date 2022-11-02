<?php
include('PDO/conexao.php');

    $id_professor = trim($_GET['user']);
    $cond_favorito = trim($_GET['cond']);
    $id_vaga = trim($_GET['vaga']);

        if($cond_favorito == 1 || $cond_favorito == 0){
        if ($cond_favorito == 1) {
            $troca_condicao = 0;
        } elseif (($cond_favorito == 0)) {
            $troca_condicao = 1;
        }
        
        $query_vaga = "UPDATE TB_FAVORITO SET
        TB_FAVORITO_CONDICAO = :CONDICAO
        
        WHERE FK_VAGA LIKE :ID_VAGA AND FK_PROFESSOR LIKE :ID_PROFESSOR";
        
        $edita_fav = $pdo->prepare($query_vaga);
        
        $edita_fav->bindParam(':CONDICAO', $troca_condicao, PDO::PARAM_INT);
        $edita_fav->bindParam(':ID_PROFESSOR', $id_professor, PDO::PARAM_INT);
        $edita_fav->bindParam(':ID_VAGA', $id_vaga, PDO::PARAM_INT);
        
        $edita_fav->execute();
    }

    elseif($cond_favorito == 3){
        $condicao_nova = 1;

        $sto = $pdo->prepare('INSERT INTO TB_FAVORITO 
        (TB_FAVORITO_CONDICAO, FK_VAGA, FK_PROFESSOR) 
        VALUES (:COND, :VAGA, :PROFESSOR)');
    
        $sto->bindParam(':PROFESSOR', $id_professor, PDO::PARAM_INT);
        $sto->bindParam(':VAGA', $id_vaga, PDO::PARAM_INT);
        $sto->bindParam(':COND', $condicao_nova, PDO::PARAM_INT);
    
        $sto->execute();    
    }
    
    header("location: ../web/#vaga$id_vaga");