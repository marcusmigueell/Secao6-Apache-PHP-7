<?php

    //removendo sessão de login

    session_start();

    //remover índices do array da sessão
    //unset()
    //unset($_SESSION['autenticado']); //para remover o índice apenas se existir 


    //destuir a variável de sessão
    //session_destroy()

    session_destroy(); //será destruída e após isso forçar um redirecionamento
    header('Location: index.php');



?>