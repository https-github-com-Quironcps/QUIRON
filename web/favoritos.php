<!DOCTYPE html>
<?php
include('../server/mandaTema.php');
include('../server/meusFavoritos.php');

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
    <link rel="stylesheet" href="../web/styles/styles_l/minhas_vagas.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

    <title>QUIRON - MINHAS VAGAS</title>
</head>
<body>

    <div class="page">

    <?php include('../server/PDO/navbar.php'); ?>

    <center><h1 class="h1002">Meus favoritos</h1></center>

        <div class="div-total">
            <div class="conteudo">
            <center>
                <br>
                <?php
                if (count($favoritos)) {
                    $int_num = 0;

                    foreach ($favoritos as $Resultado) {
                        $int_num++;
                ?>
                <div class="table1">
                    <div class="td1"><?php echo $int_num;?></div>

                    <div class="td2"><h6 class="nome_materia"><?php echo $Resultado['Nmv']; ?></h6></div>

                    <?php 
                    $stp = $pdo->prepare('SELECT TB_VAGA.FK_INSTITUICAO AS Idi FROM TB_VAGA
                    WHERE TB_VAGA_ID LIKE :VAGAID');

                    $stp->bindParam(':VAGAID', $Resultado['Idv'], PDO::PARAM_STR);

                    $stp->execute();

                    $resultados = $stp->fetchAll(PDO::FETCH_ASSOC);

                    if (count($resultados)) {
                        foreach ($resultados as $Res) {
                    ?>
                    <div class="td3"><a href="../server/pega_id_escola.php" onclick="location.href=this.href+'?cod='+<?php echo $Res['Idi'];?>;return false;"><i id="icone20" class="bi bi-arrow-90deg-right"></i></a></div>
                    <?php }
                    }
                    ?>
                    <div class="td4"><a href="../server/pega_id_vaga.php" onclick="location.href=this.href+'?codigoFav='+<?php echo $Resultado['Idf'];?>;return false;"><i id="icone20" class="bi bi-trash"></i></a></div>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        
        </center>
        </div>

    <?php include('partials/footer.php'); ?>

    </div>

    <?php include('partials/loadpage.php'); ?>

</body>
</html>