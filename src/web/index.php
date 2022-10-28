<?php
include('../server/PDO/conexao.php');
include('../server/PDO/theme.php');
include('../server/busca_vagas.php');
?>


<!DOCTYPE html>
<html lang="pt-br" class="light" id="page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_l/vagas.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <script src="scripts/mostrarVagasIndex.js"></script>

    <title>QUIRON - VAGAS</title>
</head>

<body>
    <?php
    include('../server/PDO/navbar.php');
    ?>
    <br>

    <div class="filtros">
        <form class="form" method="POST">
            <input class='input-textarea' name="cod" value="<?php echo $cod; ?>" type="number" maxlength="3" placeholder="Código da instituição">
            <button type="submit" class='botao-001'></button>
        </form>
    </div>

    <div>
        <div class="div-total">
            <div>
                <input type="checkbox" id="base" class="abo11">

                <label class="gaby" for="base"><i class="bi bi-filter"></i></label>

                <div class="div-filtros">

                    <form method="POST" class="form-filtros">
                        Localização - Cidade: <br>
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
                </div>
            </div>

            <div class="conteudo">
                <center>
                    <?php
                    if (count($resultados)) {
                        foreach ($resultados as $Resultado) {
                    ?>
                            <div id='table1 <?php echo $Resultado['Idv']; ?>' class="table1" onclick='AparecerVaga(<?php echo $Resultado['Idv']; ?>)'>

                                <div id="nome-vaga <?php echo $Resultado['Idv']; ?>" class="info_vaga">

                                    <div class="td3"><img class="foto-perfil" onerror="handleErrorEscola(this)" src="<?php echo $Resultado['Foto']; ?>"></div>

                                    <div class="td4">
                                        <h6 class="nome_materia"><?php echo $Resultado['Vaga']; ?></h6>

                                        <h6 class="escola"><?php echo $Resultado['Nome']; ?></h6>
                                    </div>
                                </div>

                                <div id="aside-vaga <?php echo $Resultado['Idv']; ?>" class="aside">
                                    <div class="flex">
                                        <i id="voltarbtn" onclick="voltarPVaga2(<?php echo $Resultado['Idv']; ?>)" class="bi bi-arrow-left"></i>

                                        <br>
                                        <h6 class="title03"><?php echo $Resultado['Vaga']; ?></h6>
                                        <br>
                                        <div class="linha1">

                                            <div class="desc-vaga">
                                                <h5 class="h5a"><?php echo $Resultado['VagaDesc']; ?>
                                                </h5>
                                            </div><br>


                                            <div class="req-vaga">
                                                <h6 class="title02">Requisitos da Vaga</h6>
                                                <h5 class="h5a"><?php echo $Resultado['VagaReq']; ?></h5>
                                            </div><br>

                                            <div class="req-vaga">
                                                <h6 class="title02">Média salarial</h6>
                                                <div class="carg-horaria">
                                                    <h5 class="h5a"><?php echo $Resultado['VagaFaixa']; ?></h5>
                                                </div><br>
                                            </div>


                                            <div class="desc-vaga">
                                                <h6 class="title02">Carga Horária</h6>
                                                <div class="carg-horaria">
                                                    <h5 class="h5a"><?php echo $Resultado['VagaCarga']; ?></h5>
                                                </div>
                                            </div><br>

                                        </div>
                                        <center>
                                            <button class="botão-01" type="submit" href="#" onclick=" <?php ?>">Ir para vaga</button><button class="botão-02" type="submit" href="#" onclick=" <?php ?>">Ver Escola</button><br>
                                        </center>

                                        <div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <div class="td2">ㅤ</div>
                </center>
            </div>
        </div>
    </div>
    <center>
        <h6>
            <?php
            include('../server/PDO/situacao.php');

            try {
                if (!empty($email_usuario)) {
                    if ($user_type == 'professor') {
                        $sta = $pdo->prepare('SELECT TB_PROFESSOR.TB_PROFESSOR_NOME as nome
                        FROM `TB_PROFESSOR` 
                        WHERE TB_PROFESSOR_EMAIL = :email');

                        $sta->bindParam(':email', $email_usuario, PDO::PARAM_STR);

                        $sta->execute();

                        $res = $sta->fetchAll(PDO::FETCH_ASSOC);

                        if (count($res)) {
                            foreach ($res as $Nome_Usuario) {
                                echo "<h6 class='conectado'>Conectado - " . $Nome_Usuario['nome'] . "</h6>";
                            }
                        }
                    } elseif ($user_type == 'escola') {
                        $sta = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME as nome
                        FROM `TB_INSTITUICAO` 
                        WHERE TB_INSTITUICAO_EMAIL = :email');

                        $sta->bindParam(':email', $email_usuario, PDO::PARAM_STR);

                        $sta->execute();

                        $res = $sta->fetchAll(PDO::FETCH_ASSOC);

                        if (count($res)) {
                            foreach ($res as $Nome_Usuario) {
                                echo "<h6 class='conectado'>Conectado - " . $Nome_Usuario['nome'] . "</h6>";
                            }
                        }
                    }
                }
            } catch (PDOException $e) {
            }
            ?>
        </h6>
    </center>
    <?php include('partials/footer.php'); ?>
</body>

</html>