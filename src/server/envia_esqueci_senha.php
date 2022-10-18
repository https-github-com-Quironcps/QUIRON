<?php

if (!empty($dados['submit'])){
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
}

$query_usuario = "SELECT TB_PROFESSOR_ID, TB_PROFESSOR_EMAIL, TB_PROFESSOR_SENHA 
                  FROM TB_PROFESSOR 
                  WHERE TB_PROFESSOR_EMAIL = :TB_PROFESSOR_EMAIL 
                  LIMIT 1";

$result_usuario = $pdo->prepare($query_usuario);
$result_usuario->bindParam(':TB_PROFESSOR_EMAIL', $dados['email_send'], PDO::PARAM_STR);
$result_usuario->execute();  

?>
