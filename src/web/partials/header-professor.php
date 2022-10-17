<?php
    include_once '../server/PDO/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/navbar-professor.css">
    <link rel="stylesheet" href="styles/theme.css">

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
                <input type="checkbox" class="inputNav">
                <div class="toggle">
                    <span class="top_line common"></span>
                    <span class="middle_line common"></span>
                    <span class="bottom_line common"></span>
                </div>
                
                <div class="slide">
                    <ul class="ul1">
                        <li><a class="hover-lis" href="index.php">Vagas</a></li>
                        <li><a class="hover-lis" href="escolas.php">Escolas</a></li>
                        <li><a class="hover-lis"  href="sobre.php">Sobre</a></li>

                        <li><a href="editar_info_conta_professor.php"><i class="bi bi-pencil-square"></i></i>ㅤEditar perfil</a></li>
                        <li><a href="contato.php"><i class="bi bi-question-circle-fill"></i></i>ㅤFale conosco</a></li>
                        <br><br>

                        <div class="div-modo">
                            <a class="text-modo">Modo escuro:</a>
                            <input type="checkbox" onclick="javascript:themeToggle()" class="check-modo" name="" id="">
                            <a id="exit" href="../server/sair.php"><i class="bi bi-box-arrow-left"></i></a>
                        </div>            

                    </ul>

                </div>
            </label>

            <div class="container">
                <a href="index.php"><img src="images/logos/arco-e-texto-dark.png" id="imagemNav" class="logo" alt="Logo"></a>
                <div class="container-inner">
                    <ul class="ul2">
                        <li><a href="index.php">Vagas</a></li>
                        <li><a href="escolas.php">Escolas</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
