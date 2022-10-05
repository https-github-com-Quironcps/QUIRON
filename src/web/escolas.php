<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_g/escolas.css">
    <link rel="stylesheet" href="styles/theme.css">
    <script src="scripts/ImagenError.js"></script>

    <title>QUIRON - ESCOLAS</title>
</head>
<body>

    <?php include('partials/header.php') ?>
    
    <div>
        <div class="filtros">
            <form action="" class="form" method="POST">
                <input class='input-textarea' type="text" maxlength="3" placeholder="Código da instituição">
                <input type="submit" class='botao-001' value="">
            </form>
        </div>
        <br>
        <center><h1 class="titulo1">Escolas disponíveis:</h1></center>
        
        <br>

        <center>
        <div class="conteudo">
            <!-- primeira linha -->
            <div class="table1">
                    <div class="td1"><img class= "foto-perfil" onerror="handleError(this)" src="#">
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                        </marquee>
                    </div>

                    <div class="td1"><img class= "foto-perfil" onerror="handleError(this)" src="#">
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                        </marquee>
                    </div>


                    <div class="td1"><img class= "foto-perfil" onerror="handleError(this)" src="#">
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                        </marquee>
                    </div>

                    <div class="td1"><img class= "foto-perfil" onerror="handleError(this)" src="images/etec.jpeg">
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                        </marquee>
                    </div>

                    <div class="td1"><img class= "foto-perfil" onerror="handleError(this)" src="#">
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                        </marquee>
                    </div>

                    <div class="td1"><img class= "foto-perfil" onerror="handleError(this)" src="#">
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                        </marquee>
                    </div>
                    <div class="td2">ㅤ</div>
        </div>
        </center>
        
    </div>

    <?php include('partials/footer.php'); ?>

</body>
</html>