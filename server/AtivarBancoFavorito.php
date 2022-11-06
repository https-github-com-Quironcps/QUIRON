<?php

// id - vaga
// condicao - condicao do favorito
include('PDO/conexao.php');

function ativarFavorito($id, $condicao){
    include('PDO/situacao.php');

    $id_escola = $_SESSION['id_escola'];
    $id_professor = $user_id;
    $id_vaga = $id;
    $condicao_vaga = $condicao;

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

                        WHERE FK_VAGA = :id AND FK_PROFESSOR = :id_professor");


    $sta->bindParam(':id', $id_vaga, PDO::PARAM_INT);
    $sta->bindParam(':id_professor', $id_professor, PDO::PARAM_INT);

    $sta->execute();

    if($stmt->rowCount() == 0){
        $stb = $pdo->prepare("INSERT INTO `TB_FAVORITO` ( TB_FAVORITO_CONDICAO, FK_PROFESSOR, FK_VAGA, FK_INSTITUICAO)
        VALUES ('1', :id_professor, :id_vaga, :id_instituicao");


        $stb->bindParam(':id_vaga', $id_vaga, PDO::PARAM_INT);
        $stb->bindParam(':id_professor', $id_professor, PDO::PARAM_INT);
        $stb->bindParam(':id_instituicao', $id_escola, PDO::PARAM_INT);
    }


    $vagas = $sta->fetchAll(PDO::FETCH_ASSOC);
}