<?php
//conexão e login
include("../server/PDO/conexao.php");
include("../server/login.php");
?>


<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles/styles_m/fonts.css">

  <link rel="stylesheet" href="styles/styles_m/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="styles/styles_m/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="styles/styles_m/entrar.css">

  <!-- Navbar Css  -->
  <link rel="stylesheet" href="styles/navbar-index.css">
  <link rel="stylesheet" href="styles/theme.css">

  <link rel="icon" href="../web/images/logos/arco-dark-2.png">

  <link rel="stylesheet" href="styles/navbar-inicio.css">

  <title>Entrar na QUIRON</title>
</head>

<body>

  <header>
    <nav id="nav1">
      <div class="container">
        <a href="./">
          <center>
            <img src="images/logos/arco-e-texto-dark.png" id="imagemNav" class="logo2" alt="Logo">
          </center>
        </a>
      </div>
    </nav>
  </header>
    <title>Entrar na QUIRON</title>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/svgs/img_login.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <br>
                <h3>Entre na QUÍRON</h3>
                <p class="mb-4">A próxima vaga de emprego na palma da sua mão</p>
              </div>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                <div class="form input">
                  <label for="username">Email</label>
                  <input type="email" name="usuario" required class="input-text-alterar" id="usuario">

                </div>
                <div class="form input">
                  <label for="password">Senha</label>
                  <input type="password" name="senha" required class="input-text-alterar" id="senha">

                </div>
                <br>
                <div class="div-form-entrys">
                  <p class="mb-4">Entrar como:</p>
                  <center>

                    <input required type="radio" id="Professor-entry" id="prof" name="entrada" value="professor">
                    <label class="professor-rl" for="prof">Professor</label>

                    <input required type="radio" id="Escola-entry" id="esco" name="entrada" value="escola">
                    <label class="escola-rl" for="esco">Escola</label><br>
                  </center>
                </div>
                <br>

                <input type="submit" name="submit" value="Entrar" class="btn btn-block btn-primary">


                <br>
                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Lembrar de mim?</span>
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="esqueci_senha" class="forgot-pass">Esqueceu a senha?</a></span> <br>
                  <span class="ml-auto"><a href="cadastrar_professor" class="forgot-pass">Criar Conta</a></span>
                </div>



            </div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </div>
  </div>


  <script src="scripts/jquery_login.min.js"></script>
  <script src="scripts/popper_login.min.js"></script>
  <script src="scripts/bootstrap_login.min.js"></script>
  <script src="scripts/main_login.js"></script>
</body>

</html>