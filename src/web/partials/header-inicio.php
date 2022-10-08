
<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/navbar-inicio.css">

    <script src="../web/scripts/modo-dark.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="scripts/ImagenError.js"></script>
    
    <title>HEADER</title>

</head>
<body>
    <header>
        <nav id="navbar">
            <label>
                <input type="submit" value="Entrar">
            </label>

            <div class="container">
                <a href="index.php"><img src="../images/logos/arco-e-texto-dark.png" class="logo" alt="Logo"></a>
                <a class="text-modo">Modo escuro:</a>
                <input type="checkbox" onclick="javascript:themeToggle()" class="check-modo" name="" id="">
            </div>
        </nav>
    </header>

</body>
</html>
