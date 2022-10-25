<?php
//Incluir conexão
include("../server/PDO/conexao.php");
include("../server/cad_perfil.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON - CADASTRAR PERFIL</title>

    <link rel="stylesheet" href="styles/styles_l/perfil_escola.css">
    <link rel="stylesheet" href="styles/theme.css">
    
    <link rel="icon" href="../web/images/logos/arco-dark-2.png">
    
    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <script src="../web/scripts/modo-dark.js"></script>
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

</head>
<body>

    <div class="page">

<?php include('partials/header.php') ?>

<br><br><br><br>

    <center><h1 class="h1002">Crie o seu perfil</h1></center>

    <div class="div-pai">

        <center>
            <div class="div-alterar-img">
                <div class="div-imagens">
                
                <div class="div-ponta"><img class="img-div-alterar-01" onerror="handleError2(this)" src="#"> <img id="imagem001" class="img-trash" src="images/svgs/trash.svg"></div>
                <div class="div-meio"><img class="img-div-alterar-01" onerror="handleError2(this)" src="#"> <img id="imagem002" class="img-trash" src="images/svgs/trash.svg"></div>
                <div class="div-ultimo"><img class="img-div-alterar-01" onerror="handleError2(this)" src="#"> <img id="imagem003" class="img-trash" src="images/svgs/trash.svg"></div>            
                    
                </div>
            </div>
        </center>

        <br>

        <center>
            <div class="div-alterar-texto">
                <form action="" class="div-alterar-form">
                    
                    <label class="form-cursos">Cursos: </label><br><textarea class="input-cursos" type="text" name="cursos" id="input-text-alterar2"></textarea><br>
                    
                    <label class="form-sobre">Sobre: </label><br><textarea type="text" name="sobre" class="input-sobre" id="input-text-alterar2"></textarea><br>
                    
                    <label class="form-equipe">Equipe: </label><br><textarea type="text" name="equipe" class="input-equipe" id="input-text-alterar2"></textarea>
                    
                    <br>
                    <input type="submit" value="Criar perfil" name="submit" id="submit-text-alterar" class="submit-class"><br>
                </form>
            </div>
        </center>
    </div>

<?php include('partials/footer.php') ?>

    </div>

    <?php include('partials/loadpage.php') ?>

</body>
</html>