<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Email</title>
</head>
<body>
    
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

require '../vendor/autoload.php';

$from = new SendGrid\Email(null, "matheus8lucas6@gmail.com");
$subject = "Mensagem de Contato";
$to = new SendGrid\Email(null, "quirontcc@gmail.com");
$content = new SendGrid\Content("text/html", "Olá Quíron, <br><br>Você recebeu uma nova mensagem de contato.
<br><br> Nome: $nome <br>Email: $email <br>Mensagem: $mensagem");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

//Necessário inserir a chave
$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo "Mensagem enviada com sucesso"

?>
</body>
</html>


]