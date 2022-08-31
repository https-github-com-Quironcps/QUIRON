<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/navbar.css">

    <!-- links para os ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>HEADER</title>
    
</head>
<body>
    <header>
        <nav id="navbar">
            <label>
                <input type="checkbox">
                <div class="toggle">
                    <span class="top_line common"></span>
                    <span class="middle_line common"></span>
                    <span class="bottom_line common"></span>
                </div>
                <div class="slide">
                    <ul class="ul1">
                        <li><a href="#"><i class="bi bi-pencil-square"></i></i>ㅤEditar perfil</a></li>
                        <li><a href="#"><i class="bi bi-gear-fill"></i>ㅤConfigurações</a></li>
                        <li><a href="#"><i class="bi bi-question-circle-fill"></i></i>ㅤFale conosco</a></li>
                        <li><a href="#"><i class="bi bi-megaphone-fill"></i>ㅤAnunciar vaga</a></li>
                    </ul>
                </div>
            </label>
            <div class="container">
                <img src="images/logos/arco-e-texto-dark.png" class="logo" alt="Logo">
                <div class="container-inner">
                    <ul class="ul2">
                        <li><a href="#">Vagas</a></li>
                        <li><a href="#">Interesses</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>

        const menBtn = document.getElementById('menu-btn');
        const navbar = document.getElementById('navbar');
        const menu = document.getElementById('.menu');

        const offset = 50;

        menBtn.addEventListener('click', () => {
            menu.classList.toggle('menu-open');
        });

        window.addEventListener("scroll", () => {
            if (pageYOffset > offset) {
                navbar.classList.add('navbar-active');
            } else {
                navbar.classList.remove('navbar-active');
            }
        });

    </script>

</body>
</html>
