<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON - EDITAR VAGA</title>

    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_l/anunciar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

</head>
<body>
<br>

<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/verifica_logado.php');
    include('../server/PDO/acesso_telas_escola.php');
?>

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
                    <input class='input-textarea' type="text" name="salarial" list="faixa">
                        <datalist id="faixa">
                            <option value="">Grade:</option>
                            <option value="Mil - Dois mil"></option>
                            <option value="Três mil - Quatro mil"></option>
                            <option value="Cinco mil - Seis mil"></option>
                            <option value="Mais"></option>
                        </datalist> <br><br>

                    <label for="name">Tipo de Grade:</label><br>
                    <input placeholder="ENSINO MÉDIO / TÉCNICO / TECNÓLOGO" class='input-textarea' type="text" name="grade" list="grade">
                        <datalist id="grade">
                            <option value="Ensino Médio">Componente Comum</option>
                            <option value="Técnico">Curso</option>
                            <option value="Tecnólogo">Curso</option>
                        </datalist> <br><br>
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