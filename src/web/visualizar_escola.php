<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../web/styles/styles_g/visualizar_escola.css">
    <link rel="stylesheet" href="../web/styles/styles_g/visualizar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <title>QUIRON - ESCOLA</title>
</head>
<body>

<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/verifica_logado.php');
    include('../server/lista_escola.php');

    if (count($resultados)) {
        foreach($resultados as $Resultado){
?>

    <!-- div com informações (nome da escola, cursos) sobrepondo a imagem do topo -->

    <center>
        <div class="img-escola">

            <h1 class="titulo">
                <?php 
                echo $Resultado['Nome']; 
                ?>
            </h1>

            <h5 class="subtitulo">
                <p><?php echo $Resultado['Cursos']; ?>
            </h5>

            <div class="div-ponta"><img class="img-div-alterar-01" onerror="Black(this)" src="<?php echo $Resultado['Foto']; ?>"></div>
        
        </div>
    </center>
    <br><br>

<div class="div-total">
    <!-- div com as imagens da escola (canto esquerdo) -->

    <div class="imagens">

        <img class="sub-imagens" onerror="handleErrorEscola(this)" src="<?php echo $Resultado['ImgPost1']; ?>" alt="">
        <img class="sub-imagens" onerror="handleErrorEscola(this)" src="<?php echo $Resultado['ImgPost2']; ?>" alt=""><br>
        <img class="sub-imagens" onerror="handleErrorEscola(this)" src="<?php echo $Resultado['ImgPost3']; ?>" alt=""><br>
        
    </div>

    <!-- div com informações sobre a escola (ao centro)-->

    
    <div class="div-info-escola">

        <h3 class="titulo-info">Sobre</h4>

        <center>
        <p class="p-div">
        <?php echo $Resultado['Sobre']; ?>
        </p>
        </center>

    </div>
    

    <!-- div com vagas disponíveis (canto direito) -->
    
    <div class="vagas">
        <h3 class="titulo-vagas">Vagas disponíveis</h4><br>
        
        <center>
    <?php
        }}

        if (count($vagas)) {
            foreach($vagas as $Vagas){
    ?>
        <table class="div-vaga">
            <tr>
                <td>
                <?php include('visualizar_vaga.php'); ?>
                <div class="vagas_link" href="" onclick="">
                        <input class='check-vaga'type="checkbox" name="" id="">
                        <h6 class="nome_materia"><?php echo $Vagas['Vaga']; ?></h6>
                    </div>
                </td>
            </tr>
        </table>
    <?php

        }}

        if (count($resultados)) {
            foreach($resultados as $Resultado){
    ?>
        
        </center><br>        
    </div>
</div>

    <!-- div com informações telefone, endereço e email -->

    <section class="div-icones">
        <center>
        <ul class="lista">
            <li>
                <a href="#"><i class="bi bi-envelope"></i></a><br>
                <a href="#"><?php echo $Resultado['Email']; ?></a>
            </li>
            <li>
                <a href="#"><i class="bi bi-map"></i></a><br>
                <a href="#"><?php echo $Resultado['Endereco'].', '.$Resultado['EndNum'].' - '.$Resultado['Bairro'].' - '.$Resultado['CEP']?></a>
            </li>
            <li>
                <a href="#"><i class="bi bi-telephone"></i></a><br>
                <a href="#"><?php echo $Resultado['Telefone']; ?></a>
            </li>
        </ul>
        </center>
    </section>
<?php
    }}
?>
</body>
</html>