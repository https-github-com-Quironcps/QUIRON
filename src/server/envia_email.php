<?php

//recebe o email que será enviado a solicitação
$recebe_email = $_POST['email_send'];

$consulta_email = $pdo->query("SELECT TB_PROFESSOR_NOME, TB_PROFESSOR_EMAIL, TB_PROFESSOR_SENHA, FROM TB_PROFESSOR WHERE TB_PROFESSOR_EMAIL = '$recebe_email'");

if($consulta_email->rowCount() == 0){
    echo "Este email não tem cadastro na quiron!";
}
else{
    echo "Email enviado com sucesso!";
}

?>