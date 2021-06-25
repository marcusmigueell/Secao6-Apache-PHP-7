<? require_once "validador_acesso.php"; ?>

<html>

  <head>

    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
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

      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>

    </nav><!-- Fim Logo -->

    <div class="container"> <!-- Inicio Container -->

      <div class="row"> <!-- Inicio Row -->

        <div class="card-home"> <!-- Inicio Card-Home -->

          <div class="card"> <!-- Inicio Card -->

            <div class="card-header"> <!-- Inicio Card-Cabeçalho -->
              Menu
            </div> <!-- Fim Card-Cabeçalho -->

            <div class="card-body"> <!-- Inicio Card-Corpo -->

              <div class="row"> <!-- Inicio Row -->
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="../Secao6-Apache-PHP-MySQL/Imagens/formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>

                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="../Secao6-Apache-PHP-MySQL/Imagens/formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>

              </div> <!-- Fim Row -->

            </div> <!-- Fim Card-Corpo -->

          </div> <!-- Fim Card -->

        </div> <!-- Fim Card-Home -->

      </div> <!-- Fim Row -->

    </div> <!-- Fim Container -->

  </body>

</html>