<?php
    include ('PDO/conexao.php');
    include ('PDO/situacao.php');

    $id_escola = $user_id;

    $seleciona_vagas = $pdo->prepare("SELECT TB_VAGA.TB_VAGA_ID AS Idv FROM TB_VAGA WHERE TB_VAGA.FK_INSTITUICAO LIKE :id_escola");

    $seleciona_vagas->bindParam(':id_escola', $id_escola, PDO::PARAM_INT);

    $seleciona_vagas->execute();

    $vagas = $seleciona_vagas->fetchAll(PDO::FETCH_ASSOC);

    if (count($vagas)) {
        foreach ($vagas as $Vag) {
            $favoritos_Vaga = $pdo->prepare("DELETE FROM `tb_favorito` WHERE FK_VAGA = :ID_VAGA");

            $favoritos_Vaga->bindParam(':ID_VAGA', $Vag['Idv'], PDO::PARAM_INT);
            $favoritos_Vaga->execute();

            $sth = $pdo->prepare('DELETE FROM `TB_VAGA`
            WHERE TB_VAGA.TB_VAGA_ID LIKE :id');

            $sth->bindParam(':id', $Vag['Idv'], PDO::PARAM_INT);
            $sth->execute();

        }
    }

    $sistema = $pdo->prepare('DELETE FROM `TB_SISTEMA`
    WHERE TB_SISTEMA.TB_INSTITUICAO_FK LIKE :id');

    $sistema->bindParam(':id', $id_escola, PDO::PARAM_INT);
    $sistema->execute();

    $excluir_escola = $pdo->prepare('DELETE FROM `TB_INSTITUICAO`
    WHERE TB_INSTITUICAO.TB_INSTITUICAO_ID LIKE :id');

    $excluir_escola->bindParam(':id', $id_escola, PDO::PARAM_INT);
    $excluir_escola->execute();

    $_SESSION["user_sit"] = false;
    header("location: ../web/");
