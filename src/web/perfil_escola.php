<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="styles/styles_l/editar_info.css">
</head>
<body>
<?php include('partials/header.php') ?>

<br><br><br><br>

    <center><h1 class="h1002">Editar Perfil</h1></center>

    <div class="div-pai">
        <div class="div-alterar-img">
            <h3>Fotos de divulgação</h3>

            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img1-excluir">Deletar</button><br>
            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img2-excluir">Deletar</button><br>
            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img3-excluir">Deletar</button><br>              
            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img4-excluir">Deletar</button><br>
            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img5-excluir">Deletar</button><br>                
            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img6-excluir">Deletar</button><br>
            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img7-excluir">Deletar</button><br>                
            <img class="img-div-alterar-01" src="#"> <button id="submit-text-alterar" class="img8-excluir">Deletar</button><br>       
        </div>

        <div class="div-alterar-texto">
            <form action="" class="div-alterar-form">
<br>
                <label class="form-cursos">Cursos: </label><textarea class="input-cursos" type="text" id="input-text-alterar2"></textarea><br>
                
                <label class="form-sobre">Sobre: </label><br><textarea type="text" class="input-sobre" id="input-text-alterar2"></textarea><br>
                
                <label class="form-equipe">Equipe: </label><br><textarea type="text" class="input-equipe" id="input-text-alterar2"></textarea>
                
                <br>
                <input type="submit" value="Editar" id="submit-text-alterar" class="submit-class">
            </form>
        </div>
    </div>

<?php include('partials/footer.php') ?>
</body>
</html>