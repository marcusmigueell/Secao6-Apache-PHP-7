<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*
            //operadores comparação / lógicos
            while (condição) {
                ..
                ..
                ..
            }

        */

            $num = 1;
            echo '<----- Inicio do primeiro Loop ----->';

            while ($num < 10) {

                echo $num . ' ';

                if ($num == 5) break;

                $num++; // critério de parada
            }

            echo '<----- Fim do primeiro Loop ----->';

            echo '<br><br>';

            $num1 = 0;
            echo '<----- Inicio do segundo Loop ----->';

            while ($num1 < 10) {
                
                $num1++; // critério de parada

                if ($num1 == 5) continue;
                
                echo $num1 . ' ';
            }

            echo '<----- Fim do segundo Loop ----->';

    ?>
    
</body>

</html>