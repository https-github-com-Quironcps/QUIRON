<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON - CONFIGURAÇÕES</title>

    <link rel="stylesheet" href="styles/styles_l/editar_info.css">
    <link rel="stylesheet" href="styles/theme.css">
</head>
<body>
<?php include('partials/header.php') ?>

<br><br><br><br>

    <center><h1 class="h1002">Editar informações da conta</h1></center>

    <div class="div-mae">
        <div class="div-alterar-img">
            <h3>Foto de perfil</h3>

            <div class="sub-div-alterar-img">
                <i class="bi bi-camera"></i>
            </div>

            <button id="submit-text-alterar" class="abc001">Anexar</button>
        </div>

        <div class="div-alterar-texto">
            <form action="" class="div-alterar-form">

                <label class="form-nome-completo">Nome completo: </label><input class="input-nome" type="text" id="input-text-alterar"><br>
                
                <label class="form-endereco">Endereço: </label><input type="text" class="input-endereco" id="input-text-alterar"> <label class="form-num"> Nº: </label><input class="input-num" type="number" id="input-text-alterar"><br>
                
                <label class="form-bairro">Bairro: </label><input type="text" class="input-bairro" id="input-text-alterar"> <label class="form-cep"> CEP: </label><input class="input-cep" type="number" id="input-text-alterar"><br>
                
                <label class="form-tel">Telefone: </label><input type="number" class="input-tel" id="input-text-alterar"> <label class="form-email"> E-mail: </label><input class="input-email" type="email" id="input-text-alterar"><br>

                <center> <label class="form-senha">Senha: </label><input type="password" class="input-senha" id="input-text-alterar"> </center> 
                
                <input type="submit" value="Editar" id="submit-text-alterar" class="submit-class"> <input type="submit" value="Excluir Conta" id="submit-text-alterar-2" class="submit-class"> 
            </form>
        </div>
    </div>

<?php include('partials/footer.php') ?>
</body>
</html>