<?php

    //query de cadastro ao banco
    $sql = ("INSERT INTO TB_PERFIL(
    TB_PERFIL_CURSOS,
    TB_PERFIL_SOBRE,
    TB_PERFIL_EQUIPE)
    VALUES (:TB_PERFIL_CURSOS,
    :TB_PERFIL_SOBRE,
    :TB_PERFIL_EQUIPE)");


$_REQUEST = file_get_contents('php://input');

$params = json_decode($_REQUEST, true);

$data = [];

$data = [

    $cad_perfil->bindParam(':TB_PERFIL_CURSOS', $dados['cursos']);
    $cad_perfil->bindParam(':TB_PERFIL_SOBRE', $dados['sobre']);
    $cad_perfil->bindParam(':TB_PERFIL_EQUIPE', $dados['equipe']);

];

    //executar query
    $cad_perfil->execute();

    //acessar if ao cadastrar corretamente
    if($cad_perfil){
    echo "<span>Cadastrado com Sucesso!</span><br><br>";

    }

    else{
        echo "<span>Erro: Não foi possivel realizar o cadastro.</span><br><br>";
    }

?>