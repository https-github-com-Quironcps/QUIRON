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
    
</head>
<body>
    <div class="page">
<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/verifica_logado.php');
    include('../server/PDO/acesso_telas_escola.php');
?>

<br><br><br><br>

    <center><h1 class="h1002">Editar informações da conta</h1></center>

    <form method="POST" enctype="multipart/form-data">

    <div class="div-mae">
        <?php   
            if (count($resultados)) {
            foreach($resultados as $Resultado){
        ?>

        <div class="div-alterar-img">
            <h3>Divulgue sua escola</h3>

            <div class="sub-div-alterar-img">
                <img src="<?php echo $Resultado['Foto']; ?>" onerror="handleError(this)" name="imagem" id="preview" class="imagem-anexo" alt="">
            </div>

            <input type="file" name="foto" class="input-file" id="base"> 
            <label id="submit-text-alterar" class="abc001" for="base">Anexar</label>
        </div>

        <script src="scripts/mostrar_imagem.js"></script>


        <div class="div-alterar-texto">
            <div class="div-alterar-form">
                <label class="form-nome">Nome da instituição: </label><input value="<?php echo $Resultado['Nome']; ?>" class="input-sozinho" name="nome" type="text" id="input-text-alterar"><br>
                
                <label class="form-endereco">Endereço: </label><input value="<?php echo $Resultado['Endereco']; ?>" name="endereco" type="text" class="input-endereco" id="input-text-alterar"> <label class="form-num"> Nº: </label><input value="<?php echo $Resultado['Numero_endereco']; ?>" name="num" class="input-num" type="number" id="input-text-alterar"><br>
                
                <label class="form-bairro">Cidade: </label><input value="<?php echo $Resultado['Bairro']; ?>" name="bairro" type="text" class="input-bairro" id="input-text-alterar"> <label class="form-cep"> CEP: </label><input value="<?php echo $Resultado['Cep']; ?>" name="cep" class="input-cep" type="number" id="input-text-alterar"><br>
                
                <label class="form-tel">Telefone: </label><input type="number" value="<?php echo $Resultado['Telefone']; ?>" name="telefone" class="input-tel" id="input-text-alterar"> <label class="form-email"> E-mail: </label><input class="input-email" value="<?php echo $Resultado['Email']; ?>" name="email" type="email" id="input-text-alterar"><br>

                <center> <label class="form-senha">Senha: </label><input type="password" value="<?php echo $Resultado['Senha']; ?>" name="senha" class="input-senha" id="input-text-alterar"> <label class="form-cod">Código: </label><input type="number" class="input-cod" value="<?php echo $Resultado['Codigo']; ?>" name="cod" id="input-text-alterar"></center>
                
                <input type="submit" value="Editar" id="submit-text-alterar" class="submit-class"> <input type="submit" name="editar" value="Deletar Conta" id="submit-text-alterar-2" class="submit-class"> 
            
            </div>
        </div>
        
        <textarea style="display:none" name="imagem"><?php echo $Resultado['Foto']; ?></textarea>
        <?php
            }}
        ?>
    </div>
</form>
<?php include('partials/confirmação-edit.php') ?>
<?php include('partials/footer.php') ?>
    </div>
    <?php include('partials/loadpage.php'); ?>
</body>
</html>