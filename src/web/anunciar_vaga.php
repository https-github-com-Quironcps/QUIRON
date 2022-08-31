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
    <?php include('partials/header.php'); ?>

    <div class="container">
        <div class="header">
            <a href="#">Voltar</a>
            <h1>Anunciar Vaga</h1>

            <div class="content">
                <form>
                    <h3>Preencha todos os campos</h3>

                    Nome da matéria: <input type="text"> <br><br>
                    Link de acesso no CPS: <input type="url"> <br><br>
                    Descrição da vaga: <textarea></textarea> <br><br>
                    Requisito da vaga: <textarea></textarea> <br><br>
                    Carga horária semanal: <input type="number"> <br><br>
                    Média salarial: <input type="number"> <br><br>

                    <input type="submit" value="Anunciar Vaga">
                </form>
            </div>
        </div>

        <div class="submit">
            
        </div>
    </div>
</body>
</html>