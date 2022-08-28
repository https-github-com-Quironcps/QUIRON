<div class="hero">
    <nav>
        <img src="images/arco.png" class="logo" alt="Logo">
        <ul>
            <li><a class="ab" href="#">Vagas</a></li>
            <li><a class="ab" href="#">Meus Interesses</a></li>
            <li><a class="ab" href="#">Sobre</a></li>
        </ul>

        <p class="menu cta">MENU</p>

        <img src="images/etec.jpeg" class="user" onclick="toggleMenu()" alt="Logo">

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="images/etec.jpeg">
                    <h3>ETEC Ermelinda</h3>
                </div>
                <hr>

                <a href="#" class="sub-menu-link">
                    <img src="images/svgs/editar.svg" alt="" srcset="">
                    <p>Editar Perfil</p>
                    <span>></span>
                </a>

                <a href="#" class="sub-menu-link">
                    <img src="images/svgs/configuracao.svg" alt="" srcset="">
                    <p>Configurações</p>
                    <span>></span>
                </a>

                <a href="#" class="sub-menu-link">
                    <img src="images/svgs/duvida.svg" alt="" srcset="">
                    <p>Fale Conosco</p>
                    <span>></span>
                </a>

                <a href="#" class="sub-menu-link">
                    <img src="images/svgs/sair.svg" alt="" srcset="">
                    <p>Sair do Sistema</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </nav>
</div>

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