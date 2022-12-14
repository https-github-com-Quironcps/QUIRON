<!DOCTYPE html>
<?php
include('../server/mandaTema.php');
include('../server/PDO/verifica_logado.php');
include('../server/PDO/acesso_telas_escola.php');
include('../server/cadastra_vaga.php');

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
    <title>QUÍRON - ANUNCIAR VAGA</title>

    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_l/anunciar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>
</head>

<body>
    <div class="page">
        <?php
        include('../server/PDO/navbar.php');
        ?>

        <center>
            <div class="container1">
                <div class="header">
                    <h1 id="title">Anunciar Vaga</h1>
                </div>

                <div class="div-container">
                    <div class="div-sub-container">
                        <form class="form" method="POST">
                            <label for="name">Nome da matéria: </label><br>
                            <input required maxlength="44" class='input-textarea' name="nome" type="text"> <br><br>

                            <label for="name">Link de acesso no CPS:</label><br>
                            <input required maxlength="127" class='input-textarea' name="link" type="url"> <br><br>

                            <label for="name">Descrição da vaga:</label><br>
                            <textarea required maxlength="512" class='input-textarea' name="descricao"></textarea> <br><br>

                            <label for="name">Requisito da vaga:</label><br>
                            <textarea required maxlength="512" class='input-textarea' name="requisitos"></textarea> <br><br>

                            <label for="name">Carga horária semanal:</label><br>
                            <input required maxlength="64" class='input-textarea' type="text" name="carga"> <br><br>

                            <label for="name">Média salarial:</label><br>
                            <input required maxlength="45" class='input-textarea' type="text" name="salarial" list="faixa">
                            <datalist id="faixa">
                                <option value="">Grade:</option>
                                <option value="Mil - Dois mil"></option>
                                <option value="Três mil - Quatro mil"></option>
                                <option value="Cinco mil - Seis mil"></option>
                                <option value="Mais"></option>
                            </datalist> <br><br>

                            <label for="name">Tipo de Grade:</label><br>
                            <input required maxlength="45" placeholder="ENSINO MÉDIO / TÉCNICO / TECNÓLOGO" class='input-textarea' type="text" name="grade" list="grade">
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
                                <br>
                                <input type="submit" name="input-enviar" class='botao-001' value="Anunciar Vaga">
                                </form>
                                <br>
                                <img src="images/2.png" onerror="handleError(this)" class="img-anunciar">
                            </div>
                            <div class="ab">
                            </div>

                    </center>
                </div>
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