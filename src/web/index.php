<?php
    $dbh = new PDO('mysql:host=localhost; dbname=test', 'quirondb', 'quiron2022tcc*');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_l/vagas.css">
    <link rel="stylesheet" href="styles/theme.css">

    <title>QUIRON - VAGAS</title>
</head>
<body>
    <?php include('partials/header.php') ?>
    <br>

    <div class="filtros">
            <form class="form" method="GET">
                <input class='input-textarea' name="cod" type="number" maxlength="3" placeholder="Código da instituição">
                <button type="submit" class='botao-001' value=""></button>
            </form>

            <?php

            if (isset($_GET['cod']))
            {
                $cod = trim($_GET['cod'])."%";

                $sth = $dbh->prepare('SELECT * FROM `abcd` WHERE `cod` LIKE :cod');
                $sth->bindParam(':cod', $cod, PDO::PARAM_STR);
                $sth->execute();
            }

            if (!isset($_GET['cod']))
            {
                $cod = "%";
            }

            ?>
    </div>

    <div>
        <div class="div-total">
            <div>
                <input type="checkbox" id="base" class="abo11">

                <label class="gaby" for="base"><i class="bi bi-filter"></i></label>

                <div class="div-filtros">

                    <form method="GET" class="form-filtros" method="../server/filtrar_vagas.php">
                        Localização: <br>
                        <input type="text" name="localizacao" id="text-filtro"><br><br>

                        Faixa Salarial: <br>
                        <input type="text" name="faixa" id="text-filtro" list="faixa">
                        <datalist id="faixa">
                            <option value="">Grade:</option>
                            <option value="Mil - Dois mil"></option>
                            <option value="Três mil - Quatro mil"></option>
                            <option value="Cinco mil - Seis mil"></option>
                            <option value="Mais"></option>
                        </datalist>
                        <br><br>

                        Tipo de Grade: <br>
                        <input type="text" name="grade" id="text-filtro" list="grade">
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

                    <?php include('../server/filtrar_vagas.php') ?>

                </div>
            </div>


        <div class="conteudo">
        <center>
            <?php   
            
            
            $sth->execute();

            $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
            
                if (count($resultados)) {
                foreach($resultados as $Resultado){
                ?>
                    <table class="table1">
                        <tr>
                            <td class="td1"><img class= "foto-perfil" src=""></td>

                            <td>
                                <h6 class="nome_materia"><?php echo $Resultado['vaga']; ?></h6>

                                <h6 class="escola"><?php echo $Resultado['escola']; ?></h6>
                            </td>
                        </tr>
                    </table> 
                <?php
                }}
            ?>
        <div>ㅤ</div>
        </div>
        </center>
        </div>
    </div>

    <?php include('partials/footer.php'); ?>
</body>
</html>