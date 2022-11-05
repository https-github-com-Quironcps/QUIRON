<!DOCTYPE html>
<?php
include('../server/mandaTema.php');
if (isset($tema)) {
    if (count($tema)) {
        foreach ($tema as $Tema) {
            if ($Tema['MODO'] == 1) {
                $tela_tema = 'light';
            } elseif ($Tema['MODO'] == 0) {
                $tela_tema = 'light dark';
            } else {
                $tela_tema = 'light';
            }
?>

            <html lang="pt-br" class="<?php echo $tela_tema; ?>" id="page">

<?php }
    }
} ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../web/styles/styles_g/visualizar_escola.css">
    <!-- <link rel="stylesheet" href="../web/styles/styles_g/visualizar_vaga.css"> -->
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/mostraVagas.js"></script>

    <title>QUIRON - ESCOLA</title>
</head>

<body>

    <?php
    include('../server/AtivarBancoFavorito.php');
    include('../server/PDO/verifica_logado.php');
    include('../server/lista_escola.php');

    if (count($resultados)) {
        foreach ($resultados as $Resultado) {
    ?>

            <div class="page">

                <?php include('../server/PDO/navbar.php');?>

                <!-- div com informações (nome da escola, cursos) sobrepondo a imagem do topo -->

                <center>
                    <div id="amor" class="img-escola">

                        <h1 class="titulo">
                            <?php
                            echo $Resultado['Nome'];
                            ?>
                        </h1>

                        <h5 class="subtitulo">
                            <p><?php echo $Resultado['Cursos']; ?>
                        </h5>

                        <div class="div-ponta"><img class="img-div-alterar-01" onerror="Black(this)" src="<?php echo $Resultado['Foto']; ?>"></div>

                    </div>
                </center>
                <br><br>

                <?php 
                include('partials/div-imagem.php'); 
                ?>

                <div class="div-total">
                    <!-- div com as imagens da escola (canto esquerdo) -->

                    <div class="imagens">

                        <img class="sub-imagens" style="cursor: pointer;" onclick="chamaDiv2('<?php echo $Resultado['ImgPost1']; ?>')" onerror="imagem_escola(this)" src="<?php echo $Resultado['ImgPost1']; ?>" alt="">
                        <img class="sub-imagens" style="cursor: pointer;" onclick="chamaDiv2('<?php echo $Resultado['ImgPost2']; ?>')" onerror="imagem_escola(this)" src="<?php echo $Resultado['ImgPost2']; ?>" alt=""><br>
                        <img class="sub-imagens" style="cursor: pointer;" onclick="chamaDiv2('<?php echo $Resultado['ImgPost3']; ?>')" onerror="imagem_escola(this)" src="<?php echo $Resultado['ImgPost3']; ?>" alt=""><br>

                    </div>

                    <!-- div com informações sobre a escola (ao centro)-->


                    <div class="div-info-escola">

                        <h3 class="titulo-info">Sobre</h4>

                            <center>
                                <p class="p-div">
                                    <?php echo $Resultado['Sobre']; ?>
                                </p>
                            </center>

                    </div>

                    <div class="vagas">
                        <h3 class="titulo-vagas">Vagas disponíveis</h4><br>

                            <center>

                            <?php
                        }
                    }

                    $num2 = 0;

                    if (count($vagas)) {
                        foreach ($vagas as $Vagas) {
                            ?>
                                <table id="div-vg" class="div-vaga">
                                    <tr>
                                        <td>
                                            <div id="vagan<?php echo $Vagas['Idv']; ?>" class="vagas_link">

                                                <br>
                                                <div id="nome-vaga <?php echo $Vagas['Idv']; ?>">
                                                    <center><label for="checkva <?php echo $Vagas['Idv']; ?>">
                                                            <h6 class="nome_materia"><?php echo $Vagas['Vaga']; ?></h6>
                                                        </label></center><br>
                                                </div>

                                                <button class='check-vaga' id="checkva <?php echo $Vagas['Idv']; ?>" onclick='AparecerVaga(<?php echo $Vagas['Idv']; ?>)'></button>

                                                <div style="display: none;" id="aside-vaga <?php echo $Vagas['Idv']; ?>" class="aside">

                                                    <div class="flex">
                                                        <i id="voltarbtn" style="cursor: pointer;" onclick="voltarPVaga(<?php echo $Vagas['Idv']; ?>)" class="bi bi-arrow-left"></i>

                                                        <?php
                                                        $sta->bindParam(':id_vaga', $Vagas['Idv'], PDO::PARAM_INT);

                                                        $sta->execute();
                                                        $favoritos = $sta->fetchAll(PDO::FETCH_ASSOC);

                                                        include('../server/PDO/situacao.php');

                                                        $id_vaga_fav = $Vagas['Idv'];

                                                        if ($user_type == 'professor') {
                                                            if (count($favoritos)) {
                                                                foreach ($favoritos as $Fav) {
                                                                    $id_favorito = $Fav['IdFav'];
                                                                    $professor_fk = $Fav['FKFavProf'];
                                                                    $fk_vaga_fav = $Fav['FKFavVaga'];

                                                                    if ($user_id == $professor_fk && $id_vaga_fav == $fk_vaga_fav) {
                                                                        $condicao_fav = $Fav['CondFav'];
                                                                        include('partials/coracao-fav.php');
                                                                    }
                                                                }
                                                            } else {
                                                                $condicao_fav = 3;
                                                                include('partials/coracao-fav.php');
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                    <div id='escrevePhp'></div>

                                                    <h6 class="title02"><?php echo $Vagas['Vaga']; ?></h6>
                                                    <br>
                                                    <div class="linha1">
                                                        <!-- descrição da vaga -->
                                                        <div class="desc-vaga">
                                                            <h5 class="h5a"><?php echo $Vagas['VagaDesc']; ?>
                                                            </h5>
                                                        </div><br>

                                                        <!-- requisitos da vaga -->
                                                        <div class="req-vaga">
                                                            <h6 class="title02">Requisitos da Vaga</h6>
                                                            <h5 class="h5a"><?php echo $Vagas['VagaReq']; ?></h5>
                                                        </div><br>


                                                        <!-- carga horária semanal -->
                                                        <div class="desc-vaga">
                                                            <h6 class="title02">Carga Horária</h6>
                                                            <div class="carg-horaria">
                                                                <h5 class="h5a"><?php echo $Vagas['VagaCarga']; ?></h5>
                                                            </div>
                                                        </div><br>

                                                        <!-- média salarial -->
                                                        <div class="req-vaga">
                                                            <h6 class="title02">Média salarial</h6>
                                                            <div class="carg-horaria">
                                                                <h5 class="h5a"><?php echo $Vagas['VagaFaixa']; ?></h5>
                                                            </div><br>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <center><br>
                                                            <a class="linkDVga" href="<?php echo $Vagas['VagaLink']; ?>">Ir para a vaga</a><br>
                                                            <br><!-- <a href="../server/pega_id_vaga.php" onclick="location.href=this.href+'?codVagaEscola='+<?php echo $Vagas['Idv']; ?>"> -->

                                                        </center>
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            <?php
                        }
                    }

                    if (count($resultados)) {
                        foreach ($resultados as $Resultado) {
                            ?>

                            </center><br>
                    </div>
                </div>

                <!-- div com informações telefone, endereço e email -->

                <section class="div-icones">
                    <center>
                        <ul class="lista">
                            <li>
                                <a href="#"><i class="bi bi-envelope"></i></a><br>
                                <a href="#"><?php echo $Resultado['Email']; ?></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-map"></i></a><br>
                                <a href="#"><?php echo $Resultado['Endereco'] . ', ' . $Resultado['EndNum'] . ' - ' . $Resultado['Bairro'] . ' - ' . $Resultado['CEP'] ?></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-telephone"></i></a><br>
                                <a href="#"><?php echo $Resultado['Telefone']; ?></a>
                            </li>
                        </ul>
                    </center>
                </section>
        <?php
                        }
                    }
        ?>
            </div>

</body>

            </html>