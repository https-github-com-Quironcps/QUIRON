<?php

try{
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

    'TB_PERFIL_CURSOS' => $params['cursos'],
    'TB_PERFIL_SOBRE' => $params['sobre'],
    'TB_PERFIL_EQUIPE' => $params['equipe'],

];

$stmt = $pdo->prepare($sql);

$stmt->execute($data);


$response = [];

$response['message']  = 'Dados do perfil foram salvos com sucesso!';

echo json_encode($response, JSON_PRETTY_PRINT) . "\n";
}

catch (PDOException $e) {
    $error = [];

    $error['message'] = $e->getMessage();

    echo json_encode($error, JSON_PRETTY_PRINT) . "\n";
}


?>