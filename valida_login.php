<?php

    /*
        Em index.php nas linhas 46 e 50, criamos o atributo name com os respectivos valores email e senha.
        No navegador web, http://localhost/Secao6-Apache-PHP-MySQL/index.php ao preenchermos os campos
        email e senha, e clicar no botão entrar, automaticamente é preenchido na barra de navegação,
        o seguinte link -> http://localhost/Secao6-Apache-PHP-MySQL/valida_login.php?email=marcus%40teste.com.br&senha=123456 passando os valore digitados nos campos do formulário. Para coletarmos essa informação 
        utilizamos a variável super global $_GET['campo'], onde o campo é respectivamente email e senha, criados nas linhas 46 e 50 do index.php. Com isso, a título de exemplo, se dermos um echo $_GET['email']; 
        conseguiremos mostrar o que o usuário escreveu, mas o intuito não é mostrar, e sim criar uma 
        função para validar o login!!!

            //echo $_GET['email']; 
            //echo '<br>';
            //echo $_GET['senha'];

        Para que não apareça as informações de login na url, pois, se aparecer e alguém estiver vendo o usuário fazer o login,
        a pessoa verá informações de login do usuário, como a senha. Para escondermos isso em index.php na linha 43 do nosso projeto,
        após o action, usaremos o método post, com a seguinte declaração <form action="..." method="post"> e com isso não poderemos usar
        apenas o método $_GET, portanto, teremos que mudar a super global para a variável super global $_POST

            echo $_POST['email']; 
            echo '<br>';
            echo $_POST['senha'];
    */

    session_start();

    //Variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    /*
        Até esse momento não temos um banco de dados com as informações dos usuário cadastrados, por esse motivo, vou criar um array
        simulando um BD com possíveis usuários cadastrados.
    */

    $usuários_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => '456789')
    );

    foreach($usuários_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


    


?>