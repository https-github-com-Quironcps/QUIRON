
<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="scripts/ImagenError.js"></script>

    <!-- link para o CSS -->
    <link rel="stylesheet" href="../web/styles/styles_g/visualizar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <script src="../web/scripts/modo-dark.js"></script>
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

    <title>QUIRON - VAGAS</title>
</head>
<body>


    <div class="page">

    <div class="everybody">

    <i id="icon1" class="bi bi-arrow-left-short" onclick=""></i>
    <!-- <i id="icon1"  class="bi bi-x"></i> -->
       
        <div class="divlateral">

            <img class="img_etec" onerror="handleError(this)" src="<?php echo $Resultado['Foto']; ?>" alt="">
            
            <div class="icons">
                <!-- <div class="linha"></div> -->

                <!-- icon localização -->
                <div class="div-icon">                
                    <i id="icon" class="bi bi-geo-alt" onclick="alert('Endereço: <?php echo $Resultado['Endereco'].', '.$Resultado['EndNum'].' - '.$Resultado['Bairro'].' - '.$Resultado['CEP']?>')"></i><a class="info" href="">Endereço: <?php echo $Resultado['Endereco'].', '.$Resultado['EndNum'].' - '.$Resultado['Bairro'].' - '.$Resultado['CEP']?></a>

                </div>

                <!-- icon telefone -->
                <div class="div-icon">
                    <i id="icon" class="bi bi-phone" onclick="alert('<?php echo $Resultado['Telefone']; ?>')"></i><a class="info" href=""><?php echo $Resultado['Telefone']; ?></a>
                </div>
                
                <!-- icon link -->
                
                
                <!-- icon email -->
                <div class="div-icon">
                    <i id="icon" class="bi bi-envelope" onclick="alert('<?php echo $Resultado['Email']; ?>')" ></i><a class="info" href=""><?php echo $Resultado['Email']; ?></a> 
                </div>
            </div>

        </div><br>

        <div class="aside">

        <div class="linha1">
            <!-- descrição da vaga -->
            <div class="desc-vaga">
            <h6 class="title02">Professor para <?php echo $Vagas['Vaga'];?></h6>
             <h5 class="h5a"><?php echo $Vagas['VagaDesc'];?>
             </h5>
            </div>

            <!-- requisitos da vaga -->
            <div class="req-vaga">
            <h6 class="title02">Requisitos da Vaga</h6>
             <h5 class="h5a"><?php echo $Vagas['VagaReq'];?></h5>
            </div>
        </div>

        <div class="linha2">
            <!-- carga horária semanal -->
            <div class="desc-vaga">
            <h6 class="title02">Carga Horária</h6>
                <div class="carg-horaria"><h5 class="h5a"><?php echo $Vagas['VagaCarga']; ?></h5></div>
            </div>

             <!-- média salarial -->
            <div class="req-vaga">
            <h6 class="title02">Média salarial</h6>
                <div class="carg-horaria"><h5 class="h5a"><?php echo $Vagas['VagaFaixa']; ?></h5></div><br>
                <div>
                    <button class="botão-01" type="submit" href="#">Favoritar</button>
                    <span id="coracaovazio" class="bi bi-heart"></span>
                    <span id="coracaocheio" class="bi bi-heart-fill"></span>
                </div>
            </div>
        </div>
    
        </div>
    </div>
   </div>

    <?php include('partials/loadpage.php'); ?>
</body>
</html>

