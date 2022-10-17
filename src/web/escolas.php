<?php
    include ('../server/busca_escolas.php'); 
?>

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

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <title>QUIRON - ESCOLAS</title>
</head>
<body>
    <?php 
        include('../server/PDO/navbar.php'); 
        include('../server/PDO/verifica_logado.php');
    ?>
        
    <div>
        <div class="filtros">
                <form class="form" method="POST">
                    <input class='input-textarea' name="cod" value="<?php echo $cod; ?>" type="number" maxlength="3" placeholder="Código da instituição">
                    <button type="submit" class='botao-001'></button>
                </form>
        </div>
        <br>
        <center><h1 class="titulo1">Escolas disponíveis:</h1></center>
        
        <br>

        <center>
        <div class="conteudo">
            <!-- primeira linha -->
            <div class="table1">
                <?php   
                    if (count($resultados)) {
                    foreach($resultados as $Resultado){
                ?>
                        <div class="td1">
                            <img class="foto-perfil" onerror="handleError(this)" src="<?php echo $Resultado['Foto']; ?>">

                            <marquee behavior="slide" direction="left">
                                <h6><?php echo $Resultado['Nome']; ?></h6>
                            </marquee>
                        </div>
                   
                <?php
                    }}
                ?>
                    <div class="td2">ㅤ</div>
        </div>
        </center>
        
    </div>

    <?php include('partials/footer.php'); ?>

</body>
</html>