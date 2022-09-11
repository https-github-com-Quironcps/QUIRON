<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_g/escolas.css">

    <!-- Links para os ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>ESCOLAS</title>
</head>
<body>

    <?php include('partials/header.php') ?>
    
    <div>
        <div class="filtros">
            <form action="" class="form" method="POST">
                <label class="label" for="name">Código da instituição: </label>
                <input class='input-textarea' type="text">
                <input type="submit" class='botao-001' value="">
            </form>
        </div>
        <br><br>
        <div class="conteudo">
            <h1>Escolas:</h1>
        </div>
    </div>

</body>
</html>