<?php
    include_once '../server/PDO/conexao.php';
    include('../server/mandaTema.php');
?>

<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/navbar-professor.css">
    <link rel="stylesheet" href="styles/theme.css">

    <!-- <script src="../web/scripts/modo-dark.js"></script> -->

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
                        <li><a class="hover-lis" href="./">Vagas</a></li>
                        <li><a class="hover-lis" href="escolas">Escolas</a></li>
                        <li><a class="hover-lis"  href="sobre">Sobre</a></li>

                        <li><a href="editar_info_conta_professor"><i class="bi bi-pencil-square"></i></i>ㅤEditar perfil</a></li>
                        <li><a href="contato"><i class="bi bi-question-circle-fill"></i></i>ㅤFale conosco</a></li>
                        <br><br>

                        <div class="div-modo">
                            <a class="text-modo">Modo escuro:</a>
                            <input type="checkbox" onclick="javacript:window.location.href = './../server/mudaTema.php?tema=andamento'" class="check-modo" name="" id="">
                            <a id="exit" href="../server/sair.php"><i class="bi bi-box-arrow-left"></i></a>
                        </div>            

                    </ul>

                </div>
            </label>

            <?php
            $light = "images/logos/arco-e-texto-light.png";
            $dark = "images/logos/arco-e-texto-dark.png";

            if (count($tema)) {
                foreach ($tema as $Tema) {

                    if ($Tema['MODO'] == 1) {

                        $logo_nav = $dark;
                    } elseif ($Tema['MODO'] == 0) {

                        $logo_nav = $light;
                    } else {

                        $logo_nav = $dark;
                    } ?>

                    <div class="container">
                        <a href="./">
                            <img src="<?php echo $logo_nav; ?>" id="imagemNav" class="logo" alt="Logo">
                    <?php
                }
            } ?></a>
                <div class="container-inner">
                    <ul class="ul2">
                        <li><a href="./">Vagas</a></li>
                        <li><a href="escolas">Escolas</a></li>
                        <li><a href="sobre">Sobre</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
