<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON - EDITAR VAGA</title>

    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_l/anunciar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">
    
</head>
<body>
<br>

<?php include('partials/header.php'); ?>

<center>
    <div class="container1">
        <div class="header">
            <h1 id="title">Editar Vaga</h1>
        </div>

        <div class="div-container">
            <div class="div-sub-container">
                <form class="form">
                    <label for="name">Nome da matéria: </label><br>
                    <input class='input-textarea' type="text"> <br><br>

                    <label for="name">Link de acesso no CPS:</label><br>
                    <input class='input-textarea' type="url"> <br><br>

                    <label for="name">Descrição da vaga:</label><br>
                    <textarea class='input-textarea'></textarea> <br><br>

                    <label for="name">Requisito da vaga:</label><br>
                    <textarea class='input-textarea'></textarea> <br><br>

                    <label for="name">Carga horária semanal:</label><br>
                    <input class='input-textarea' type="text"> <br><br>

                    <label for="name">Média salarial:</label><br>
                    <input class='input-textarea' type="text"> <br><br>
            </div>

            <div class="linhaMeio"></div>

                <center>
                <div class="div-sub-container-2">
                    <div class="ab">
                    </div>
                    <div class="ab">
                        <img src="images/3.png" class="img-anunciar">
                            <br>
                            <input type="submit" class='botao-001' value="Editar Vaga">
                        </form>
                    </div>
                    <div class="ab">
                    </div>
                    
                </center>
            </div>
        </div>
    </div>
</center>
<br>
<?php include('partials/footer.php'); ?>
</body>
</html>