<?php
include("../server/PDO/conexao.php");
include("../server/cad_escola.php");
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

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <script type="text/javascript" src="../web/scripts/preloader.js"></script>
</head>

<body>

    <?php
    include('../server/PDO/acesso_telas_desconhecido.php');
    ?>

    <div class="page">

        <?php include('partials/header-inicio.php'); ?>
        <br>

        <br><br><br><br>

        <center>
            <h1 class="h1002">Cadastre-se na QUÍRON</h1>
        </center>

        <?php
        if (isset($errors) && count($errors) > 0) {
            foreach ($errors as $error_msg) {
                echo '<div class="alert alert-danger"><center>' . $error_msg . '</center></div>';
            }
        }
        ?>


        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

            <div class="div-mae">

                <div class="div-alterar-img">
                    <h3>Divulgue sua escola</h3>

                    <div class="sub-div-alterar-img">
                        <img src="" onerror="handleError(this)" name="imagem" id="preview" class="imagem-anexo" alt="">
                    </div>

                    <input type="file" name="foto" class="input-file" id="base">
                    <label id="submit-text-alterar" class="abc001" for="base">Anexar</label>
                </div>

                <script src="scripts/mostrar_imagem.js"></script>

                <div class="div-alterar-texto">
                    <div class="div-alterar-form">
                        <label class="form-nome-completo aas">Nome da Instituição: </label><input value="<?php if(isset($valnome)){ echo $valnome; } ?>" required maxlength="128" name="nome-e" class="input-nome input-text-alterar" type="text"><br>

                        <label class="form-endereco aas">Endereço: </label><input value="<?php if(isset($valendereco)){ echo $valendereco; } ?>" required maxlength="128" name="end-e" type="text" class="input-endereco input-text-alterar"> <label class="form-num aas"> Nº: </label><input value="<?php if(isset($valnumero)){ echo $valnumero; } ?>" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="30" name="num-e" class="input-num input-text-alterar" type="number"><br>

                        <label class="form-bairro aas">Cidade: </label><input value="<?php if(isset($valcidade)){ echo $valcidade; } ?>" required maxlength="128" name="cidade-e" type="text" class="input-bairro input-text-alterar"> <label class="form-cep aas"> CEP: </label><input value="<?php if(isset($valcep)){ echo $valcep; } ?>" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" name="cep-e" class="input-cep input-text-alterar" type="number"><br>

                        <label class="form-tel aas">Telefone: </label><input value="<?php if(isset($valtelefone)){ echo $valtelefone; } ?>" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" name="tel-e" type="number" class="input-tel input-text-alterar"> <label class="form-email aas"> E-mail: </label><input required value="<?php if(isset($valemail)){ echo $valemail; } ?>" maxlength="128" name="email-e" class="input-email input-text-alterar" type="email"><br>

                        <center> <label name="senha" class="form-senha aas">Senha: </label><input value="<?php if(isset($valsenha)){ echo $valsenha; } ?>" required maxlength="45" name="senha-e" type="password" class="input-senha input-text-alterar"> <label class="form-cod">Código: </label><input value="<?php if(isset($valcodigo)){ echo $valcodigo; } ?>" maxlength="100" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required type="number" class="input-cod" name="cod-e" id="input-text-alterar"> </center>

                        <input type="submit" name="submit" value="Cadastrar-se" id="submit-text-alterar" class="submit-class">
                    </div>
                </div>

                <textarea style="display:none" name="imagem"></textarea>
            </div>
        </form>

        <?php include('partials/footer.php') ?>
        <br>
    </div>

    <?php
    include('partials/loadpage.php');
    ?>
</body>

            </html>