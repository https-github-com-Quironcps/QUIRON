<?php
include('../server/atualiza_escola.php');
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
    <title>QUIRON - CONFIGURAÇÕES</title>

    <link rel="stylesheet" href="styles/styles_l/editar_info.css">
    <link rel="stylesheet" href="styles/theme.css">
    <script src="scripts/ImagenError.js"></script>

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>
    <script src="scripts/mask.js"></script>

</head>

<body>
    <div class="page">
        <?php
        include('../server/PDO/navbar.php');
        include('../server/PDO/verifica_logado.php');
        include('../server/PDO/acesso_telas_escola.php');

        if (isset($div_confirmacao)) {
            include('partials/confirmação-edit.php');
        }

        include('partials/aviso-excluir-conta.php');
        ?>

        <br><br><br><br>

        <center>
            <h1 class="h1002">Editar informações da conta</h1>
        </center>

        <?php 
        include('partials/div-imagem.php'); 
        
        if (isset($errors) && count($errors) > 0) {
            foreach ($errors as $error_msg) {
                echo '<div class="alert alert-danger"><center>' . $error_msg . '</center></div>';
            }
        }
        ?>


        <form method="POST" enctype="multipart/form-data">

            <div class="div-mae">
                <?php
                if (count($resultados)) {
                    foreach ($resultados as $Resultado) {
                ?>

                        <div class="div-alterar-img">
                            <h3>Divulgue sua escola</h3>

                            <div class="sub-div-alterar-img">
                                <img src="<?php echo $Resultado['Foto']; ?>" onclick="chamaDiv2('<?php echo $Resultado['Foto']; ?>')" onerror="handleError(this)" name="imagem" id="preview" class="imagem-anexo" alt="">
                            </div>

                            <input type="file" name="foto" class="input-file" id="base">
                            <label id="submit-text-alterar" class="abc001" for="base">Anexar</label>
                        </div>

                        <script src="scripts/mostrar_imagem.js"></script>


                        <div class="div-alterar-texto">
                            <div class="div-alterar-form">
                                <label class="form-nome">Nome da instituição: </label><input value="<?php echo $Resultado['Nome']; ?>" maxlength="128" required class="input-sozinho input-text-alterar" name="nome" type="text"><br>

                                <label class="form-endereco aas">Endereço: </label><input value="<?php echo $Resultado['Endereco']; ?>" maxlength="128" name="endereco" type="text" required class="input-endereco input-text-alterar"> <label class="form-num aas"> Nº: </label><input value="<?php echo $Resultado['Numero_endereco']; ?>" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="30" name="num" class="input-num input-text-alterar" type="number"><br>

                                <label class="form-bairro aas">Cidade: </label><input value="<?php echo $Resultado['Bairro']; ?>" maxlength="128" name="bairro" type="text" required class="input-bairro input-text-alterar"> <label class="form-cep aas"> CEP: </label><input value="<?php echo $Resultado['Cep']; ?>" name="cep" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" class="input-cep input-text-alterar" type="number"><br>

                                <label class="form-tel aas">Telefone: </label><input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" type="number" value="<?php echo $Resultado['Telefone']; ?>" required name="telefone" class="input-tel input-text-alterar"> <label class="form-email aas"> E-mail: </label><input maxlength="128" required class="input-email input-text-alterar" value="<?php echo $Resultado['Email']; ?>" name="email" type="email"><br>

                                <center> <label class="form-senha aas">Senha: </label><input maxlength="45" type="password" value="<?php echo $Resultado['Senha']; ?>" required name="senha" class="input-senha input-text-alterar"> <label class="form-cod aas">Código: </label><input type="number" required maxlength="100" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="input-cod input-text-alterar" value="<?php echo $Resultado['Codigo']; ?>" name="cod"></center>


                                <input type="submit" value="Editar" id="submit-text-alterar" class="submit-class"> <a style="text-decoration: none; color:white;" onclick="chamaDivEx()">
                                    <div style="cursor: pointer; padding-top: 7px; text-align: center;" id="submit-text-alterar-2" class="submit-class">Deletar Conta</div>
                                </a>

                            </div>
                        </div>

                        <textarea style="display:none" name="imagem"><?php echo $Resultado['Foto']; ?></textarea>
                <?php
                    }
                }
                ?>
            </div>
        </form>
        <?php include('partials/footer.php') ?>
    </div>
    <?php include('partials/loadpage.php'); ?>
</body>

            </html>