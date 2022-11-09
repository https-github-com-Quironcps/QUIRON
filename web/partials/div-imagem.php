<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/theme.css">
    <link rel="stylesheet" href="../styles/styles_g/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="scripts/chamaDIV.js"></script>
    
    <title>IMAGEM</title>
</head>
<body>
    <div id="div-tudo-img" class="tudo" style="border: none; transform: translateX(100vw); display: none;">
    <div id="div10-img" class="div10">
        <div class="div-icon10"><i id="trash-square" style="cursor: pointer;" class="bi bi-arrow-90deg-left" onclick="sairDIVTela2()" ></i></div>
        <img class="imagem100" id="imagem_div_fora" onerror="imagem_escola(this)" src="" alt="">
    </div>
    </div>
</body>
</html>