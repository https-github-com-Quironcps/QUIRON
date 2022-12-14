<!DOCTYPE html>
<html lang="pt-br" class="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/styles_g/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="scripts/ImagenError.js"></script>
    <script src="scripts/FechaDiv.js"></script>

    <link rel="icon" href="../images/logos/arco-dark-2.png">

    <title>QUIRON - CONFIRMAÇÃO</title>
</head>

<body>
    <div id="fecharDiv2" class="div-todo">
        <div class="principal2">
            <center>
                <div class="conteudo6">

                    <h3 class="mensagem">Você realmente deseja sair?</h3><br>

                    <a href="../server/sair.php"><input type="submit" style="height: 45px; width:100px;" value="Sim" class="btn-enviar"></a>
                    <a><input type="submit" style="height: 45px; width:100px;" value="Não" onclick="sairDIVTela()" class="btn-enviar"></a>

                </div>
            </center>
        </div>
    </div>

</body>

</html>