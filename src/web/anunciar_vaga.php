<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUÍRON - ANUNCIAR VAGA</title>

    <link rel="stylesheet" href="styles/styles_l/style.css">
    <link rel="stylesheet" href="styles/styles_l/anunciar_vaga.css">
    <link rel="stylesheet" href="styles/theme.css">
    
</head>
<body>
<br>

<?php include('partials/header.php'); ?>

<center>
    <div class="container1">
        <div class="header">
            <h1 id="title">Anunciar Vaga</h1>
        </div>

        <div class="div-container">
            <div class="div-sub-container">

            <?php
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                if (!empty($dados['input-enviar'])){

                    $query_vaga = "INSERT INTO TB_VAGA (TB_VAGA_MATERIA, TB_VAGA_LINK, TB_VAGA_DESC, 
                    TB_VAGA_REQ, TB_VAGA_CARGA, TB_VAGA_FAIXA_SALARIAL, TB_VAGA_GRADE, FK_INSTITUICAO) 
                    VALUES ('".$dados['nome']."', '".$dados['link']."', '".$dados['descricao']."', '".
                    $dados['requisitos']."', '".$dados['carga']."', '".$dados['salarial']."', '".$dados['grade']."', '1');";

                    $pdo = new PDO("mysql:dbname=DB_QUIRON; host=localhost","quirondb", "quiron2022tcc*");
                    $cad_vaga = $pdo->prepare($query_vaga);
                    $cad_vaga->execute();

                    if($cad_vaga->rowCount()){
                        echo "<div class='mensagem'> Usuário cadastrado com sucesso <br> <button class='confirmar'>Fechar</button> </div>";
                    }

                    else {
                        echo "Usuário não cadastrado";
                    }
                } 
                
            ?>
                <form class="form" method="POST">
                    <label for="name">Nome da matéria: </label><br>
                    <input class='input-textarea' name="nome" type="text"> <br><br>

                    <label for="name">Link de acesso no CPS:</label><br>
                    <input class='input-textarea' name="link" type="url"> <br><br>

                    <label for="name">Descrição da vaga:</label><br>
                    <textarea class='input-textarea' name="descricao"></textarea> <br><br>

                    <label for="name">Requisito da vaga:</label><br>
                    <textarea class='input-textarea' name="requisitos"></textarea> <br><br>

                    <label for="name">Carga horária semanal:</label><br>
                    <input class='input-textarea' type="text" name="carga"> <br><br>

                    <label for="name">Média salarial:</label><br>
                    <input class='input-textarea' type="text" name="salarial"> <br><br>

                    <label for="name">Tipo de Grade:</label><br>
                    <input placeholder="ENSINO MÉDIO / TÉCNICO / TECNÓLOGO" class='input-textarea' type="text" name="grade"> <br><br>
            </div>

            <div class="linhaMeio"></div>

                <center>
                <div class="div-sub-container-2">
                    <div class="ab">
                    </div>
                    <div class="ab">
                            <br>
                            <input type="submit" name="input-enviar" class='botao-001' value="Anunciar Vaga">
                        </form>
                            <br>
                        <img src="images/2.png" onerror="handleError(this)" class="img-anunciar">
                    </div>
                    <div class="ab">
                    </div>
                    
                </center>
            </div>
        </div>
    </div>
</center>
<br>
<?php include('partials/footer.php'); ?>
</body>
</html>