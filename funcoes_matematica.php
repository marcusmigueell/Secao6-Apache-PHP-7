<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            Algumas funções nativas para tarefas matemática

            ceil($numero) --> Arredonda o valor para cima
            floor($numero) --> Arredonda o valor para baixo
            round($numero) --> Arredonda o valor com base nas casas decimais
            rand() --> Gera um inteiro aleatório
            sqrt($numero) --> Retorna a raiz quadrada

        */

        $numero = 10.33;
        echo "Esse é o número inicial =  {$numero} <br>";
        echo 'Arredondar o número para cima = ' . ceil($numero) . '<br>';
        echo 'Arredondar o número para baixo = ' . floor($numero) . '<br>';
        echo 'Arredondar o número conforme as casas decimais = ' . round($numero) . '<br>';
        echo 'Gerando números aleatórios no intervalo que vai de 0 à 500 = ' . rand(5, 500). '<br>';
        echo 'Retornando a raiz quadrada de 16 = ' . sqrt(16);

    ?>
    
</body>

</html>