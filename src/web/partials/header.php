<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/navbar.css">

    <!-- links para os ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        nav{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 75px;
        z-index: 9;
        transition:0.7s;
        background-color: #f1efef;
        box-shadow: 0 0 1em grey;
    }
    </style>

    <title>HEADER</title>

</head>
<body>
    <header>
        <nav id="navbar">
            <label>
                <input type="checkbox" class="inputNav">
                <div class="toggle">
                    <span class="top_line common"></span>
                    <span class="middle_line common"></span>
                    <span class="bottom_line common"></span>
                </div>
                
                <div class="slide">
                    <ul class="ul1">
                        <li><a class="hover-lis" href="#">Vagas</a></li>
                        <li><a class="hover-lis"  href="#">Interesses</a></li>
                        <li><a class="hover-lis"  href="sobre.php">Sobre</a></li>

                        <li><a href="#"><i class="bi bi-pencil-square"></i></i>ㅤEditar perfil</a></li>
                        <li><a href="#"><i class="bi bi-gear-fill"></i>ㅤConfigurações</a></li>
                        <li><a href="contato.php"><i class="bi bi-question-circle-fill"></i></i>ㅤFale conosco</a></li>
                        <li><a href="anunciar_vaga.php"><i class="bi bi-megaphone-fill"></i>ㅤAnunciar vaga</a></li>
                    </ul>
                </div>
            </label>

            <div class="container">
                <a href="index.php"><img src="images/logos/arco-e-texto-dark.png" class="logo" alt="Logo"></a>
                <div class="container-inner">
                    <ul class="ul2">
                        <li><a href="#">Vagas</a></li>
                        <li><a href="#">Interesses</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
