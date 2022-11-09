<?php
include('PDO/conexao.php');
include('PDO/situacao.php');

    $id_professor = $user_id;
    $cond_favorito = trim($_GET['situacao']);
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
        $troca_condicao = 1;

        $sto = $pdo->prepare('INSERT INTO TB_FAVORITO 
        (TB_FAVORITO_CONDICAO, FK_VAGA, FK_PROFESSOR) 
        VALUES (:COND, :VAGA, :PROFESSOR)');
    
        $sto->bindParam(':PROFESSOR', $id_professor, PDO::PARAM_INT);
        $sto->bindParam(':VAGA', $id_vaga, PDO::PARAM_INT);
        $sto->bindParam(':COND', $troca_condicao, PDO::PARAM_INT);
    
        $sto->execute();    
    }

    $sta = $pdo->prepare("SELECT TB_FAVORITO.TB_FAVORITO_ID AS IdFav,
    TB_FAVORITO.TB_FAVORITO_CONDICAO AS CondFav,
    TB_FAVORITO.FK_PROFESSOR AS FKFavProf,
    TB_FAVORITO.FK_VAGA AS FKFavVaga,
    TB_VAGA.FK_INSTITUICAO AS FKFavInstituicao
    FROM TB_FAVORITO

    INNER JOIN TB_VAGA 
    ON TB_VAGA.TB_VAGA_ID LIKE FK_VAGA

    INNER JOIN TB_PROFESSOR 
    ON TB_PROFESSOR.TB_PROFESSOR_ID LIKE FK_PROFESSOR

    INNER JOIN TB_INSTITUICAO 
    ON TB_INSTITUICAO.TB_INSTITUICAO_ID LIKE FK_INSTITUICAO

    WHERE FK_INSTITUICAO = :id AND FK_PROFESSOR = :id_professor AND FK_VAGA = :id_vaga");
    
