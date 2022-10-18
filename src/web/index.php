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
                </div>
            </div>

        <div class="conteudo">
        <center>
            <?php   
                if (count($resultados)) {
                foreach($resultados as $Resultado){
                ?>
                    <table class="table1">
                        <tr>
                            <td class="td1"><img class="foto-perfil" onerror="handleError(this)" src="<?php echo $Resultado['Foto']; ?>"></td>

                            <td>
                                <h6 class="nome_materia"><?php echo $Resultado['TB_VAGA_MATERIA']; ?></h6>

                                <h6 class="escola"><?php echo $Resultado['Nome']; ?></h6>
                            </td>
                        </tr>
                    </table> 
                <?php
                }}
            ?>
            <div class="td2">ㅤ</div>
        </div>
        </center>
        </div>
    </div>

    <center><h6>
        <?php 
            include('../server/PDO/situacao.php');

            try{
                if(!empty($email_usuario)){
                    if ($user_type == 'professor'){
                        $sta = $pdo->prepare('SELECT TB_PROFESSOR.TB_PROFESSOR_NOME as nome
                        FROM `TB_PROFESSOR` 
                        WHERE TB_PROFESSOR_EMAIL = :email');
                    
                        $sta->bindParam(':email', $email_usuario, PDO::PARAM_STR);

                        $sta->execute();

                        $res = $sta->fetchAll(PDO::FETCH_ASSOC);

                        if (count($res)) {
                            foreach($res as $Nome_Usuario){
                                echo 'Conectado - '.$Nome_Usuario['nome'];
                            }
                        }
                    }

                    elseif ($user_type == 'escola'){
                        $sta = $pdo->prepare('SELECT TB_INSTITUICAO.TB_INSTITUICAO_NOME as nome
                        FROM `TB_INSTITUICAO` 
                        WHERE TB_INSTITUICAO_EMAIL = :email');
                    
                        $sta->bindParam(':email', $email_usuario, PDO::PARAM_STR);

                        $sta->execute();

                        $res = $sta->fetchAll(PDO::FETCH_ASSOC);

                        if (count($res)) {
                            foreach($res as $Nome_Usuario){
                                echo 'Conectado - '.$Nome_Usuario['nome'];
                            }
                        }
                    }
                }
            }

            catch(PDOException $e) {}
        ?>
    </h6></center>
    <?php include('partials/footer.php'); ?>
</body>
</html>