<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="../css/styles-navbar.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<header>
    <div class="hero">
        <nav>
            <img src="../img/arco-e-texto-light.png" class="logo" alt="Logo">
            <ul>
                <li><a class="ab" href="#">Vagas</a></li>
                <li><a class="ab" href="#">Meus Interesses</a></li>
                <li><a class="ab" href="#">Sobre</a></li>
            </ul>

            <p class="menu cta">MENU</p>

            <img src="../img/etec.jpeg" class="user" onclick="toggleMenu()" alt="Logo">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="../img/etec.jpeg">
                        <h3>ETEC Ermelinda</h3>
                    </div>
                    <hr>

                    <a href="#" class="sub-menu-link">
                        <img src="../img/pencil-square.svg" alt="" srcset="">
                        <p>Editar Perfil</p>
                        <span>></span>
                    </a>

                    <a href="#" class="sub-menu-link">
                        <img src="../img/gear-fill.svg" alt="" srcset="">
                        <p>Configurações</p>
                        <span>></span>
                    </a>

                    <a href="#" class="sub-menu-link">
                        <img src="../img/question-circle-fill.svg" alt="" srcset="">
                        <p>Fale Conosco</p>
                        <span>></span>
                    </a>

                    <a href="#" class="sub-menu-link">
                        <img src="../img/box-arrow-left.svg" alt="" srcset="">
                        <p>Sair do Sistema</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>

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
            <img class= "img" src="../img/prof-sobre.png">
        </div>

    </div>
</header>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
    <script type="text/javascript" src="../js/mobile.js"></script>
    
</body>
</html>
