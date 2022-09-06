<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php include('partials/header.php'); ?>

<center>
    <div class="container1">
        <div class="header001">
            <h1 id="title2">Editar Configurações da Conta</h1>
            <hr>
        </div>


        <h1 id="title2">Nome de usuário</h1>

        <div class="edit-div-info">
            <h2 class="text2">ETEC Profª Ermelinda G Teixeira</h2><br>

            <div class="edit-trash">
                <i class="bi bi-pen"></i>
                <i class="bi bi-trash3"></i>
            </div>
        </div>

        <h1 id="title2">E-mail</h1>

        <div class="edit-div-info">
            <h2 class="text2">exemplo@exemple.com</h2><br>

            <div class="edit-trash">
                <i class="bi bi-pen"></i>
                <i class="bi bi-trash3"></i>
            </div>
        </div>

        <h1 id="title2">Senha</h1>

        <div class="edit-div-info">
            <h2 class="text2">exemplo@exemple.com</h2><br>

            <div class="edit-trash">
                <i class="bi bi-pen"></i>
                <i class="bi bi-trash3"></i>
            </div>
        </div>

        <br><hr>

        <h1 id="title2">Excluir conta</h1>

        <div class="edit-div-info-excluir">
            <center>
                <input type="checkbox" name="checkbox" id=""> Você aceita com os termos de exclusão da conta
                <br><br>
                <button class="botao-001">Deletar</button>
            </center>
        </div>
    </div>
</center>
<br>

<?php include('partials/footer.php'); ?>
</body>
</html>