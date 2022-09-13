<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="styles/styles_l/perfil_escola.css">
</head>
<body>
<?php include('partials/header.php') ?>

<br><br><br><br>

    <center><h1 class="h1002">Editar Perfil</h1></center>

    <div class="div-pai">

        <center>
            <div class="div-alterar-img">
                <div class="div-imagens">
                    <div class="div-ponta"><img class="img-div-alterar-01" src="images/etec.jpeg"></div>
                    <div class="div-meio"><img class="img-div-alterar-01" src="images/nav2.1.PNG"></div>
                    <div class="div-ultimo"><img class="img-div-alterar-01" src="images/nav2.1.PNG"></div>            
                </div>
            </div>
        </center>

        <br>

        <center>
            <div class="div-alterar-texto">
                <form action="" class="div-alterar-form">
                    
                    <label class="form-cursos">Cursos: </label><br><textarea class="input-cursos" type="text" id="input-text-alterar2"></textarea><br>  <br>
                    
                    <label class="form-sobre">Sobre: </label><br><textarea type="text" class="input-sobre" id="input-text-alterar2"></textarea><br><br>
                    
                    <label class="form-equipe">Equipe: </label><br><textarea type="text" class="input-equipe" id="input-text-alterar2"></textarea>
                    
                    <br>
                    <input type="submit" value="Editar" id="submit-text-alterar" class="submit-class">
                </form>
            </div>
        </center>
    </div>

<?php include('partials/footer.php') ?>
</body>
</html>