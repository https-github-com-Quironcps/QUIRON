<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_l/minhas_vagas.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <script src="../web/scripts/modo-dark.js"></script>
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

    <title>QUIRON - MINHAS VAGAS</title>
</head>
<body>

    <div class="page">

    <?php include('partials/header.php') ?>

    <center><h1 class="h1002">Minhas vagas</h1></center>

        <div class="div-total">
            <div class="conteudo">
            <center>
                <div class="anunciar">
                    <a href="anunciar_vaga.php">Anunciar Vaga</a>
                </div>
                <br>
                <div class="table1">
                    <div class="td1">1.</div>

                    <div class="td2"><h6 class="nome_materia">Nome da matéria</h6></div>

                    <div class="td3"><a href="editar_vaga.php"><img class="trash-square" src="images/svgs/editar.svg"></a></div>

                    <div class="td4"><a href=""><img class="trash-square" src="images/svgs/trash.svg"></a></div>
                </div>
            </div>
        
        </center>
        </div>

    <?php include('partials/footer.php'); ?>

    </div>

    <?php include('partials/loadpage.php'); ?>

</body>
</html>