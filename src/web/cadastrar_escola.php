

<?php
    // include('../server/atualiza_escola.php');
    include("../server/cad_escola.php");
?>

<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON - CONFIGURAÇÕES</title>

    <link rel="stylesheet" href="styles/styles_l/editar_info.css">
    <link rel="stylesheet" href="styles/theme.css">
    <script src="scripts/ImagenError.js"></script>
    
    <link rel="icon" href="../web/images/logos/arco-dark-2.png">
    
</head>
<body>
<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/acesso_telas_desconhecido.php');
?>

<br><br><br><br>

    <center><h1 class="h1002">Cadastre-se na QUÍRON</h1></center>

    <form method="POST" enctype="multipart/form-data">

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
            
                <label class="form-nome">Nome da instituição: </label><input class="input-sozinho" name="nome-e" type="text" maxlength="128" id="input-text-alterar" required><br>
                
                <label class="form-endereco">Endereço: </label><input name="end-e" type="text" maxlength="128" class="input-endereco" id="input-text-alterar" required> <label class="form-num"> Nº: </label><input maxlength="6" required name="num-e" class="input-num" type="number" id="input-text-alterar"><br>
                
                <label class="form-bairro">Cidade: </label><input name="bairro-e" type="text" maxlength="128" class="input-bairro" id="input-text-alterar" required> <label class="form-cep"> CEP: </label><input name="cep-e" class="input-cep" type="number" id="input-text-alterar" maxlength="8" required><br>
                
                <label class="form-tel">Telefone: </label><input type="number" maxlength="11" name="tel-e" class="input-tel" id="input-text-alterar" required> <label class="form-email"> E-mail: </label><input required class="input-email" maxlength="128" name="email-e" type="email" id="input-text-alterar"><br>

                <center> <label class="form-senha">Senha: </label><input required maxlength="45" type="password" name="senha-e" class="input-senha" id="input-text-alterar"> <label class="form-cod">Código: </label><input maxlength="100" required type="number" class="input-cod" name="cod-e" id="input-text-alterar"></center>
                
                <input type="submit" value="Cadastrar-se" id="submit-text-alterar" class="submit-class"> <input type="submit" name="submit" value="Voltar" id="submit-text-alterar-2" class="submit-class"> 
            
            </div>
        </div>
        
        <textarea style="display:none" name="imagem"></textarea>
    </div>
</form>

<?php include('partials/footer.php') ?>
</body>
</html>