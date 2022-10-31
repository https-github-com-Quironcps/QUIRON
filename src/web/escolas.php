<?php
    include ('../server/busca_escolas.php'); 
    include('../server/PDO/theme.php');
?>

<!DOCTYPE html>
<?php
include('../server/mandaTema.php');
if (isset($tema)) {
    if (count($tema)) {
        foreach ($tema as $Tema) {
            if ($Tema['MODO'] == 1) {
                $tela_tema = 'light';
            } elseif ($Tema['MODO'] == 0) {
                $tela_tema = 'light dark';
            } else {
                $tela_tema = 'light';
            }
?>

            <html lang="pt-br" class="<?php echo $tela_tema; ?>" id="page">

<?php }
    }
} ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_g/escolas.css">
    <link rel="stylesheet" href="styles/theme.css">
    <script src="scripts/ImagenError.js"></script>

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

    <title>QUIRON - ESCOLAS</title>
</head>
<body>

    <?php 
        include('../server/PDO/verifica_logado.php');
    ?>

    <div class="page">

    <?php include('../server/PDO/navbar.php'); ?>
    
    <div>
        <div class="filtros">
                <form class="form" method="POST">
                    <input class='input-textarea' maxlength="80" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="cod" value="<?php echo $cod; ?>" type="number" maxlength="3" placeholder="Código da instituição">
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
                <a class="td1" href="../server/pega_id_escola.php" onclick="location.href=this.href+'?cod='+<?php echo $Resultado['Id'];?>;return false;">
                        
                            <img class="foto-perfil" onerror="handleErrorEscola(this)" src="<?php echo $Resultado['Foto']; ?>">

                            <marquee behavior="slide" direction="left">
                                <h6><?php echo $Resultado['Nome']; ?></h6>
                            </marquee>
                        
                        </a>
                <?php
                    }}
                ?>
                    <div class="td2">ㅤ</div>
        </div>
        </center>
        
    </div>

    <?php include('partials/footer.php'); ?>

    </div>

    <?php include('partials/loadpage.php'); ?>
</body>
</html>