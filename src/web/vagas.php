<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_l/vagas.css">
    <link rel="stylesheet" href="styles/theme.css">

    <!-- Links para os ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>QUIRON - VAGAS</title>
</head>
<body>

    <?php include('partials/header.php') ?>
    <br>

    <div class="filtros">
            <form action="" class="form" method="POST">
                <input class='input-textarea' type="text" maxlength="3" placeholder="Código da instituição">
                <input type="submit" class='botao-001' value="">
            </form>
    </div>

    <div>
        <div class="div-total">
            <div>
                <input type="checkbox" id="base" class="abo11">

                <label class="gaby" for="base"><i class="bi bi-filter"></i></label>

                <div class="div-filtros">

                    <form class="form-filtros" action="">
                        Localização: <br>
                        <input type="text" id="text-filtro"><br><br>

                        Faixa Salarial: <br>
                        <input type="text" id="text-filtro" list="faixa">
                        <datalist id="faixa">
                            <option value="">Grade:</option>
                            <option value="Mil - Dois mil"></option>
                            <option value="Três mil - Quatro mil"></option>
                            <option value="Cinco mil - Seis mil"></option>
                            <option value="Mais"></option>
                        </datalist>
                        <br><br>

                        Tipo de Grade: <br>
                        <input type="text" id="text-filtro" list="grade">
                        <datalist id="grade">
                            <option value="Ensino Médio">Componente Comum</option>
                            <option value="Técnico">Curso</option>
                            <option value="Tecnólogo">Curso</option>
                        </datalist>

                        <center>
                            <input type="submit" class="submit-filtrar" value="Filtrar">
                        </center>
                        <br><br>
                    </form>
                </div>
            </div>
            

        <div class="conteudo">
        <center>
            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src=""></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table><table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table><table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>

            <table class="table1">
                <tr>
                    <td class="td1"><img class= "foto-perfil" src="#"></td>

                    <td>
                        <h6 class="nome_materia">Nome da matéria</h6>

                        <h6 class="escola">Nome da escola</h6>
                    </td>
                </tr>
            </table>
        </div>
        
        </center>
        </div>
    </div>

    <?php include('partials/footer.php'); ?>

</body>
</html>