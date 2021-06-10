<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            Adição (+)----------- soma valores
            Subtração (-)-------- subtrai valores
            Multiplicação (*)---- multiplica valores
            Divisão (/) --------- quociente da divisão entre valores
            Módulo (%) ---------- resto da divisão, sempre será um número inteiro

        */

        $num1 = 13;
        $num2 = 4;

        echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
        echo '<br>';
        echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
        echo '<br>';
        echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
        echo '<br>';
        echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2);
        echo '<br>';
        echo "O resto da divisão inteira entre $num1 e $num2 é " . ($num1 % $num2);
        echo '<br> <hr>';

        $x = 10;

        echo "A soma entre $x e 5 é " . ($x += 5);
        echo '<br>';
        echo "A subtração entre $x e 5 é " . ($x -= 5);
        echo '<br>';
        echo "A multiplicação entre $x e 5 é " . ($x *= 5);
        echo '<br>';
        echo "A divisão entre $x e 5 é " . ($x /= 5);
        echo '<br>';
        echo "O resto da divisão inteira entre $x e 3 é " . ($x %= 3);
        echo '<br> <hr>';

        //operadores de incremento e decremento

        $y = 10;
    
        echo "O valor contido em y é $y <br>";
        $y++;
        echo 'O incremento de y é ' . ($y) . '<br>';

        $z = 15;
    
        echo "O valor contido em z é $z <br>";
        $z--;
        echo 'O decremento de z é ' . ($z) . '<br><hr>';

    ?>
    
</body>

</html>