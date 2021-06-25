<html>

<head>

  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>

</head>

<body>

  <nav class="navbar navbar-dark bg-dark"> <!-- Inicio Logo -->
    <a class="navbar-brand" href="#">
      <img src="../Secao6-Apache-PHP-MySQL/Imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav> <!-- Fim Logo -->

  <div class="container"> <!-- Inicio Container -->

    <div class="row"> <!-- Inicio Row -->

      <div class="card-login"> <!-- Inicio Card-Login -->

        <div class="card"> <!-- Inicio Card -->

          <div class="card-header"> <!-- Inicio Card-Cabeçalho -->
            Login
          </div> <!-- Fim Card-Cabeçalho -->

          <div class="card-body"> <!-- Inicio Card-Corpo -->

            <form> <!-- Inicio Formulário Login -->

              <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha">
              </div>

              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

            </form> <!-- Fim Formulário Login -->

          </div> <!-- Fim Card-Corpo -->

        </div> <!-- Fim Card -->

      </div> <!-- Fim Card-Login -->

    </div> <!-- Fim Row -->

  </div> <!-- Fim Container -->

</body>

</html>