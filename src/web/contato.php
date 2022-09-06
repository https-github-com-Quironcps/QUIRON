<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/contato.css">

    <style>
      .formulario{
        box-sizing: border-box;
        position: absolute;
        width: 37vw;
        height: 580px;
        left: 770px;
        top: 150px;
        background: rgba(242, 239, 251, 0.61);
        border-radius: 20px;
        transition: all 1s;
      }

      @media only screen and (max-width: 1260px) {
        .formulario, .form, .form input{
          left: 500px
        }

        .form input, .form textarea{
          width: 200px;
        }

        .title1, .title2, .text, .insta, .text_contact1, .linha, .email, .text_contact2, .linha2, .tel, .text_contact3{
          top: 500px;
          transition: all 2s;
        }
      }
    </style>

    <!-- Links para os ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>CONTATO</title>

</head>
<body>

    <?php include('partials/header.php') ?>
    <div class="contact">
        <h4 class="title1">Alguma dúvida?</h4>
        <br>
        <h3 class="text">
            <p>Entre em contato com nossa equipe.</p>
            <p>Nós ajudaremos você!</p>
        </h3>

        <br><br>

        <img class="insta" src="images/svgs/instagram.svg">
        <a class="text_contact1" href="https://instagram.com/quiron_cps?igshid=YmMyMTA2M2Y=">@quíron_cps</a><br>
        <div class="linha"></div>
        <img class="email" src="images/svgs/envelope.svg">
        <a class="text_contact2" href="">quirontcc@gmail.com</a><br>
        <div class="linha2"></div>
        <img class="tel" src="images/svgs/telephone.svg">
        <a class="text_contact3" href="">(11)4002-8922</a>
    </div>

    <div class="formulario">
    <h1 class="title2">Fale conosco!</h1>
    <form
      action="https://formsubmit.co/quirontcc@gmail.com"
      method="POST"
      class="form"
    >
      <label for="name">Nome</label>
      <input type="text" name="name" id="name" required />
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" required />
      <label for="message">Mensagem</label>
      <textarea name="message" id="message" required></textarea>
      <input type="hidden" name="_captcha" value="false" />
      <input
        type="hidden"
        name="_next"
        value="http://localhost/QUIRON/src/web/contato.php"
      />
      <button type="submit">Enviar</button>
    </form>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include('partials/footer.php') ?>
</body>
</html>