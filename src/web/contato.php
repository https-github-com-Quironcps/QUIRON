<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link para o CSS -->
    <link rel="stylesheet" href="../web/styles/styles_g/contato-2.css">
    <link rel="stylesheet" href="styles/theme.css">

    <title>FALE CONOSCO</title>
</head>
<body>

    <?php include('partials/header.php'); ?>

    <!-- div contendo o formulário e as demais informações (todo o conteúdo) -->

    <div class="div-contato">

        <!-- div com ícones e texto (a esquerda) -->
        <div class="info-contato">
            <h4 class="title">Alguma dúvida?</h4><br>

            <h4 class="text">
            <p>Entre em contato com nossa equipe.</p>
            <p>Nós ajudaremos você!</p>
            </h4><br><br>

            <i id="icon" class="bi bi-instagram"></i> <a class="info" href="https://instagram.com/quiron_cps?igshid=YmMyMTA2M2Y=">@quiron_cps</a> <br>
            <hr class="linha">
            <i id="icon" class="bi bi-envelope"></i> <a class="info" href="">quirontcc@gmail.com</a> <br>
            <hr class="linha">
            <i id="icon" class="bi bi-telephone"></i> <a class="info" href="">(11) 4002-8922</a> <br>
        </div>

        <!-- div com o formulário de contato (a direita) -->
        <div class="formulario">
            
            <h4 class="title-form">Fale conosco!</h4><br>

            <form class="form-contato"action="">

                <label class="text-form">Nome</label><br>
                <input id="form-campo" class="form-control" type="text" required></input><br>

                <label class="text-form">E-mail</label><br>
                <input  id="form-campo" class="form-control" type="text" required></input><br>

                <label class="text-form">Mensagem</label><br>
                <textarea id="mensagem" class="form-control" type="text" required></textarea><br>
                <input type="hidden" name="_captcha" value="false" />

                <input type="submit" value="Enviar" class="btn-enviar">
            </form>
    
        </div>
    </div>

    <?php include('partials/footer.php'); ?>
</body>
</html>