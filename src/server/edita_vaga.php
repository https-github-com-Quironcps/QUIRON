<?php
    include ('PDO/conexao.php');
    include ('PDO/situacao.php');

    $id_vaga = $_SESSION['id_vaga'];

    if (isset($_POST['nome'])) {
        $nome = trim($_POST['nome']);
        $link = trim($_POST['link']); 
        $desc = trim($_POST['desc']);
        $req = trim($_POST['req']);
        $carga = trim($_POST['carga']); 
        $faixa = trim($_POST['faixa']);
        $grade = trim($_POST['grade']);

        $query_vaga = "UPDATE TB_VAGA SET TB_VAGA_MATERIA = :MATERIA,
        TB_VAGA_LINK = :LINK,
        TB_VAGA_DESC = :DESCR,
        TB_VAGA_REQ = :REQ,
        TB_VAGA_CARGA = :CARGA,
        TB_VAGA_FAIXA_SALARIAL = :FAIXA_SALARIAL,
        TB_VAGA_GRADE = :GRADE
        WHERE TB_VAGA_ID LIKE :ID";

        $edita_vaga = $pdo->prepare($query_vaga);

        $edita_vaga->bindParam(':MATERIA', $nome, PDO::PARAM_STR);
        $edita_vaga->bindParam(':LINK', $link, PDO::PARAM_STR);
        $edita_vaga->bindParam(':DESCR', $desc, PDO::PARAM_STR);
        $edita_vaga->bindParam(':REQ', $req, PDO::PARAM_STR);
        $edita_vaga->bindParam(':CARGA', $carga, PDO::PARAM_STR);
        $edita_vaga->bindParam(':FAIXA_SALARIAL', $faixa, PDO::PARAM_STR);
        $edita_vaga->bindParam(':GRADE', $grade, PDO::PARAM_STR);
        $edita_vaga->bindParam(':ID', $id_vaga, PDO::PARAM_INT);

        $edita_vaga->execute();
        header("location: ../web/minhas_vagas");
    } 

    $sto = $pdo->prepare('SELECT TB_VAGA.TB_VAGA_MATERIA AS Materia,
    TB_VAGA.TB_VAGA_LINK AS Link,
    TB_VAGA.TB_VAGA_DESC AS Descricao,
    TB_VAGA.TB_VAGA_REQ AS Req,
    TB_VAGA.TB_VAGA_CARGA AS Carga,
    TB_VAGA.TB_VAGA_FAIXA_SALARIAL AS Faixa,
    TB_VAGA.TB_VAGA_GRADE AS Grade
    FROM `TB_VAGA`
    WHERE TB_VAGA_ID LIKE :id');

    $sto->bindParam(':id', $id_vaga, PDO::PARAM_INT);
    $sto->execute();

    $resultados = $sto->fetchAll(PDO::FETCH_ASSOC);
?>