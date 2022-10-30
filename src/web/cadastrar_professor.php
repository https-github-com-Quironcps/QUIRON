<?php
//Incluir conexão
include("../server/PDO/conexao.php");
include("../server/cad_professor.php");
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

    <title>Cadastrar-se na QUIRON</title>


    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_m/cadastro.css">
    <link rel="stylesheet" href="styles/theme.css">
    <link rel="stylesheet" href="styles/styles_l/editar_info.css">
    <script src="scripts/ImagenError.js"></script>

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

</head>

<body>
    <div class="page">
        <?php
        include('partials/header-inicio.php');
        ?>
        <br><br>
        <br><br>

        <center>
            <h1 class="h1002">Crie sua conta</h1>
        </center>
        <?php
        if (isset($errors) && count($errors) > 0) {
            foreach ($errors as $error_msg) {
                echo '<div class="alert alert-danger">' . $error_msg . '</div>';
            }
        }

        if (isset($success)) {

            echo '<div class="alert alert-success">' . $success . '</div>';
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form" method="POST" enctype="multipart/form-data">

            <div class="div-mae">
                <div class="div-alterar-img">
                    <h3>Foto de perfil</h3>

                    <div class="sub-div-alterar-img">
                        <img src="<?php echo $Resultado['Foto']; ?>" onerror="handleError(this)" name="imagem" id="preview" class="imagem-anexo" alt="">
                    </div>

                    <input type="file" name="foto-p" class="input-file" id="base">
                    <label id="submit-text-alterar" class="abc001" for="base">Anexar</label>
                </div>

                <script src="scripts/mostrar_imagem.js"></script>

                <div class="div-alterar-texto2">
                    <div class="div-alterar-form2">

                        <label class="form-nome-completo aas">Nome completo: </label><input required maxlength="128" name="nome-p" class="input-nome input-text-alterar" type="text"><br>

                        <center> <label class="form-cpf2 aas">CPF: </label><input required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" name="cpf-p" type="number" class="input-cpf2 input-text-alterar" name="cpf-p"> <label class="form-nasc aas">Nascimento: </label><input required class='input-nasc input-text-alterar' name="data-p" type="date"><br></center>

                        <label class="form-endereco aas">Endereço: </label><input required maxlength="128" name="end-p" type="text" class="input-endereco input-text-alterar"> <label class="form-num aas"> Nº: </label><input required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="30" name="num-p" class="input-num input-text-alterar" type="number"><br>

                        <label class="form-bairro aas">Cidade: </label><input required maxlength="128" name="cidade-p" type="text" class="input-bairro input-text-alterar"> <label class="form-cep aas"> CEP: </label><input required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" name="cep-p" class="input-cep input-text-alterar" type="number"><br>

                        <label class="form-tel aas">Telefone: </label><input required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" name="tel-p" type="number" class="input-tel input-text-alterar"> <label class="form-email aas"> E-mail: </label><input required maxlength="128" name="email-p" class="input-email input-text-alterar" type="email"><br>

                        <center> <label name="senha" class="form-senha aas">Senha: </label><input required maxlength="45" name="senha-p" type="password" class="input-senha input-text-alterar"> </center>

                        <input type="submit" name="submit" value="Cadastrar-se" id="submit-text-alterar" class="submit-class">

                    </div>
                </div>

                <textarea style="display:none" name="imagem"></textarea>
            </div>
        </form>

        <br>
    </div>

    <?php include('partials/loadpage.php'); ?>

</body>

            </html>