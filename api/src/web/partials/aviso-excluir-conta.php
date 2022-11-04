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
    <?php include ('../server/PDO/situacao.php'); ?>
    <div id="div_d" style="transform: translateX(100vw); display:none;">
        <div id="fecharDiv3" class="div-todo">
            <div class="principal" style="height: 300px;">
                <center>
                    <div class="conteudo6"><br>

                        <h3 class="mensagem">Você realmente deseja excluir sua conta?</h3><br>

                        <a href="<?php if($user_type == 'escola'){ echo '../server/excluir_escola.php';} else { echo '../server/excluir_professor.php'; } ?>"><input type="submit" style="height: 45px; width:100px; background-color: red; opacity: 70%;" value="Sim" class="btn-enviar"></a>
                        <a><input type="submit" style="height: 45px; width:100px;" value="Não" onclick="sairDIVTelaEx()" class="btn-enviar"></a>

                    </div>
                </center>
            </div>
        </div>
    </div>
</body>

</html>