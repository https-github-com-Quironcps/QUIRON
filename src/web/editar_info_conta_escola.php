<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIRON</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');

:root{
    /* Paleta de cores da QUIRON */
    --cor-palette-1: #2C166B;
    --cor-palette-2: #9679ED;
    --cor-palette-3: #6031EB;
    --cor-palette-4: #44376B;
    --cor-palette-5: #4B27B8;

    /* Index */
    --botao-iniciar: #6131EB;
    --botao-iniciar-hover: #9d88da;
}

.div-container{
    display: flex;
    width: 100%;
}

.div-sub-container{
    width: 100%;
    padding: 10px;
}

/* Input e Textarea */
.input-textarea{
    width: 100%;
    max-width: 520px;
    padding: 10px;
    border-radius: 10px;
    border: 0;
    font-size: 15px;
    transition: all 1s;
}

.form label{
    font-size: 15px;
}

/* Input e Textarea dentro do form class '.form' */
.form input:hover,
.form input:focus,
.form textarea:hover,
.form textarea:focus {
  outline: none;
  border-color: #7e57c2;
  box-shadow: 0 0 0 3px #7e57c2;
}

/* Title */
#title{
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 52px;
    align-items: center;
    margin-top: 10px;
    color: #6131eb;
    opacity: 60%;
}

/* Botão */
.botao-001{
    background-color: var(--botao-iniciar);
    width: 250px;
    opacity: 0.8;
    color: white;
    padding: 10px;
    border-radius: 15px;
    cursor: pointer;
    text-decoration: none;
    border: 0.5px solid var(--cor-palette-1);
    transition: color 0.5s ease 0s;
}

/* Botão Hover */
.botao-001:hover{
    background-color: var(--botao-iniciar-hover);
    border: 0;
    color: black;
    font-weight:600;
}

.edit-div-info{
    width: 100%;
    display: flex;
    margin-bottom: 10px;
    background-color: white;
    border-radius: 20px;
    padding: 5px 20px;
    justify-content: space-between;
}

.edit-div-info:hover{
  outline: none;
  border-color: #7e57c2;
  box-shadow: 0 0 0 2px #7e57c2;
}

.header001{
    margin-top: 10px;
}

.div-sub-container-2{
    padding-top: 10%;
    padding-bottom: 10%;
}

.container1{
    width: 70%;
    padding: 20px 60px;
    background-color: rgba(242, 239, 251, 0.61);
    text-align: left;
    border-radius: 20px;
    margin-top: 100px;
    transition: all 1s;
}

.text2{
    margin-left: 10px;
    font-family: 'Raleway';
    font-style: normal;
    margin-top: 5px;
    font-size: 15px;
    opacity: 0.9;
}

.bi-pen, .bi-trash3 {
    width: 40px;
    cursor: pointer;
    margin-left: 10px;
}
.edit-trash {
    width: 60px;
    align-self: center;
}

#title2{
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    margin-top: 20px;
    margin-bottom: 10px;
    align-items: center;
    color: #6131eb;
    opacity: 60%;
}

#title2:has(+ h2) {
    background-color: #9d88da;
}

@media screen and (max-width: 1000px) {
    .container1 {
        width: 80%;
    }
}

@media screen and (max-width: 600px) {
    .container1{
        width: 90%;
    }

    .text2{
        font-size: 13px;
    }

    .bi-pen, .bi-trash3 {
    width: 40px;
    cursor: pointer;
    margin-left: 2px;
}

}
    </style>
</head>
<body>
<?php include('partials/header.php'); ?>

<center>
    <div class="container1">
        <div class="header001">
            <h1 id="title2">Configurações da Conta</h1>
            <hr>
        </div>


        <h1 id="title2">Nome de usuário</h1>

        <div class="edit-div-info">
            <h2 class="text2">ETEC Profª Ermelinda G Teixeira</h2><br>

            <div class="edit-trash">
                <i class="bi bi-pen"></i>
                <i class="bi bi-trash3"></i>
            </div>
        </div><br>

        <h1 id="title2">E-mail</h1>

        <div class="edit-div-info">
            <h2 class="text2">exemplo@exemple.com</h2><br>

            <div class="edit-trash">
                <i class="bi bi-pen"></i>
                <i class="bi bi-trash3"></i>
            </div>
        </div><br>

        <h1 id="title2">Senha</h1>

        <div class="edit-div-info">
            <h2 class="text2">exemplo@exemple.com</h2><br>

            <div class="edit-trash">
                <i class="bi bi-pen"></i>
                <i class="bi bi-trash3"></i>
            </div>
        </div>

        <br><hr>

        <h1 id="title2">Excluir conta</h1>

        <div class="edit-div-info-excluir">
            <center>
                <input type="checkbox" name="checkbox" id=""> Você aceita com os termos de exclusão da conta
                <br><br>
                <button class="botao-001">Deletar</button>
            </center>
        </div>
    </div>
</center>
<br>

<?php include('partials/footer.php'); ?>
</body>
</html>