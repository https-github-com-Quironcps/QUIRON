<?php
//Incluir conexão
include("../server/PDO/conexao.php");
include("../server/update_senha.php");
?>

<!DOCTYPE html>
<?php

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
    <title>QUIRON</title>


    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_m/cadastro.css">
    <link rel="stylesheet" href="styles/theme.css">
    <link rel="icon" href="../web/images/logos/arco-dark-2.png">
    
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>
    
</head>
<body>
  <div class="page">
<?php include('partials/header.php'); ?>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
 <center>
   <div class="container1">
        <div class="header">
            <h1 id="title">Insira sua nova senha</h1>
        </div> <br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="POST">
  <label for="name">Nova Senha:</label><br>
  <input class='input-textarea' name="nova-senha" type="text" id="nova-senha"> <br><br>

  <label for="name">Confirmar Senha:</label><br>
  <input class='input-textarea'name="confirmar-senha" type="text" id="confirmar-senha"> <br><br><br>

  <input type="submit" name="submit" class='botao-001' value="Atualizar Senha">
  <br>
<br>
<br>
</div>     
<center>

</div>

<?php include('partials/loadpage.php'); ?>
</body>
</html>