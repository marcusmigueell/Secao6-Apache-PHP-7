<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            Vamos ver as 6 principais funções de manipulação de strings

            strtolower($texto)   -> Transforma todos os caracteres da string em minúsculas
            strtoupper($texto)   -> Transforma todos os caracteres da string em maiúsculas
            ucfirst($texto)      -> Transforma o primeiro caracter da string em maiúsculo
            strlen($texto)       -> conta a quantidade de caracteres de uma string
            str_replace(<procura por>, <substitui por>, $texto)  -> Substitui uma cadeia de caracteres por outra dentro de uma string
            substr($texto, <posicao inicial>, <qtde caracteres>) -> Retorna parte de uma string 
            
        */

        $texto = 'Marcus Vinicius';

        echo 'Texto que faremos os exemplos = ' . $texto;
        echo '<br><hr>';
        echo strtolower($texto);
        echo '<br><hr>';
        echo strtoupper($texto);
        echo '<br><hr>';
        echo ucfirst($texto);
        echo '<br><hr>';
        echo strlen($texto);
        echo '<br><hr>';
        echo str_replace('Vinicius', 'Miguel', $texto);
        echo '<br><hr>';
        echo substr($texto, 2, 6);

    ?>
    
</body>

</html>