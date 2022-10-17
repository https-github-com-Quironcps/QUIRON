<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../web/styles/styles_g/visualizar_escola.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <title>QUIRON - ESCOLA</title>
</head>
<body>

<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/verifica_logado.php');
?>

    <!-- div com informações (nome da escola, cursos) sobrepondo a imagem do topo -->

    <center>
        <div class="img-escola">

            <h1 class="titulo">ETEC Profª Ermelinda Giannini Teixeira</h1>

            <h5 class="subtitulo">
                <p>Administração, Desenvolvimento de sistemas, Recursos Humanos, Programação de Jogos e Marketing
            </h5>

            <div class="div-ponta"><img class="img-div-alterar-01" src="../web/images/ermelinda.jpeg"></div>
        
        </div>
    </center>
    <br><br>

<div class="div-total">
    <!-- div com as imagens da escola (canto esquerdo) -->

    <div class="imagens">

        <img class="sub-imagens" onerror="handleError(this)" src="" alt="">
        <img class="sub-imagens" onerror="handleError(this)" src="" alt=""><br>
        <img class="sub-imagens" onerror="handleError(this)" src="" alt=""><br>
        
    </div>

    <!-- div com informações sobre a escola (ao centro)-->

    
    <div class="div-info-escola">

        <h3 class="titulo-info">Sobre</h4>

        <center>
        <p class="p-div">
        The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.
        The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.
        The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.
        <br>The passage experienced a surge in popularity during the.
        </p>
        </center>

    </div>
    

    <!-- div com vagas disponíveis (canto direito) -->
    
    <div class="vagas">
        <h3 class="titulo-vagas">Vagas disponíveis</h4><br>
        
        <center>
        <div class="div-vaga">

        </div>
        </center><br>        
    </div>
</div>

    <!-- div com informações telefone, endereço e email -->

    <section class="div-icones">
        <center>
        <ul class="lista">
            <li>
                <a href=""><i class="bi bi-envelope"></i></a><br>
                <a href="">e187dir@cps.sp.gov.br</a>
            </li>
            <li>
                <a href=""><i class="bi bi-map"></i></a><br>
                <a href="">R. Fernão Dias Falcão, 196 - Centro, Santana de Parnaíba - SP, 06501-120</a>
            </li>
            <li>
                <a href=""><i class="bi bi-telephone"></i></a><br>
                <a href="">(11) 4154-7185 / 7142</a>
            </li>
        </ul>
        </center>
    </section>
</body>
</html>