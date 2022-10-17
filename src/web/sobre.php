<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON - SOBRE</title>

    <link rel="stylesheet" href="../web/styles/styles_g/styles-sobre.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

</head>
<body>
<?php 
    include('../server/PDO/navbar.php'); 
    include('../server/PDO/verifica_logado.php');
?>

    <br>
    <div class="div-sobre">
    <img class= "img" src="images/sobre1.png">

        <div class="conteudo_sobre">
            <h1 id="title">Quem somos nós?</h1>

            <div class="linha"></div>

            <br><br>
            <h1 class="text1">
                <p>Nós somos uma plataforma para divulgação de
                vagas destinadas à professores.</p> 
                
                <p>Temos como objetivo facilitar o processo para a 
                contratação de docentes nas instituições do CPS.</p>
            </h1>
            <br><br>
            <h1 class="title2">Você sabia?</h1>

            <div class="linha2"></div>

            <br><br>
            <h1 class="text2">
                <p>Na mitologia grega, Quíron foi um centauro que dentre 
                seus irmãos, se destacava por ser bondoso, inteligente
                e disciplinado.</p>  
                
                <p>Assim como o professor!</p>
            </h1>
        </div>
    </div>

   
    <?php include('partials/footer.php') ?>
</body>
</html>
