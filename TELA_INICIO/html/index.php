<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<header>
    <div class="hero">
        <nav>
            <img src="../img/arco.png" class="logo" alt="Logo">
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
    </div>
</header>

    <div class="overlay">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="#">VAGAS</a>
            <a href="#">MEUS INTERESSSES</a>
            <a href="#">SOBRE</a>
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