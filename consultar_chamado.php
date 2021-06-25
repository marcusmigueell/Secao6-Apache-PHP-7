<? require_once "validador_acesso.php"?>

<?php

  //chamados
  $chamados = array();

  // abrir o Arquivo.txt
  $arquivo = fopen('Arquivo.txt', 'r');

  // enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)){ // teste pelo fim do arquivo
    //linhas
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  //fechar o arquivo aberto
  fclose($arquivo);


?>

<html>

  <head>

    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
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

    </nav> <!-- Fim Logo -->

    <div class="container"> <!-- Inicio Container -->

      <div class="row"> <!-- Inicio Row -->

        <div class="card-consultar-chamado"> <!-- Inicio Card-Consutar-Chamado -->

          <div class="card"> <!-- Inicio Card -->

            <div class="card-header"> <!-- Inicio Card-Cabeçalho -->
              Consulta de chamado
            </div> <!-- Fim Card-Cabeçalho -->
            
            <div class="card-body"> <!-- Inicio Card-Corpo -->

              <? foreach($chamados as $chamado) { ?>
                
                <?php

                  $chamado_dados = explode('#', $chamado);

                  if($_SESSION['perfil_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $chamado_dados[0]){
                      continue;
                    }
                  }

                  if(count($chamado_dados) < 3) {
                    continue;
                  }

                ?>

                <div class="card mb-3 bg-light">

                  <div class="card-body">

                    <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                    <p class="card-text"><?= $chamado_dados[3] ?></p>

                  </div>

                </div>

              <? } ?>

              <div class="row mt-5">

                <div class="col-6">

                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>

                </div>

              </div>

            </div> <!-- Fim Card-Corpo -->

          </div> <!-- Fim Card -->

        </div> <!-- Fim Card-Consutar-Chamado -->

      </div> <!-- Fim Row -->

    </div> <!-- Fim Container -->

  </body>

</html>