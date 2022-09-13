<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_g/escolas.css">

    <!-- Links para os ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>ESCOLAS</title>
</head>
<body>

    <?php include('partials/header.php') ?>
    
    <div>
        <div class="filtros">
            <form action="" class="form" method="POST">
                <label class="label" for="name">Código da instituição: </label>
                <input class='input-textarea' type="text" maxlength="3" placeholder="Digite aqui">
                <input type="submit" class='botao-001' value="">
            </form>
        </div>
        <br><br>
        <h1 class="titulo1">Escolas disponíveis:</h1>
        <br>

        <center>
        <div class="conteudo">
            <!-- <div class="etec1">
                <img class= "foto-perfil" src="images/etec1.jpg">

                <marquee behavior="scroll" direction="right">
                    <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                </marquee>

            </div> -->

            <!-- primeira linha -->
            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professora Ermelinda Giannini Teixeira</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec2.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Santa Ifigênia</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Paulistano</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <!-- fim da primeira linha -->

            <!-- segunda linha -->

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Albert Ainstein</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec2.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Professor Camargo Aranha</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Angêlo Cavalheiro</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <!-- fim da segunda linha -->

            <!-- terceira linha -->

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Carolina Carinhato Sampaio</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec2.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Adolpho Berezin </h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" SCROLLAMOUNT=-6 direction="left">
                            <h6>Etec Antonio Devisate</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <!-- fim da terceira linha -->

            <!-- quarta linha -->

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Carolina Carinhato Sampaio</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec2.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Adolpho Berezin </h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" SCROLLAMOUNT=-6 direction="left">
                            <h6>Etec Antonio Devisate</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <!-- fim da quarta linha -->

            <!-- quinta linha -->

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Carolina Carinhato Sampaio</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec2.jpg"></td>

                    <td>
                        <marquee behavior="slide" direction="left">
                            <h6>Etec Adolpho Berezin </h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="images/etec1.jpg"></td>

                    <td>
                        <marquee behavior="slide" SCROLLAMOUNT=-6 direction="left">
                            <h6>Etec Antonio Devisate</h6>
                        </marquee>
                    </td>
                </tr>
            </table>

            <!-- fim da quinta linha -->


        </div>
        </center>
        
    </div>

    <?php include('partials/footer.php'); ?>

</body>
</html>