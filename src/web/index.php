<?php
include('../server/PDO/conexao.php');
include('../server/PDO/theme.php');
include('../server/busca_vagas.php');
include('../server/mandaTema.php');
?>


<!DOCTYPE html>
<?php
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

    <!-- Link CSS -->
    <link rel="stylesheet" href="../web/styles/styles_l/vagas.css">
    <link rel="stylesheet" href="styles/theme.css">

    <link rel="icon" href="../web/images/logos/arco-dark-2.png">

    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- <script src="scripts/teste.js"></script> -->

    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

    <script src="scripts/mostrarVagasIndex.js"></script>

    <title>QUIRON - VAGAS</title>
</head>

<body>
    <div class="page">
        <?php
        include('../server/PDO/navbar.php');
        ?>

        <br>

        <div class="filtros">
            <form class="form" method="POST">
                <input class='input-textarea' maxlength="80" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="cod" value="<?php echo $cod; ?>" type="number" maxlength="3" placeholder="Código da instituição">
                <button type="submit" class='botao-001'></button>
            </form>
        </div>

        <div>
            <div class="div-total">
                <div>
                    <input type="checkbox" id="base" class="abo11">

                    <label class="gaby" for="base"><?php if($tela_tema == 'light dark'){ echo "<i style='color: white;' class='bi bi-filter'></i>";} else{ echo "<i class='bi bi-filter'></i>";} ?></label>

                    <div class="div-filtros">

                        <form method="POST" class="form-filtros">
                            Localização - Cidade: <br>
                            <input maxlength="128" type="text" name="localizacao" id="text-filtro"><br><br>

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
                                <div id='table1 <?php echo $Resultado['Idv']; ?>' class="table1"'>

                                    <div id="nome-vaga <?php echo $Resultado['Idv']; ?>" class="info_vaga">
                                        <div class="td3"><label class="click_vaga" for="checkva <?php echo $Resultado['Idv']; ?>"><img class="foto-perfil" onerror="handleErrorEscola(this)" src="<?php echo $Resultado['Foto']; ?>"></label></div>
                                        
                                        <div class="td4">
                                            <label class="click_vaga" for="checkva <?php echo $Resultado['Idv']; ?>">
                                                <h6 class="nome_materia"><?php echo $Resultado['Vaga']; ?></h6>
                                                
                                                <h6 class="escola"><?php echo $Resultado['Nome']; ?></h6>
                                            </label>
                                        </div>
                                    </div>

                                    <button class=' check-vaga' style="display: none;" id="checkva <?php echo $Resultado['Idv']; ?>" onclick="AparecerVaga(<?php echo $Resultado['Idv']; ?>)"></button>

                                    <div id="aside-vaga <?php echo $Resultado['Idv']; ?>" class="aside">
                                        <div class="flex">
                                            <i id="voltarbtn" onclick="voltarPVaga(<?php echo $Resultado['Idv']; ?>)" class="bi bi-arrow-left"></i>
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
                                                    <h5 class="h5a"><?php if (isset($user_situacao)){
                                                                                if ($user_situacao == true){
                                                                                    echo $Resultado['VagaReq'];
                                                                                    } else {
                                                                                        echo '<center>Entre na QUIRON para saber mais</center>'; 
                                                                                        }}?></h5>
                                                </div><br>

                                                <div class="req-vaga">
                                                    <h6 class="title02">Média salarial</h6>
                                                    <div class="carg-horaria">
                                                        <h5 class="h5a"><?php if (isset($user_situacao)){
                                                                                if ($user_situacao == true){
                                                                                    echo $Resultado['VagaFaixa'];
                                                                                    } else {
                                                                                        echo '<center>---</center>'; 
                                                                                        }}?></h5>
                                                    </div><br>
                                                </div>


                                                <div class="desc-vaga">
                                                    <h6 class="title02">Carga Horária</h6>
                                                    <div class="carg-horaria">
                                                        <h5 class="h5a"><?php if (isset($user_situacao)){
                                                                                if ($user_situacao == true){
                                                                                    echo $Resultado['VagaCarga'];
                                                                                    } else {
                                                                                        echo '<center>---</center>'; 
                                                                                        }}?></h5>
                                                    </div>
                                                </div><br>

                                            </div> <br>
                                            <?php
                                                if (isset($user_situacao)){
                                                    if ($user_situacao == true){
                                                        include('../server/BotoesAcessoVaga.php');
                                                    }

                                                    else{
                                                        include('../server/BotoesNAcesso.php');
                                                    }
                                                }

                                                else{
                                                    include('../server/BotoesNAcesso.php');
                                                }
                                            ?>


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

    </div>

    <?php include('partials/loadpage.php'); ?>
</body>

            </html>