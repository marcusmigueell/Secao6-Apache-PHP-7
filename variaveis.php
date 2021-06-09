<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        define('BD_URL', 'endereco_bd_dev'); //declaração de variaveis constantes
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        echo BD_URL . '<br>'; // o ponto (.) é usado para concatenação
        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';

        //string = cadeia de caracteres
        $nome = 'Marcus Miguel';

        //int = inteiro
        $idade = 31;

        //float = com casas decimais, ex.: 10.5
        $peso = 73.350;

        //boolean = aceita valores true ou false, verdadeiro e falso respectivamente => true = 1 e false = vazio
        $fumante = false;

        if($fumante) {
            $fumante = 'Sim';
        } else {
            $fumante = 'Não';
        }

    ?>

    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante: <?= $fumante?></p>
    
</body>

</html>