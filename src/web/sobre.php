<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/styles-sobre.css">
</head>
<body>

 <?php include('partials/header.php'); ?>

        <br><br><br>
        <div class="div-sobre">
            <h1 id="title">Quem somos nós?</h1>
        <div class="linha"></div>
        <br><br>
        <h1 class="text1">
            <p>Nós somos uma plataforma para divulgação de</p> 
            <p>vagas destinadas à professores.</p> 
            <br>
            <p>Temos como objetivo facilitar o processo para a</p> 
            <p>contratação de docentes nas instituições do CPS.</p>
        </h1>

        <br><br><br>

        <h1 class="title2">Você sabia?</h1>
        <div class="linha2"></div>
        <br><br>
        <h1 class="text2">
            <p>Na mitologia grega, Quíron foi um centauro que dentre</p> 
            <p>seus irmãos, se destacava por ser bondoso, inteligente</p>
            <p>e disciplinado.</p>  
            <br>
            <p>Assim como o professor!</p>
        </h1>
            <img class= "img" src="images/prof-sobre.png">
        </div>

    </div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
    <script type="text/javascript" src="../js/mobile.js"></script>
    
</body>
</html>
