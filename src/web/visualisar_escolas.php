<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- links para os ícones -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_g/visualizar_escola.css">
    <title>PERFIL ESCOLA</title>
</head>
<body>

    <?php include ('partials/header.php') ?>

    <!-- div com informações (nome da escola, cursos) sobrepondo a imagem do topo -->

    <center>
        <div class="img-escola">

            <h1 class="titulo">ETEC Profª Ermelinda Giannini Teixeira</h1>

            <h5 class="subtitulo">
                <p>Administração, Desenvolvimento de sistemas e</p>
                <p>Recursos Humanos</p>
            </h5>

            <div class="div-ponta"><img class="img-div-alterar-01" src="../web/images/ermelinda.jpeg"></div>
        
        </div>
    </center>
    <br><br>

    <!-- div com vagas disponíveis (canto direito) -->

    <div class="vagas">
        <h3 class="titulo-vagas">Vagas disponíveis</h4><br>
        
        <center>
        <div class="div-vaga">

        </div>
        </center><br>

        <center>
        <div class="div-vaga">

        </div>
        </center><br>

        <center>
        <div class="div-vaga">

        </div>
        </center><br>

        <center>
        <div class="div-vaga">

        </div>
        </center><br>

        <center>
        <div class="div-vaga">

        </div>
        </center><br>
    </div>

    <!-- div com informações sobre a escola (ao centro)-->

    <center>
        <div class="div-info-escola">

        <h3 class="titulo-info">Sobre</h4>

        <center>
        <p class="p-div">
        The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.
        <br>The passage experienced a surge in popularity during the.
        </p>
        </center>

        </div>
    </center>

    <!-- div com as imagens da escola (canto esquerdo) -->

    <div class="imagens">

    </div>

    <!-- div com informações telefone, endereço e email -->

    <section class="div-icones">
        <div class="icones">
            <a href=""><i class="bi bi-envelope"></i></a>
            <a href=""><i class="bi bi-map"></i></a>
            <a href=""><i class="bi bi-telephone"></i></a>
        </div>

        <ul class="lista">
            <li>
                <a href="">e187dir@cps.sp.gov.br</a>
            </li>
            <li>
                <a href="">R. Fernão Dias Falcão, 196 - Centro, Santana de Parnaíba - SP, 06501-120</a>
            </li>
            <li>
                <a href="">(11) 4154-7185 / 7142</a>
            </li>
        </ul>

    </section>

    <?php include('partials/footer.php'); ?>

</body>
</html>