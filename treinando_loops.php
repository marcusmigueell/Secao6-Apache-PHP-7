<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $registro = array (
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4')
        );

        echo '<pre>';
            print_r($registro);
        echo '</pre>';

        echo '<br><br>';

        /*

            $idx = 0;
            
            while ($idx < count($registro)) {

                echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registro[$idx]['conteudo'] . '</p>';
                echo '<hr>';

                $idx++;
            }
            

            do {

                echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registro[$idx]['conteudo'] . '</p>';
                echo '<hr>';

                $idx++;

            } while($idx < count($registro));

        */

        for($idx = 0; $idx < count($registro); $idx++){
            echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registro[$idx]['conteudo'] . '</p>';
            echo '<hr>';
        }

    ?>
    
</body>

</html>