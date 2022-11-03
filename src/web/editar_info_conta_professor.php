<?php
include('../server/atualiza_professor.php');
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

</head>

<body>
    <?php
    include('../server/PDO/verifica_logado.php');
    include('../server/PDO/acesso_telas_professor.php');
    ?>

<div class="page">
<?php include('../server/PDO/navbar.php'); 

if(isset($div_confirmacao)){
    include('partials/confirmação-edit.php');
}?>

<br><br><br><br>

    <center>
        <h1 class="h1002">Editar informações da conta</h1>
    </center>

    <form method="POST" enctype="multipart/form-data">

        <div class="div-mae">
            <?php
            if (count($resultados)) {
                foreach ($resultados as $Resultado) {
            ?>
                    <div class="div-alterar-img">
                        <h3>Foto de perfil</h3>

                        <div class="sub-div-alterar-img">
                            <img src="<?php echo $Resultado['Foto']; ?>" onerror="handleError(this)" name="imagem" id="preview" class="imagem-anexo" alt="">
                        </div>

                        <input type="file" name="foto" class="input-file" id="base">
                        <label id="submit-text-alterar" class="abc001" for="base">Anexar</label>
                    </div>

                    <script src="scripts/mostrar_imagem.js"></script>

                    <div class="div-alterar-texto">
                        <div class="div-alterar-form">

                            <label class="form-nome-completo aas">Nome completo: </label><input required value="<?php echo $Resultado['Nome']; ?>" maxlength="128" name="nome" class="input-nome input-text-alterar" type="text"><br>

                            <label class="form-endereco aas">Endereço: </label><input required value="<?php echo $Resultado['Endereco']; ?>" maxlength="128" name="endereco" type="text" class="input-endereco input-text-alterar"> <label class="form-num aas"> Nº: </label><input required value="<?php echo $Resultado['Numero_endereco']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="30" name="num" class="input-num input-text-alterar" type="number"><br>

                            <label class="form-bairro aas">Cidade: </label><input required value="<?php echo $Resultado['Bairro']; ?>" maxlength="128" name="bairro" type="text" class="input-bairro input-text-alterar"> <label class="form-cep aas"> CEP: </label><input required value="<?php echo $Resultado['Cep']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" name="cep" class="input-cep input-text-alterar" type="number"><br>

                            <label class="form-tel aas">Telefone: </label><input required value="<?php echo $Resultado['Telefone']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" name="telefone" type="number" class="input-tel input-text-alterar"> <label class="form-email aas"> E-mail: </label><input required value="<?php echo $Resultado['Email']; ?>" maxlength="128" name="email" class="input-email input-text-alterar" type="email"><br>

                            <center> <label class="form-cpf aas">CPF: </label><input required value="<?php echo $Resultado['CPF']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" name="cpf" type="number" class="input-cpf input-text-alterar" name="cpf"> <label class="form-senha aas">Senha: </label><input required value="<?php echo $Resultado['Senha']; ?>" maxlength="45" name="senha" type="password" class="input-senha input-text-alterar"> </center>

                            <input type="submit" value="Editar" id="submit-text-alterar" class="submit-class"> <a style="text-decoration: none; color:white;" href="../server/excluir_professor.php"><div style="padding-top: 7px; text-align: center;" id="submit-text-alterar-2" class="submit-class">Deletar Conta</div></a>
                            
                            
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

    <?php include('partials/loadpage.php') ?>

</body>

</html>