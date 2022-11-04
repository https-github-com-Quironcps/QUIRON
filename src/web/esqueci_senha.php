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
    <title>QUIRON</title>


    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_m/cadastro.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

</head>
<body>

<?php 
    include('../server/PDO/acesso_telas_desconhecido.php');
?>

  <div class="page">

<?php include('../server/PDO/navbar.php'); ?>
   <br>
   <br>
   <br>

 <center>
   <div class="container2">
        <div class="header">
            <h1 id="title">Confirme seu e-mail para redefinir sua senha</h1>
            <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
        </div> <br>

<form name="formsenha" class="form" method="POST" action="">
                    <label for="name">E-mail:</label><br>
                    <input class='input-textarea' name="email_send" id="email_send" type="text"> <br><br><br>

                    <input type="submit" class='botao-001' name="submit" id="submit" value="Enviar">
                    <br><br><br>
</div>     
<center>

  </div>
  <?php include('partials/loadpage.php'); ?>

</body>
</html>