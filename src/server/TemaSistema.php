<?php

include ('PDO/conexao.php');
include ('PDO/situacao.php');

$tema = true;

if ($user_type == 'escola'){
    $sth = $pdo->prepare('SELECT TB_SISTEMA.TB_SISTEMA_MODO AS MODO FROM TB_SISTEMA
    WHERE TB_SISTEMA.TB_INSTITUICAO_FK = :id_escola');

    $sth->bindParam(':id_escola', $user_id, PDO::PARAM_STR);
    $sth->execute();

    if ($sth->rowCount() == 1){
        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    else {
        $sta = $pdo->prepare('INSERT INTO TB_SISTEMA (TB_SISTEMA_MODO, TB_INSTITUICAO_FK)
        VALUES (:MODO, :ID)');

        $sta->bindParam(':MODO', $tema, PDO::PARAM_STR);
        $sta->bindParam(':ID', $user_id, PDO::PARAM_STR);
        $sta->execute();

        $stb = $pdo->prepare('SELECT TB_SISTEMA.TB_SISTEMA_MODO AS MODO FROM TB_SISTEMA
        WHERE TB_SISTEMA.TB_INSTITUICAO_FK = :id_escola');

        $stb->bindParam(':id_escola', $user_id, PDO::PARAM_STR);
        $stb->execute();

        $resultados = $stb->fetchAll(PDO::FETCH_ASSOC);
    }
}

elseif ($user_type == 'professor'){
    $sth = $pdo->prepare('SELECT TB_SISTEMA.TB_SISTEMA_MODO AS MODO FROM TB_SISTEMA
    WHERE TB_SISTEMA.TB_PROFESSOR_FK = :id_professor');

    $sth->bindParam(':id_professor', $user_id, PDO::PARAM_STR);
    $sth->execute();

    if ($sth->rowCount() == 1){
        $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    else {
        $sta = $pdo->prepare('INSERT INTO TB_SISTEMA (TB_SISTEMA_MODO, TB_PROFESSOR_FK)
        VALUES (:MODO, :ID)');

        $sta->bindParam(':MODO', $tema, PDO::PARAM_STR);
        $sta->bindParam(':ID', $user_id, PDO::PARAM_STR);
        $sta->execute();

        $stb = $pdo->prepare('SELECT TB_SISTEMA.TB_SISTEMA_MODO AS MODO FROM TB_SISTEMA
        WHERE TB_SISTEMA.TB_PROFESSOR_FK = :id_professor');

        $stb->bindParam(':id_professor', $user_id, PDO::PARAM_STR);
        $stb->execute();

        $resultados = $stb->fetchAll(PDO::FETCH_ASSOC);
    }
}