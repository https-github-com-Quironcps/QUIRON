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
    // $escola_fk = trim($_GET['cad']);
    ?>
   
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
			?>

    <div class="div-pai">

        <center>
            <div class="div-alterar-img">
                <div class="div-imagens">
                
                <div class="div-ponta">
                    <label for="base_img_1">
                        <img style="cursor: pointer;" class="img-div-alterar-01" onerror="handleError2(this)" id="preview1" src="">
                    </label>
                    <input style="display: none;" type="file" name="foto" class="input-file" id="base_img_1">
                    <img id="imagem001" onclick="apagaFoto(1)"  class="img-trash" src="images/svgs/trash.svg">
                </div>

                <div class="div-meio">
                    <label for="base_img_2">
                            <img style="cursor: pointer;" class="img-div-alterar-01" onerror="handleError2(this)" id="preview2" src="">
                    </label>

                    <input style="display: none;" type="file" name="foto" class="input-file" id="base_img_2">
                    <img id="imagem002" onclick="apagaFoto(2)"  class="img-trash" src="images/svgs/trash.svg">
                </div>

                <div class="div-ultimo">
                    <label for="base_img_3">
                            <img style="cursor: pointer;" class="img-div-alterar-01" onerror="handleError2(this)" id="preview3" src="">
                    </label>
                    
                    <input style="display: none;" type="file" name="foto" class="input-file" id="base_img_3">
                    <img id="imagem003" onclick="apagaFoto(3)"  class="img-trash" src="images/svgs/trash.svg">
                </div>            
                    
                </div>
            </div>
        </center>

        <br>
        <script src="scripts/imagem_perfil.js"></script>

        <center>
            <div class="div-alterar-texto">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="div-alterar-form" method="POST" enctype="multipart/form-data">
                    
                    <label class="form-cursos">Cursos: </label><br><textarea class="input-cursos" type="text" name="cursos" id="input-text-alterar2"></textarea><br>
                    
                    <label class="form-sobre">Sobre: </label><br><textarea type="text" name="sobre" class="input-sobre" id="input-text-alterar2"></textarea><br>
                    
                    <label class="form-equipe">Equipe: </label><br><textarea type="text" name="equipe" class="input-equipe" id="input-text-alterar2"></textarea>
                    
                    <textarea style="display:none" name="cod_escola"><?php echo $escola_fk; ?></textarea>
                    <br>
                    <h6 class="aviso">(Você poderá editar isso futuramente)</h6>

                    <textarea id="texta_imagem1" style="display:none" name="imagem1"></textarea>
                    <textarea id="texta_imagem2" style="display:none" name="imagem2"></textarea>
                    <textarea id="texta_imagem3" style="display:none" name="imagem3"></textarea>

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