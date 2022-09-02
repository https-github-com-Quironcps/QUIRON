<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUÍRON</title>

    <link rel="stylesheet" href="styles/anunciar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">
    
</head>
<body>
<div></div>
<br>

<?php include('partials/header.php'); ?>

<center>
    <div class="container1">
        <div class="header">
            <br>
            <h1 id="title">Editar Vaga</h1>
        </div>

        <div class="main-div">
                <div class="submit">
                    <center>
                        <img src="images/prof-sobre.png" class="img-anunciar2">
                    </center>
                </div>

            <div class="linhaMeio"></div>

            <div class="content">
                <center>
                    <form>
                        <input class='input1' type="text" placeholder="Nome da matéria: "> <br><br>
                        <input class='input1' type="url" placeholder="Link de acesso no CPS: "> <br><br>
                        <textarea class='input1' placeholder="Descrição da vaga: "></textarea> <br><br>
                        <textarea class='input1' placeholder="Requisito da vaga: "></textarea> <br><br>
                        <input class='input1' type="text" placeholder="Carga horária semanal: "> <br><br>
                        <input class='input1' type="text" placeholder="Média salarial:"> <br><br>
                        <input type="submit" class='anunciar_btn' value="Editar Vaga">
                    </form>
                </center>
            </div>
        </div>
    </div>
</center>
<br>
<?php include('partials/footer.php'); ?>
</body>
</html>