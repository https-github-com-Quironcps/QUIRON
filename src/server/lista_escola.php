<?php
include('PDO/conexao.php');

$id_escola = $_SESSION['id_escola'];
$tipo_user = $_SESSION["user_type"];

if ($tipo_user == 'professor'){
    $id_professor = $_SESSION["user_cod"];
}

else {
    $id_professor = '';
}

$sth = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME AS Nome,
                      TB_PERFIL.TB_PERFIL_CURSOS AS Cursos,
                      TB_PERFIL.TB_PERFIL_SOBRE AS Sobre,
                      TB_PERFIL.TB_PERFIL_IMG_POST AS ImgPost1,
                      TB_PERFIL.TB_PERFIL_IMG_POST_2 AS ImgPost2,
                      TB_PERFIL.TB_PERFIL_IMG_POST_3 AS ImgPost3,
                      TB_INSTITUICAO.TB_INSTITUICAO_EMAIL AS Email,
                      TB_INSTITUICAO.TB_INSTITUICAO_ENDERECO AS Endereco,
                      TB_INSTITUICAO.TB_INSTITUICAO_END_NUM AS EndNum,
                      TB_INSTITUICAO.TB_INSTITUICAO_TELEFONE AS Telefone,
                      TB_INSTITUICAO.TB_INSTITUICAO_CIDADE AS Bairro,
                      TB_INSTITUICAO.TB_INSTITUICAO_CEP AS CEP,
                      TB_INSTITUICAO.TB_INSTITUICAO_IMG_USER AS Foto
                      FROM `TB_INSTITUICAO`
                      INNER JOIN TB_PERFIL 
                      ON TB_INSTITUICAO.TB_INSTITUICAO_ID = TB_INSTITUICAO_TB_INSTITUICAO_ID
                      WHERE TB_INSTITUICAO.TB_INSTITUICAO_ID LIKE :id LIMIT 1');

$sto = $pdo->prepare("SELECT TB_VAGA.TB_VAGA_ID AS Idv,
                      TB_VAGA.TB_VAGA_MATERIA AS Vaga,
                      TB_VAGA.TB_VAGA_LINK AS VagaLink,
                      TB_VAGA.TB_VAGA_DESC AS VagaDesc,
                      TB_VAGA.TB_VAGA_REQ AS VagaReq,
                      TB_VAGA.TB_VAGA_CARGA AS VagaCarga,
                      TB_VAGA.TB_VAGA_FAIXA_SALARIAL AS VagaFaixa,
                      TB_VAGA.TB_VAGA_GRADE AS VagaGrade
                      FROM TB_VAGA
                      WHERE TB_VAGA.FK_INSTITUICAO = :id");

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

$sth->bindParam(':id', $id_escola, PDO::PARAM_INT);
$sta->bindParam(':id', $id_escola, PDO::PARAM_INT);
$sto->bindParam(':id', $id_escola, PDO::PARAM_INT);
$sta->bindParam(':id_professor', $id_professor, PDO::PARAM_INT);

$sth->execute();

$sto->execute();

$vagas = $sto->fetchAll(PDO::FETCH_ASSOC);
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
