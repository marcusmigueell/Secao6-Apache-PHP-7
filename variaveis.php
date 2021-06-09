<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        //string = cadeia de caracteres
        $nome = 'Marcus Miguel';

        //int = inteiro
        $idade = 31;

        //float = com casas decimais, ex.: 10.5
        $peso = 73.350;

        //boolean = aceita valores true ou false, verdadeiro e falso respectivamente => true = 1 e false = vazio
        $fumante = false;

    ?>

    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante: <?= $fumante?></p>
    
</body>

</html>