<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_l/minhas_vagas.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <title>QUIRON - MINHAS VAGAS</title>
</head>
<body>
<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/verifica_logado.php');
    include('../server/PDO/acesso_telas_escola.php');
    include('../server/busca_vagas_por_escola.php');
?>

    <center><h1 class="h1002">Minhas vagas</h1></center>

        <div class="div-total">
            <div class="conteudo">
            <center>
                <div class="anunciar">
                    <a href="anunciar_vaga">Anunciar Vaga</a>
                </div>
                <br>
                <?php
                if (count($resultados)) {
                    $int_num = 0;

                    foreach ($resultados as $Resultado) {
                        $int_num++;
                ?>
                <div class="table1">
                    <div class="td1"><?php echo $int_num;?></div>

                    <div class="td2"><h6 class="nome_materia"><?php echo $Resultado['Materia']; ?></h6></div>

                    <div class="td3"><a href="editar_vaga" onclick="location.href=this.href+'?cod='+<?php echo $Resultado['Id'];?>;return false;"><img class="trash-square" src="images/svgs/editar.svg"></a></div>

                    <div class="td4"><a href=""><img class="trash-square" src="images/svgs/trash.svg"></a></div>
                </div>
                <?php
                    }}
                ?>
            </div>
        
        </center>
        </div>
    </div>

    <?php include('partials/footer.php'); ?>

</body>
</html>