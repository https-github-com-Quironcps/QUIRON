<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="styles/styles_l/editar_info.css">
</head>
<body>
<?php include('partials/header.php') ?>

<br><br><br><br>

    <center><h1 class="h1002">Editar Perfil</h1></center>

    <div class="div-mae">
        <div class="div-alterar-img">
            <h3>Divulgue sua escola</h3>

            <div class="sub-div-alterar-img">

            </div>

            <button id="submit-text-alterar">Anexar</button>
        </div>

        <div class="div-alterar-texto">
            <form action="" class="div-alterar-form">
                Nome da instituição: <input class="input-sozinho" type="text" id="input-text-alterar"><br>
                Endereço: <input type="text" class="input-endereco" id="input-text-alterar"> Nº: <input class="input-num" type="number" id="input-text-alterar"><br>
                Bairro: <input type="text" class="input-bairro" id="input-text-alterar"> CEP: <input class="input-cep" type="number" id="input-text-alterar"><br>
                Telefone: <input type="number" class="input-tel" id="input-text-alterar"> E-mail: <input class="input-email" type="email" id="input-text-alterar"><br>

                <input type="submit" value="Editar" id="submit-text-alterar" class="submit-class">
            </form>
        </div>
    </div>

<?php include('partials/footer.php') ?>
</body>
</html>