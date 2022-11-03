<?php

//Incluir conexão

include("../server/PDO/conexao.php");
include("../server/cad_perfil.php");
?>
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
    <title>QUIRON - CADASTRAR PERFIL</title>

    <link rel="stylesheet" href="styles/styles_l/perfil_escola.css">
    <link rel="stylesheet" href="styles/theme.css">
    
    <link rel="icon" href="../web/images/logos/arco-dark-2.png">
    
    <link rel="stylesheet" href="../web/styles/styles_g/load.css">
    <!-- <script src="../web/scripts/modo-dark.js"></script> -->
    <script type="text/javascript" src="../web/scripts/preloader.js"></script>

</head>
<body>


<?php 
    include('../server/PDO/acesso_telas_desconhecido.php'); 
    $escola_fk = trim($_GET['cad']);?>
   
<div class="page">

<?php include('../server/PDO/navbar.php'); 
?>


<br><br><br><br>

    <center><h1 class="h1002">Crie o seu perfil</h1></center>
    <?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>

    <div class="div-pai">

        <center>
            <div class="div-alterar-img">
                <div class="div-imagens">
                
                <div class="div-ponta"><img class="img-div-alterar-01" onerror="handleError2(this)" src="#"> <img id="imagem001" class="img-trash" src="images/svgs/trash.svg"></div>
                <div class="div-meio"><img class="img-div-alterar-01" onerror="handleError2(this)" src="#"> <img id="imagem002" class="img-trash" src="images/svgs/trash.svg"></div>
                <div class="div-ultimo"><img class="img-div-alterar-01" onerror="handleError2(this)" src="#"> <img id="imagem003" class="img-trash" src="images/svgs/trash.svg"></div>            
                    
                </div>
            </div>
        </center>

        <br>

        <center>
            <div class="div-alterar-texto">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="div-alterar-form" method="POST">
                    
                    <label class="form-cursos">Cursos: </label><br><textarea class="input-cursos" type="text" name="cursos" id="input-text-alterar2"></textarea><br>
                    
                    <label class="form-sobre">Sobre: </label><br><textarea type="text" name="sobre" class="input-sobre" id="input-text-alterar2"></textarea><br>
                    
                    <label class="form-equipe">Equipe: </label><br><textarea type="text" name="equipe" class="input-equipe" id="input-text-alterar2"></textarea>
                    
                    <textarea style="display:none" name="cod_escola"><?php echo $escola_fk; ?></textarea>
                    <br>
                    <h6 class="aviso">(Você poderá editar isso futuramente)</h6>
                    <input type="submit" name="submit" value="Criar Perfil" id="submit-text-alterar" class="submit-class"><br>
                </form>
            </div>
        </center>
    </div>
    <?php include('partials/cadastro-perfil.php') ?>
    <?php include('partials/footer.php') ?>

    </div>

    <?php include('partials/loadpage.php') ?>

</body>
</html>