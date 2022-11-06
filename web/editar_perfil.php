<!DOCTYPE html>
<?php
include('../server/atualiza_perfil.php');
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
    <title>QUIRON - EDITAR PERFIL</title>

    <link rel="stylesheet" href="styles/styles_l/perfil_escola.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

</head>

<body>

    <!-- COLOCAR DIV DE CONFIRMAÇÃO DE EDIÇÃO -->

    <?php
    include('../server/PDO/verifica_logado.php');
    include('../server/PDO/acesso_telas_escola.php');
    ?>
    <div class="page">

        <?php include('../server/PDO/navbar.php');

        if (isset($div_confirmacao)) {
            include('partials/confirmação-edit.php');
        } ?>


        <br><br><br><br>

        <center>
            <h1 class="h1002">Editar Perfil</h1>
        </center>

        <div class="div-pai">
            <?php
            if (count($resultados)) {
                foreach ($resultados as $Resultado) {

            ?>
                    <center>
                        <div class="div-alterar-img">
                            <div class="div-imagens">
                                <div class="div-ponta">
                                    <label for="base_img_1">
                                        <img style="cursor: pointer;" class="img-div-alterar-01" onerror="handleError2(this)" id="preview1" src="<?php echo $Resultado['Img1']; ?>">
                                    </label>
                                    <input style="display: none;" type="file" name="foto" class="input-file" id="base_img_1">
                                    <img id="imagem001" onclick="apagaFoto(1)" class="img-trash" src="images/svgs/trash.svg">
                                </div>

                                <div class="div-meio">
                                    <label for="base_img_2">
                                        <img style="cursor: pointer;" class="img-div-alterar-01" onerror="handleError2(this)" id="preview2" src="<?php echo $Resultado['Img2']; ?>">
                                    </label>

                                    <input style="display: none;" type="file" name="foto" class="input-file" id="base_img_2">
                                    <img id="imagem002" onclick="apagaFoto(2)" class="img-trash" src="images/svgs/trash.svg">
                                </div>

                                <div class="div-ultimo">
                                    <label for="base_img_3">
                                        <img style="cursor: pointer;" class="img-div-alterar-01" onerror="handleError2(this)" id="preview3" src="<?php echo $Resultado['Img3']; ?>">
                                    </label>

                                    <input style="display: none;" type="file" name="foto" class="input-file" id="base_img_3">
                                    <img id="imagem003" onclick="apagaFoto(3)" class="img-trash" src="images/svgs/trash.svg">
                                </div>
                            </div>
                        </div>
                    </center>

                    <br>
                    <script src="scripts/imagem_perfil.js"></script>

                    <center>
                        <div class="div-alterar-texto">
                            <form action="" method="POST" class="div-alterar-form">

                                <label class="form-cursos">Cursos: </label><br><textarea style="color: grey; font-weight: 300;" class="input-cursos" type="text" name="cursos" id="input-text-alterar2"> <?php echo $Resultado['Cursos']; ?> </textarea><br>

                                <label class="form-sobre">Sobre: </label><br><textarea style="color: grey; font-weight: 300;" type="text" name="sobre" class="input-sobre" id="input-text-alterar2"> <?php echo $Resultado['Sobre']; ?> </textarea><br>

                                <label class="form-equipe">Equipe: </label><br><textarea style="color: grey; font-weight: 300;" type="text" name="equipe" class="input-equipe" id="input-text-alterar2"><?php echo $Resultado['Equipe']; ?> </textarea>

                                <textarea id="texta_imagem1" style="display:none" name="imagem1"><?php echo $Resultado['Img1']; ?></textarea>
                                <textarea id="texta_imagem2" style="display:none" name="imagem2"><?php echo $Resultado['Img2']; ?></textarea>
                                <textarea id="texta_imagem3" style="display:none" name="imagem3"><?php echo $Resultado['Img3']; ?></textarea>

                                <br>
                                <input type="submit" name="submit" value="Editar" id="submit-text-alterar" class="submit-class"><br>
                            </form>
                        </div>
                <?php
                }
            }

                ?>
                    </center>
        </div>

        <?php include('partials/footer.php') ?>

    </div>

    <?php include('partials/loadpage.php') ?>
</body>

            </html>