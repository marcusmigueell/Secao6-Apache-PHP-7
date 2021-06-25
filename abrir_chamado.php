<? require_once "validador_acesso.php"?>

<html>

  <head>

    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
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

    </nav> <!-- Fim Logo -->

    <div class="container"> <!-- Inicio Container -->

      <div class="row"> <!-- Inicio Row -->

        <div class="card-abrir-chamado"> <!-- Inicio Card-Abrir-Chamado -->

          <div class="card"> <!-- Inicio Card -->

            <div class="card-header"> <!-- Inicio Card-Cabeçalho -->
              Abertura de chamado
            </div>

            <div class="card-body"> <!-- Inicio Card-Corpo -->

              <div class="row"> <!-- Inicio Row -->

                <div class="col"> <!-- Inicio Coluna -->
                  
                  <form> <!-- Inicio Formulário -->

                    <div class="form-group">
                      <label>Título</label>
                      <input type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">

                      <label>Categoria</label>
                      <select class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>

                    </div>
                    
                    <div class="form-group">

                      <label>Descrição</label>
                      <textarea class="form-control" rows="3"></textarea>

                    </div>

                    <div class="row mt-5">

                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>

                    </div>

                  </form> <!-- Fim Formulário Login -->

                </div> <!-- Fim Coluna -->

              </div> <!-- Fim Row -->

            </div> <!-- Fim Card-Corpo -->

          </div> <!-- Fim Card -->

        </div> <!-- Fim Card-Abrir-Chamado -->
        
      </div> <!-- Fim Row -->

    </div> <!-- Fim Container -->

  </body>

</html>