<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        //gettype() => retorna o tipo da variavel
        
        $valor = 10;
        //podemos usar float, double e real, todos eles terá retorno de tipo double
        $valor2 = (float) $valor;
        //converter um inteiro para string
        $valor3 = (string) $valor;

        //converter float para int
        $valorF = 10.35;
        $valorI = (int) $valorF;

        //converter float para string
        $valorS = (string) $valorF;

        //converter string para int
        $valorStr = '22.12';

        $valorInt = (int) $valorStr;

        //converter string para float
        $valorFlo = (float) $valorStr;

        //converter string para boolean
        $valorBool = (boolean) $valorStr;  // se a $valorStr tiver valor ele retornará 1


        echo $valor . ' '. gettype($valor);
        echo '<br>';
        echo $valor2 . ' '. gettype($valor2);
        echo '<br>';
        echo $valor3 . ' '. gettype($valor3);

        echo '<br> <hr>';
        
        echo $valorF . ' '. gettype($valorF);
        echo '<br>';
        echo $valorI . ' '. gettype($valorI);
        echo '<br>';
        echo $valorS . ' '. gettype($valorS);

        echo '<br> <hr>';

        echo $valorStr . ' '. gettype($valorStr);
        echo '<br>';
        echo $valorInt . ' '. gettype($valorInt);
        echo '<br>';
        echo $valorFlo . ' '. gettype($valorFlo);
        echo '<br>';
        echo $valorBool . ' '. gettype($valorBool);

        echo '<br> <hr>';



    ?>
    
</body>

</html>