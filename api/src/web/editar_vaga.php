<!DOCTYPE html>
<?php

include('../server/PDO/verifica_logado.php');
include('../server/PDO/acesso_telas_escola.php');
include('../server/edita_vaga.php');
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
    <title>QUIRON - EDITAR VAGA</title>

    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_l/anunciar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

</head>

<body>

    <div class="page">

        <br>

        <?php
        include('../server/PDO/navbar.php');
        ?>

        <center>
            <div class="container1">
                <div class="header">
                    <h1 id="title">Editar Vaga</h1>
                </div>

                <?php
                if (count($resultados)) {
                    foreach ($resultados as $Resultado) {

                ?>
                        <div class="div-container">
                            <div class="div-sub-container">
                                <form method="POST" class="form">
                                    <label for="name">Nome da matéria: </label><br>
                                    <input required maxlength="45" name="nome" class='input-textarea' value="<?php echo $Resultado['Materia']; ?>" type="text"> <br><br>

                                    <label for="name">Link de acesso no CPS:</label><br>
                                    <input required maxlength="127" name="link" class='input-textarea' value="<?php echo $Resultado['Link']; ?>" type="url"> <br><br>

                                    <label for="name">Descrição da vaga:</label><br>
                                    <textarea required maxlength="512" name="desc" class='input-textarea'><?php echo $Resultado['Descricao']; ?></textarea> <br><br>

                                    <label for="name">Requisito da vaga:</label><br>
                                    <textarea required maxlength="512" name="req" class='input-textarea'><?php echo $Resultado['Req']; ?></textarea> <br><br>

                                    <label for="name">Carga horária semanal:</label><br>
                                    <input required maxlength="64" name="carga" value="<?php echo $Resultado['Carga']; ?>" class='input-textarea' type="text"> <br><br>

                                    <label for="name">Média salarial:</label><br>
                                    <input required maxlength="45" name="faixa" value="<?php echo $Resultado['Faixa']; ?>" class='input-textarea' type="text" name="salarial" list="faixa">
                                    <datalist id="faixa">
                                        <option value="">Grade:</option>
                                        <option value="Mil - Dois mil"></option>
                                        <option value="Três mil - Quatro mil"></option>
                                        <option value="Cinco mil - Seis mil"></option>
                                        <option value="Mais"></option>
                                    </datalist> <br><br>

                                    <label for="name">Tipo de Grade:</label><br>
                                    <input required maxlength="45" name="grade" value="<?php echo $Resultado['Grade']; ?>" placeholder="ENSINO MÉDIO / TÉCNICO / TECNÓLOGO" class='input-textarea' type="text" name="grade" list="grade">
                                    <datalist id="grade">
                                        <option value="Ensino Médio">Componente Comum</option>
                                        <option value="Técnico">Curso</option>
                                        <option value="Tecnólogo">Curso</option>
                                    </datalist> <br><br>
                            </div>

                            <div class="linhaMeio"></div>

                            <center>
                                <div class="div-sub-container-2">
                                    <div class="ab">
                                    </div>
                                    <div class="ab">
                                        <img src="images/3.png" class="img-anunciar">
                                        <br>
                                        <input type="submit" class='botao-001' value="Editar Vaga">
                                        </form>
                                    </div>
                                    <div class="ab">
                                    </div>
                            </center>
                        </div>
    <?php
                    }
                }
    ?>
            </div>

    </center>
    <br>
    
    <?php include('partials/footer.php'); ?>
    </div>
    <?php
    include('partials/loadpage.php');
    ?>
</body>
</html>