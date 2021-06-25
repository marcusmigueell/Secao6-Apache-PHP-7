<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            do {
                ..
                ..
                ..
            } while(condição);

        */

            $x = 10;

            do {
                
                echo $x . ' ';
                $x--;

                //podemos usar também o break e o continue

            } while($x >= 0);

    ?>
    
</body>

</html>